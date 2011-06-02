<?php
$nav = "about";

/***************************************
 * Made specifically for gtk.org
 * By Devin Samarin <eboyjr14@gmail.com>
 ***************************************/

echo '<!-- test 0a -->';

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

echo '<!-- test 0b -->';

ob_start();

echo '<!-- test 0c -->';

?>

<div class="sidebar" id="NewsFeed">

	<h2>News Feed</h2>
	<ul class="newsfeed">
<?php

echo '<!-- test 1 -->';
$newsfeed = new GTKNewsFeedLoader(IDENTICA);
echo '<!-- test 2 -->';
$newsfeed->usecaching = false;
echo '<!-- test 3 -->';
$items = $newsfeed->load( array( 'count' => 6 ) );
echo '<!-- test 4 -->';

$first = true;
echo '<!-- test 5 -->';
if( $newsfeed->iscached ) echo '<!-- This content is cached -->';
echo '<!-- test 6 -->'

foreach( $items as $item ) {
?> 
		<li<?php if($first) echo ' class="first"'; ?>>
			<div class="time">
				<span class="date"><?php echo date("F j, Y", $item['date']); ?></span>
				<span class="relt"><?php echo $newsfeed->reltime($item['date']); ?></span>
			</div>
			<span class="text"><?php echo $item['html']; ?></span>
		</li>
<?php
$first = false;
} ?>
	</ul>

	<div class="newsfeed_buttons">
		<div>Follow the GTK+ project on:</div>
		<span>
			<a href="http://twitter.com/GTKtoolkit" title="Follow GTKtoolkit on Twitter">Twitter</a> |
			<a href="http://identi.ca/gtktoolkit" title="Follow GTKtoolkit on identi.ca">identi.ca</a>
		</span>
	</div>

</div>

<h2 id="WhatIsGTK"><a name="WhatIsGTK">What is GTK+, and how can I use it?</a></h2>

<p><span id="intro">GTK+</span>, or the GIMP Toolkit, is a multi-platform toolkit for creating graphical user interfaces. Offering a complete set of widgets, GTK+ is suitable for projects ranging from small one-off tools to complete application suites.</p>

<dl>
	<dt id="WhereCanIUseIt">Where can I use it?</dt>
	<dd>Everywhere! GTK+ is cross-platform and boasts an easy to use API, speeding up your development time. Take a look at the <a href="screenshots/">screenshots</a> to see a number of platforms GTK+ will run.</dd>

	<dt id="WhatLanguages">What languages are supported?</dt>
	<dd>GTK+ is written in C but has been designed from the ground up to support a <a href="language-bindings.php">wide range of languages</a>, not only C/C++. Using GTK+ from languages such as Perl and Python (especially in combination with the <a href="http://glade.gnome.org/" class="external">Glade GUI builder</a>) provides an effective method of rapid application development.</dd>

	<dt id="AreThereRestrictions">Are there any licensing restrictions?</dt>
	<dd>GTK+ is free software and part of the GNU Project. However, the licensing terms for GTK+, the <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html" class="external">GNU LGPL</a>, allow it to be used by all developers, including those developing proprietary software, without any license fees or royalties.</dd>
</dl>

<p>Get an <a href="overview.php">overview</a> of GTK+. Understand who started it, the basic architecture and why we use the license we do.</p>

<p>GTK+ has been involved in <a href="http://www.gtkfiles.org/" class="external">many</a> <a href="http://www.gtk-apps.org/" class="external">projects</a> and some big platforms. To get a glimpse of what people think of GTK+ and how it has been used in commercial projects, <a href="commerce.php">read the success stories...</a></p>

<p>To find out how more about what GTK+ can do for you, visit our <a href="features.php">features</a> page. If you want to <a href="development.php#Contributing">contribute</a>, you are more than welcome.</p>

<?php require 'template.php';
