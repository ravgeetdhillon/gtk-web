<?php
$nav = "about";
$title = "GTK+ Overview";
ob_start();
?>

<h2>Overview of GTK+ and its Libraries</h2>

<img src="/images/architecture.png" class="diagram" alt="GTK+ has grown over time, and with it, has brought different libraries including Pango (text layout), Cairo (graphics rendering), GDK (platform abstraction), ATK (accessibility), GIO (file input/output), and GLib (core library)." title="GTK+ Architecture" />

<div class="columns">

	<div class="left">

		<h2>Architecture</h2>
		<p>Over time GTK+ has been built up to be based on four libraries, also developed by the GTK+ team:</p>

		<ul class="librarieslist">
			<li class="glib"><a href="https://developer.gnome.org/glib/" class="external">GLib</a>, a low-level core library that forms the basis of GTK+. It provides data structure handling for C, portability wrappers and interfaces for such run-time functionality as an event loop, threads, dynamic loading and an object system.</li>
			<li class="pango"><a href="http://www.pango.org" class="external">Pango</a>, a library for layout and rendering of text with an emphasis on internationalization. It forms the core of text and font handling for GTK+.</li>
			<li class="cairo"><a href="http://www.cairographics.org/" class="external">Cairo</a>, a library for 2D graphics with support for multiple output devices (including the X Window System, Win32) while producing a consistent output on all media while taking advantage of display hardware acceleration when available.</li>
			<li class="atk"><a href="https://developer.gnome.org/atk/" class="external">ATK</a>, a library for a set of interfaces providing accessibility. By supporting the ATK interfaces, an application or toolkit can be used with tools such as screen readers, magnifiers, and alternative input devices.</li>
		</ul>

	</div>

	<div class="right">

		<h2>Creation</h2>
		<p>GTK+ was initially developed for and used by the GIMP, the GNU Image Manipulation Program. It is called the "The GIMP ToolKit" so that the origins of the project are remembered. Today it is more commonly known as GTK+ for short and is used by a large number of applications including the GNU project's GNOME desktop.</p>

		<p>Peter Mattis started it all, with help from Spencer Kimball and Josh Macdonald. Marius Vollmer taught us how to make GTK+ work for language bindings. Lars Hamann and Stefan Jeske added all sorts of features to the core widgets. Carsten Haitzler designed and did the first implementation of theme support. Shawn Amundson did release management for GTK+ 1.0 and GTK+ 1.2.</p>

		<h2>License</h2>
		<p>GTK+ is free software and part of the GNU Project. However, the licensing terms for GTK+, the GNU LGPL 2.1, allow it to be used by all developers, including those developing proprietary software, without any license fees or royalties.</p>

		<h2>Languages</h2>
		<p>GTK+ has been designed from the ground up to support a range of <a href="language-bindings.php">languages</a>, not only C/C++. Using GTK+ from languages such as Perl and Python (especially in combination with the Glade GUI builder) provides an effective method of rapid application development.</p>

		<h2>Community</h2>
		<p>GTK+ has a large development community, as can be seen by the lists of contributors in GTK+ release announcements. While there are people that can be identified as responsible for one piece of code or the other, there are also <a href="development.php#Team">core developers</a> who are always working on the toolkit.</p>

	</div>
	
</div>
<?php require 'template.php';
