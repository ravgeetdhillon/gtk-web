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
	<h2><a name="WhatIsGTK">What is GTK+?</a></h2>
	
	<p>GTK+ is a highly usable, feature rich toolkit for creating
	  graphical user interfaces which boasts cross platform
	  compatibility and an easy to use API. GTK+ it is written in
	  C, but has <a href="language-bindings.html">bindings</a> to
	  many other popular programming languages such as C++, Python
	  and C# among others. GTK+ is licensed under
	  the <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html">GNU
	  LGPL 2.1</a> allowing development of both free and
	  proprietary software with GTK+ without any license fees or
	  royalties.</p> 
	<p>Get an <a href="overview.html">overview</a> of
	  GTK+. Understand who started it, the basic architecture and
	  why we use the license we do.</p>
	<p>GTK+ has been involved in
	  <a href="http://www.gtkfiles.org/">many</a> <a href="http://www.gtk-apps.org/">projects</a> and
	  some big platforms. To see what people think of GTK+ and
	  how it has been used in commercial
	  projects, <a href="commerce.html">read the success
	  stories...</a></p>  
	<p>To find out how more about what GTK+ can do for you, visit our
	  <a href="features.html">features</a> page. If you want to 
	  <a href="development.html#Contributing">contribute</a>, you are 
	  more than welcome.</p>   
<!--
	<div id="events">
	  <h2><a name="UpcomingEvents">Upcoming Events</a></h2>
	  
          <div class="news-item">
            <p class="news-title">Gran Canaria Desktop Summit 2009</p>
            <p class="news-date">July 3-11, 2009</p>
            <p class="news-desc">The inaugural Desktop Summit, uniting the flagship conferences of the GNOME and KDE communities, GUADEC and Akademy, will be held in Gran Canaria, Canary Islands, Spain the week of July 3-11, 2009.
	      
	      The conference will be hosted by Cabildo, the local government of Gran Canaria.
	      
	      The GNOME and KDE communities will use this co-located event to intensify momentum and increase collaboration between the projects. It gives a unique opportunity for key figures to collaborate and improve the free and open source desktop for all. Please visit the <a href="http://www.grancanariadesktopsummit.org/index.php/Main_Page">official website</a> for further information.</p>
          </div>
	</div>
-->
	
	<div id="news">
	  <h2><a name="RecentNews">Recent news</a></h2>

<?php
require_once('magpierss/rss_fetch.inc');
define('MAGPIE_CACHE_DIR', '/var/cache');

$rss = fetch_rss('http://blogs.gnome.org/gtk/feed/');
$items = array_slice($rss->items, 0, 5);

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

	  <hr/>
<?
}
?>

	   <p>For older news, visit our <a href="news-archives.php">archives</a>.</p>

	</div> <!-- news -->
	  	
      </div> <!-- content -->
    
      <div id="footer">Copyright 2007-2008 The GTK+ Team</div>
      
    </div> <!-- container -->
  
  </body>
</html>
