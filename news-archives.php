<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html"/>

    <meta name="Description" content="GTK+ Home Page" />
    <meta name="Keywords" content="GTK, GTK+, Gimp, Toolkit" />

    <meta name="allow-search" content="yes" />
    <meta name="revisit-after" content="10 Days" />
    <meta name="reply-to" content="gtk-devel@gnome.org" />
    
    <link href="gtk.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="images/gtk-logo.ico" type="image/x-icon" />

    <title>GTK+ - About</title>
    
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix.js"></script>
<![endif]-->

  </head>
  
  <body>
    <div id="container">
      <div id="header"><img src="images/header-logo.png" alt="gtk logo" width="574" height="112" /><h1>The GTK+ Project</h1></div>
      <div id="menu">

	<table>
	  <tr>
	    <td><a title="About GTK+." href="index.php" class="current">About</a></td>
	    <td><a title="Find out what GTK+ can do for you." href="features.html">Features</a></td>
	    <td><a title="Download the latest version of GTK+." href="download.html">Download</a></td>
	    <td><a title="See applications using GTK+ on various platforms." href="screenshots.html">Screenshots</a></td>
	    <td><a title="Read up on documentation about how to use GTK+." href="documentation.html">Documentation</a></td>
	    <td><a title="Find out how you can get involved in the develop of GTK+." href="development.html">Development</a></td>
	  </tr>
	</table>
      </div>
      <div id="content">

	<h2><a name="RecentNews">News archive</a></h2>


<?php
require_once('magpierss/rss_fetch.inc');
define('MAGPIE_CACHE_DIR', '/var/cache');

$rss = fetch_rss('http://blogs.gnome.org/gtk/feed/');
$items = array_slice($rss->items, 5);

foreach ($items as $item) {
        $href = '';
        $title = $item['title'];
	$timestamp = date('F j, Y',$item['date_timestamp']);
        $desc = $item['content']['encoded'];
?>

           <div class="news-item">
              <p class="news-title"><? echo $title ?></p>
              <p class="news-date"><? echo $timestamp ?></p>
              <p class="news-desc"><? echo $desc ?></p>
	      <? echo $href ?>
           </div>

<?
}
?>

	<br/>
      </div> <!-- content -->
      
      <div id="footer">Copyright 2007-2008 The GTK+ Team</div>
      
    </div> <!-- container -->
    
  </body>
</html>
