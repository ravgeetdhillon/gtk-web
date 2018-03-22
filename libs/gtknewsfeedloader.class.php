<?php

/***************************************
 * Made specifically for gtk.org
 * By Devin Samarin <eboyjr14@gmail.com>
 ***************************************/

define("TWITTER", 1);
define("IDENTICA", 2);

class GTKNewsFeedLoader {

	public $protocol = TWITTER; // The protocol used to get the feed. Supports TWITTER or IDENTICA, and set in the constructor

	public $usecaching = true;
	public $iscached;

	public $cachetime = 3600; // 1 hour
	public $cachefile;

	public $count;
	public $userid = array(
		IDENTICA => 135193,
		TWITTER => 116482352
	);

	private $url;

	function __construct($protocol) {
		$this->protocol = $protocol;

		// I'm glad StatusNet has a Twitter-compatible API
		if( $this->protocol == TWITTER ) {
			$this->url = "http://api.twitter.com/1/statuses/user_timeline.json";
		} elseif ( $this->protocol == IDENTICA ) {
			$this->url = "http://identi.ca/api/statuses/user_timeline.json";
		} else {
			print "Protocol not supported.";
		}
	}

	// Returns an aray of items in the news feed e.g.
	// array(
	//     array(
	//         "text" => "This is the text of the news item http://example.com via @eboyjr",
	//         "html" => "This is the html of the news item <a href='http://example.com'>http://example.com</a> via @<a href='http://twitter.com/eboyjr'>eboyjr</a>",
	//         "date" => 364229432 // This is the timestamp of when it was published
	//     )
	// )
	public function load( $options ) {
		$this->cachefile = dirname(__FILE__).'/newsfeed.cache.txt';
		$this->count = $options['count'];
		$options['count'] *= 2;
		$options['user_id'] = $this->userid[$this->protocol];
		$options['include_rts'] = true;

		// If the cache file is used, the options aren't set right away,
		// so delete the cache file for changes to appear.
		if( isset($_GET['nocache']) ) $this->usecaching = true;
		$this->iscached = false;
		if( $this->usecaching ) {
			if( file_exists($this->cachefile) ) {
				if( (time() - filemtime($this->cachefile)) < $this->cachetime ) {
					$list = unserialize(file_get_contents($this->cachefile));
					$this->iscached = true;
					return $list;
				}
			} else {
				fclose(fopen($this->cachefile, 'a', true));
			}
		}
		$options['trim_user'] = true;
		$items = json_decode(file_get_contents($this->url."?".http_build_query($options)), true);
		$list = array();
		foreach( $items as $item ) {

			// We don't want replies in our news feed
			if( $item['in_reply_to_user_id'] != null ) continue;
			$list[] = array(
				'text' => $item['text'],
				'html' => $this->htmlify($item),
				'date' => $this->getdate($item)
			);
			if( --$this->count <= 0 ) break;
		}

		if( $this->usecaching )
			file_put_contents($this->cachefile, serialize($list));

		return $list;
	}

	private function htmlify(&$item) {
		$find = array(
			'@((s?ftp|https?)://([-\w\.]+)+(:\d+)?(/([-\w/_\.+]*(\?\S+)?)?)?)@', // Generate hyperlinks
			'/^RT /',   // This is just here
			//'/ (!|#)/', // to make the feed
			'/ gtk$/',  // more readable.
			'/@([A-Za-z0-9_]+)/' // Link to users
		);
		$replace = array(
			'<a href="$1">$1</a>',
			'Post by ',
			//' ',
			''
		);

		// It looks like whoever is posting stuff to identica mentions users that
		// only have a Twitter account
		//if( $this->protocol == TWITTER )
			$replace[] = '<a href="http://twitter.com/$1">$1</a>';
		//elseif( $this->protocol == IDENTICA )
		//	$replace[] = '<a href="http://identi.ca/$1">$1</a>';

		return preg_replace($find, $replace, htmlentities($item['text'], NULL, 'utf-8'));
	}

	private function getdate(&$item) {
		return strtotime($item['created_at']);
	}

	// Accepts $time (timestamp) and $now (timestamp) and returns a string saying when it was e.g. about 5 minutes ago
	public function reltime($time, $now = false) {
		$time = (int) $time;
		$curr = $now ? $now : time();
		$shift = $curr - $time;

		if ($shift < 45):
			$diff = $shift;
			$term = "second";
		elseif ($shift < 2700):
			$diff = round($shift / 60);
			$term = "minute";
		elseif ($shift < 64800):
			$diff = round($shift / 60 / 60);
			$term = "hour";
		else:
			$diff = round($shift / 60 / 60 / 24);
			$term = "day";
		endif;

		if ($diff != 1) $term .= "s";
		return "about $diff $term ago";
	}
}


/* Fix for older versions of PHP if json_decode is not available on the system. */
/* This is painfully slow, so use ot caching is recommended (or upgrading to a
/* recent PHP version which supports json_decode natively. */
if (!function_exists('json_decode')) {
	function json_decode($input, $assoc = false) {
		require_once('JSON.php');
		$json = new Services_JSON($assoc ? SERVICES_JSON_LOOSE_TYPE : 0);
		$obj = $json->decode($input);
		return $obj;
	}
}

?>
