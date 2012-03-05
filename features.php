<?php
$nav = "features";
$title = "GTK+ Features";

ob_start();

?>

<div class="bubbles left">

	<div class="bubble" id="Stability">
		<h2><a name="Stability">Stability</a></h2>
		<p>GTK+ has been developed for over a decade to be able to deliver the enticing features and superb performance that it brings to your application development. GTK+ is supported by a large community of developers and has core maintainers from companies such as <a href="http://www.redhat.com/" class="external">Red Hat</a>, <a href="http://www.novell.com/" class="external">Novell</a>, <a href="http://www.lanedo.com/gtk+.html" class="external">Lanedo</a>, <a href="http://www.codethink.co.uk/" class="external">Codethink</a>, <a href="http://www.openismus.com/" class="external">Openismus</a> and <a href="http://www.intel.com/" class="external">Intel</a>.</p>
	</div>

	<div class="bubble" id="LanguageBindings">
		<h2><a name="LanguageBindings">Language Bindings</a></h2>
		<p>GTK+ is available in many other programming languages thanks to the <a href="language-bindings.php">language bindings</a> available. This makes GTK+ quite an attractive toolkit for application development.</p>
	</div>

	<div class="bubble" id="Interfaces">
		<h2><a name="Interfaces">Interfaces</a></h2>
		<p>GTK+ has a comprehensive collection of core widgets and interfaces for use in your application.</p>
		<div class="figure">
			<a href="images/features/twf.png" class="image"><img src="images/features/thumbnail-twf.png" alt="The Widget Factory" /></a>
		</div>
		<ul>
			<li>Windows (normal window or dialog, about and assistant dialogs)</li> 
			<li>Displays (label, image, progress bar, status bar)</li> 
			<li>Buttons and toggles (check buttons, radio buttons, toggle buttons and link buttons)</li> 
			<li>Numerical (horizontal or vertical scales and spin buttons) and text data entry (with or without completion)</li> 
			<li>Multi-line text editor</li> 
			<li>Tree, list and icon grid viewer (with customizable renderers and model/view separation)</li> 
			<li>Combo box (with or without an entry)</li> 
			<li>Menus (with images, radio buttons and check items)</li> 
			<li>Toolbars (with radio buttons, toggle buttons and menu buttons)</li> 
			<li>GtkBuilder (creates your user interface from XML)</li> 
			<li>Selectors (color selection, file chooser, font selection)</li> 
			<li>Layouts (tabulated widget, table widget, expander widget, frames, separators and more)</li> 
			<li>Status icon (notification area on Linux, tray icon on Windows)</li> 
			<li>Printing widgets</li> 
			<li>Recently used documents (menu, dialog and manager)</li> 
		</ul>
	</div>

</div>
<div class="bubbles right">

	<div class="bubble" id="CrossPlatform">
		<h2><a name="CrossPlatform">Cross Platform</a></h2>
		<p>Originally GTK+ was developed for the X Window System but it has grown over the years to include backend support for other well known windowing systems. Today you can use GTK+ on:</p>
		<ul class="platform_list">
			<li class="linux"><a href="download/linux.php">GNU/Linux and Unix</a></li>
			<li class="windows"><a href="download/win32.php">Windows (32-bit)</a> and <a href="download/win64.php">64-bit</a></li>
			<li class="macos"><a href="download/macos.php">Mac OS X</a></li>
		</ul>
	</div>

	<div class="bubble" id="Accommodating">
		<h2><a name="Accommodating">Accommodating</a></h2>
		<p>GTK+ caters for a number features that today's developers are looking for in a toolkit including:</p>
		<ul>
			<li>Native look and feel</li>
			<li>Theme support</li>
			<li>Thread safety</li>
			<li>Object oriented approach</li>
			<li>Internationalization</li>
			<li>Localization</li>
			<li>Accessibility</li>
			<li>Bidirectional text support (LTR/RTL, Left To Right/Right To Left)</li>
			<li>UTF8 support</li>
			<li>Documentation</li>
		</ul>
	</div>

	<div class="bubble" id="Foundations">
		<h2><a name="Foundations">Foundations</a></h2>
		<p>GTK+ is built on top of GLib. GLib provides the fundamental algorithmic language constructs commonly duplicated in applications. This library has features such as: (this list is not a comprehensive list)</p>
		<ul>
			<li>Object and type system</li>
			<li>Main loop</li>
			<li>Dynamic loading of modules (i.e. plug-ins)</li>
			<li>Thread support</li>
			<li>Timer support</li>
			<li>Memory allocator</li>
			<li>Threaded Queues (synchronous and asynchronous)</li>
			<li>Lists (singly linked, doubly linked, double ended)</li>
			<li>Hash tables</li>
			<li>Arrays</li>
			<li>Trees (N-ary and binary balanced)</li>
			<li>String utilities and charset handling</li>
			<li>Lexical scanner and XML parser</li>
			<li>Base64 (encoding &amp; decoding)</li>
		</ul>
	</div>

	<div class="bubble" id="Mobile">
		<h2><a name="Mobile">Mobile</a></h2>
		<p>The GMAE (GNOME Mobile &amp; Embedded) initiative has advanced the use, development and commercialization of GNOME components as a mobile and embedded user experience platform. It has brought together industry leaders, expert consultants, key developers and the community and industry organizations they represent. As a direct result of this, GTK+ has features pertaining to mobile and embedded platform requirements.</p>
		<p>GTK+ has been involved in a number of embedded initiatives over the past few years including the development of:</p>
		<ul>
			<li>Nokia <a href="http://europe.nokia.com/A4145104" class="external">770</a> / <a href="http://web.nseries.com/products/#l=products,n800" class="external">N800</a> / <a href="http://web.nseries.com/products/#l=products,n810" class="external">N810</a> / <a href="http://maemo.nokia.com/n900/" class="external">N900</a></li>
			<li><a href="http://www.laptop.org/" class="external">One Laptop Per Child Project</a></li>
			<li><a href="http://www.openmoko.com/" class="external">OpenMoko</a></li>
		</ul>
	</div>

</div>

<?php require "template.php";
