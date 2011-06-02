<?php
/*
.--------------------------------------------------------------.
| Test results                                                 |
|-------------------------.--------.---------------------------|
| Lynx                    |  0.??% | Works beautifully         |
|-------------------------+--------+---------------------------+
| Opera Mini 5 beta 2     |  0.??% | Works nicely              |
|-------------------------+--------+---------------------------|
| Firefox 1/1.5           |  0.08% | Not tested                |
|-------------------------+--------+---------------------------|
| Firefox 2               |  0.46% | Works                     |
|-------------------------+--------+---------------------------|
| Opera                   |  2.01% | Works                     |
|-------------------------+--------+---------------------------|
| Firefox 3               |  2.47% | Works                     |
|-------------------------+--------+---------------------------|
| Firefox 3.5             |  4.76% | Works                     |
|-------------------------+--------+---------------------------|
| Safari                  |  4.90% | Works                     |
|-------------------------+--------+---------------------------|
| Google Chrome <3        |  8.30% | Works                     |
|-------------------------+--------+---------------------------|
| Internet Explorer 7     | 11.43% | Works                     |
|-------------------------+--------+---------------------------|
| Firefox 3.6             | 15.99% | Works                     |
|-------------------------+--------+---------------------------|
| Internet Explorer 6     | 16.97% | Works fine                |
|                         |        | The external link bg imgs |
|                         |        | are  disabled             |
|-------------------------+--------+---------------------------|
| Internet Explorer 8     | 26.87% | Works                     |
'-------------------------'--------'---------------------------'

IE Note: Rounded corners don't display on the footer and the div.bubble's.
The page still looks good without rounded corners, and I consider rounded
corners to be an optional benefit of browsers that support it.

If you are using Firefox 3.6, Google Chrome, or Opera, then the page layout
changes depending on the size of the window. This is so that if your screen
is too small, the things start rearranging, e.g. two-column mode goes into
one-column mode. Go ahead and resize your browser right now! Do it! It's nice!

Also, there is a separate layout for when you are printing the page. I only
tested this in Firefox, and I think thats only a bug when you see the first
page with just the title and then a whole bunch of blank space. I don't know
how to fix it but that's going to happen no matter if I have the special
layout or not. Opera renders it fine, even though the print preview dialog
is buggy. It must be tough doing print preview since Google Chrome doesn't
have it working either.

Also in order to create a page that uses this template, here is what you do:
	* Start the page with ob_start();
	* Set optional $title variable to be used as the page title
	* Put your HTML here
	* Include or require this page

Here is an example:

--------------------------------------------------------------------------------
<?php
$title = "Page title";
ob_start();
?>
<h2>Hello world</h2>
<p>Lorem ipsum dolor sit amet consectetuer adipscing...</p>
<?php require 'template.php';
--------------------------------------------------------------------------------

NOTE: I didn't use the end php ?> tag since it is not required and makes sure
nothing else is printed. This is optional though and just something that I have
gotten used to doing.

Remember the path to template.php is relative to the current file, so put '../'
where appropriate.

FILES:
	CSS:
		global.css: Contains main W3C-validated CSS styling for this page
		browser.css: Builds on global.css with CSS3/Browser-specific stuff that
		             couldn't pass validation with W3C (It's not that important
		             though anyway)

INLINE
	CSS:
		Internet Explorer-specific styling is written in this file with
			conditional comments.

*/

$content = ob_get_clean();

/* REMOVE this if block, and also clean up the footer */
if( !isset($nofeedback) ) {

	if( isset($_GET['page']) ) {
		highlight_file("/var/gtk".$_SERVER['SCRIPT_NAME']);
		die();
	}

	if( isset($_GET['template']) ) {
		highlight_file(__FILE__);
		die();
	}
}

if (!isset($nav)) {
	$nav = "";
}

$tmpnav = array(
	"about" => array( "About", "/", "About GTK+" ),
	"features" => array( "Features", "/features.php", "Find out what GTK+ can do for you" ),
	"download" => array( "Download", "/download/index.php", "Download the latest version of GTK+" ),
	"screenshots" => array( "Screenshots", "/screenshots/index.php", "See applications using GTK+ on various platforms" ),
	"documentation" => array( "Documentation", "/documentation.php", "Read up on documentation about how to use GTK+" ),
	"development" => array( "Development", "/development.php", "Get involved in the development of GTK+" )
);
if (!isset($navlinks)) {
	$navlinks = $tmpnav;
} elseif ($globalnav) {
	$globalnav = $tmpnav;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="en-us" />
<meta name="author" content="The GTK+ Team" />
<meta name="description" content="GTK+ is a highly usable, feature rich toolkit for creating graphical user interfaces which boasts cross platform compatibility and an easy to use API. GTK+ is licensed under the GNU LGPL 2.1 allowing development of both free and proprietary software with GTK+ without any license fees or royalties." />
<meta name="keywords" content="gtk, gtk+, gimp, toolkit, user interface" />
<link href="/css/global.css" rel="stylesheet" type="text/css" />
<link href="/css/browser.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="/images/gtk-logo.ico" type="image/x-icon" />
<link rel="shortcut icon" href="/images/gtk-logo.ico" type="image/x-icon" />

<?php if( isset($_GET['red']) ) { ?>
<style type="text/css">
h2 {
	color: #AA0000;
}
</style>
<?php } ?>

<!--[if lte IE 6]>
<script defer="defer" type="text/javascript">
//<![CDATA[

// The following is an ever-so-slighly customized version of supersleight
var supersleight=function(){var root='content';
	var applyPositioning=true;
	var shim='/images/x.gif';
var fnLoadPngs=function(){if(root){root=document.getElementById(root);}else{root=document;}
for(var i=root.all.length-1,obj=null;(obj=root.all[i]);i = i - 1){if(obj.currentStyle.backgroundImage.match(/\.png/i)!==null){bg_fnFixPng(obj);}
if(obj.tagName=='IMG'&&obj.src.match(/\.png$/i)!==null){el_fnFixPng(obj);}
if(applyPositioning&&(obj.tagName=='A'||obj.tagName=='INPUT')&&obj.style.position===''){obj.style.position='relative';}}};var bg_fnFixPng=function(obj){var mode='scale';var bg=obj.currentStyle.backgroundImage;var src=bg.substring(5,bg.length-2);if(obj.currentStyle.backgroundRepeat=='no-repeat'){mode='crop';}
obj.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='"+mode+"')";obj.style.backgroundImage='url('+shim+')';};var el_fnFixPng=function(img){var src=img.src;img.style.width=img.width+"px";img.style.height=img.height+"px";img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='crop')";img.src=shim;};var addLoadEvent=function(func){var oldonload=window.onload;if(typeof window.onload!='function'){window.onload=func;}else{window.onload=function(){if(oldonload){oldonload();}
func();};}};return{init:function(){addLoadEvent(fnLoadPngs);},limitTo:function(el){root=el;},run:function(){fnLoadPngs();}};}();supersleight.init();

//]]>
</script>
<![endif]-->

<!--[if lte IE 6]>
<style type="text/css">
/*<![CDATA[*/
/* So content div can clear sidebar floats */
#content {
	width: 860px;
}
/* Fix double margin float bug */
.bindingtable, .legend {
	display: inline;
}

/* No let's disable it for external links it doesn't work well enough */
a.external, a.pdf, a.email, a.info, a.irc, a.archives, a.download {
	padding: 0 !important;
	background-image: none;
}

a:hover { text-decoration: none; }

/* Inline-block for screenshots */
.gallery li {
	height: 175px;
	zoom: 1;
	display: inline;
}
.gallery .figure {
	text-align: center;
}
.gallery .figure a {
	margin: 0 auto;
	display: block;
}
.gallery .caption {
	word-wrap: nowrap;
}

.columns {
	width: 860px;
	overflow: hidden;
}
/*]]>*/
</style>
<![endif]-->

<!--[if gt IE 6]>
<style type="text/css">
/*<![CDATA[*/
/* IE7/8-implemented link images */
a {
	zoom: 1;
}
/*]]>*/
</style>
<![endif]-->

<!--[if IE]>
<style type="text/css">
/*<![CDATA[*/
/* Pre elements aren't wrapping */
pre {
	word-wrap: break-word;
}

/* Platform list doesn't render correctly */
.platform_list li {
	list-style-image: none;
	height: 36px;
}

/* Hovering in IE causes reflow */
:link:hover, :visited:hover {
	border-bottom: none;
	text-decoration: underline;
	color: #999;
}

.newsfeed {
	list-style-image: none;
}

/* Inline-block for screenshots */
.gallery li {
	zoom: 1;
	*display: inline;
}
/*]]>*/
</style>
<![endif]-->

<title><?php if (!isset($title)) { $title = "The GTK+ Project"; } echo htmlentities($title); ?></title>
</head>

<body<?php if (isset($bodyclass)) { echo ' class="'.$bodyclass.'"'; } ?>>

<?php if (isset($globalnav)) { ?>
	<div id="globalnav_wrap">
		<div id="globalnav">
			<span class="relation">Part of the <a href="../">GTK+ Project</a></span>
			<ul><?php foreach( $globalnav as $k => $v ) { ?> 
				<li<?php if ($k == $nav) echo ' class="current"'; ?>><a href="..<?php echo htmlentities($v[1]); ?>"<?php if (isset($v[2])) { echo ' title="'.htmlentities($v[2]).'"'; } ?>><?php echo htmlentities($v[0]); ?></a></li><?php } ?> 
			</ul>
		</div>
	</div>
<?php } ?>

<div id="container">

	<div id="header">
		<h1><span><?php echo htmlentities($title); ?></span></h1>
	</div>

	<div id="navigation">
		<ul><?php foreach( $navlinks as $k => $v ) { ?> 
			<li<?php if ($k == $nav) echo ' class="current"'; ?>><a href="<?php echo htmlentities($v[1]); ?>"<?php if (isset($v[2])) { echo ' title="'.htmlentities($v[2]).'"'; } ?>><?php echo htmlentities($v[0]); ?></a></li><?php } ?> 
		</ul>
	</div>

<div id="content">

<?php if($content !== false) echo $content; ?> 

<br style="clear: both;" />

</div>

	<div id="footer">
		<pre style="display: none;"><!-- For Lynx --></pre>
		<span>Copyright &copy; 2007-2011 The GTK+ Team</span><?php if (!isset($_GET['production'])) { ?> |
		<span>Valid <a href="http://validator.w3.org/check?uri=http://<?php echo htmlentities("gtk.org".$_SERVER['REQUEST_URI']); ?>&amp;charset=utf-8&amp;doctype=Inline&amp;group=0">XHTML</a> and <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo htmlentities("gtk.org"); ?>/css/global.css&amp;profile=css21&amp;usermedium=all&amp;warning=1&amp;lang=en">CSS</a></span>
<?php if( !isset($nofeedback) ) { ?>
<?php } ?>
<?php } ?>
	</div>

</div>
<?php if (isset($scripts)) { foreach ($scripts as $url) { ?> 
<script type="text/javascript" src="<?php echo htmlspecialchars($url); ?>"></script><?php } } ?> 

</body>
</html>
