<?php
$nav = "documentation";
$title = "GTK+ Documentation";
ob_start();
?>
<div class="sidebar">
	<h2><a name="FAQ">FAQ</a></h2>
	<p>For information about to frequently asked questions, please <a href="http://library.gnome.org/devel/gtk-faq/stable/" class="external">visit the FAQ</a>.</p>

	<h2><a name="GTK-Doc">GTK-Doc</a></h2>
	<p>All documentation for the GTK+ project uses GTK-Doc to generate the HTML pages from comments in the C code. To find out more about GTK-Doc <a href="gtk-doc/" class="external">visit the project page</a>.</p>

	<h2><a name="OlderDocumentation">Older Documentation</a></h2>
	<p>Although we recommend the GTK+ 3 platform, we keep the <a href="http://library.gnome.org/devel/gtk/stable/">GTK+ 2</a> and the <a href="documentation-old.php">GTK 1.2 Documentation</a> around for those who need it.</p>
</div>


<h2><a name="API">API Documentation</a></h2>
<p>If the library you are interested in isn't listed here, try the <a href="http://library.gnome.org/devel/references" class="external">documentation references</a> page on library.gnome.org where you will find many other APIs documented which are used throughout the GNOME platform. For documentation of the <a href="language-bindings.php">language bindings</a>, you might be able to find it on the project's page, although the following documentation can still be of use.</p>

<pre style="display: none;"><!-- For Lynx --></pre>

<table class="documentation">
	<tr>
		<th>Library</th>
		<th colspan="3">Versions</th>
	</tr>
	<tr class="even">
		<td>GLib</td> 
		<td><a href="http://library.gnome.org/devel/glib/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/glib/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/glib/" class="external">All</a></td>
	</tr>
	<tr class="odd">
		<td>GObject</td>
		<td><a href="http://library.gnome.org/devel/gobject/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/gobject/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/gobject/" class="external">All</a></td>
	</tr>
	<tr class="even">
		<td>GIO</td>
		<td><a href="http://library.gnome.org/devel/gio/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/gio/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/gio/" class="external">All</a></td>
	</tr>
	<tr class="odd">
		<td>Pango</td>
		<td><a href="http://library.gnome.org/devel/pango/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/pango/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/pango/" class="external">All</a></td>
	</tr>
	<tr class="even">
		<td>ATK</td>
		<td><a href="http://library.gnome.org/devel/atk/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/atk/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/atk/" class="external">All</a></td>
	</tr>
	<tr class="odd">
		<td>GdkPixbuf</td>
		<td><a href="http://library.gnome.org/devel/gdk-pixbuf/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/gdk-pixbuf/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/gdk-pixbuf/" class="external">All</a></td>
	</tr>
	<tr class="even">
		<td>GDK</td>
		<td><a href="http://library.gnome.org/devel/gdk/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/gdk/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/gdk/" class="external">All</a></td>
	</tr>
	<tr class="odd">
		<td>GTK</td>
		<td><a href="http://library.gnome.org/devel/gtk3/stable/" class="external">Stable</a></td>
		<td><a href="http://library.gnome.org/devel/gtk3/unstable/" class="external">Unstable</a></td>
		<td><a href="http://library.gnome.org/devel/gtk3/" class="external">All</a></td>
	</tr>
</table>


<h2><a name="Books">Books</a></h2>
<ul>
	<li>
		<a href="http://www.amazon.com/Foundations-Development-Experts-Voice-Source/dp/1590597931/" class="external">Foundations of GTK+ Development</a>
		<br />This book was written by Andrew Krause.
	</li>
	<li>
		<a href="http://www.amazon.com/Official-GNOME-Developers-Guide/dp/1593270305/" class="external">The Official GNOME 2 Developer's Guide</a>
		<br />This book was written by Matthias Warkus.
	</li>
</ul>

<h2><a name="Tutorials">Tutorials</a></h2>
<ul>
	<li>
		<a href="http://library.gnome.org/devel/gtk-tutorial/stable/" class="external">GTK+ 2.x</a>
		<br />The Official Tutorial.
	</li>
	<li>
		<a href="http://scentric.net/tutorial/treeview-tutorial.html" class="external">GTK+ 2.x Tree View</a> (<a href="http://scentric.net/tutorial/treeview-tutorial.pdf" class="pdf">pdf</a>)
		<br />This tutorial covers the GtkTreeView and was written by Tim-Philipp Müller.
	</li>
	<li>
		<a href="http://www.bravegnu.org/gtktext/" class="external">GTK+ 2.x Text View</a>
		<br />This tutorial covers the GtkTextView and was written by Vijay Kumar B.
	</li>
	<li>
		<a href="http://zetcode.com/tutorials/gtktutorial/" class="external">GTK+ 2.x Tutorial for Beginners</a>
		<br />This tutorial is for beginners describing some of the most common widgets written by Jan Bodnar.
	</li>
	<li>
		<a href="http://ricardo.ecn.wfu.edu/~cottrell/cross-gtk/" class="external">Building GTK apps for MS Windows on Linux</a>
		<br />This tutorial details information about cross-compilation and was written by Allin Cottrell.
	</li>
</ul>

<h2><a name="Articles">Articles</a></h2>
<ul>
	<li>
		<a href="http://www.ibm.com/developerworks/linux/tutorials/l-glib/" class="external">Manage C data using the GLib collections</a>
		<br />A look at using GLib to effectively manage data within C programs by Tom Copeland.
	</li>
	<li>
		<a href="http://www.ibm.com/developerworks/library/l-u-pango1/" class="external">The Pango connection: Part 1</a>, <a href="http://www.ibm.com/developerworks/library/l-u-pango2/" class="external">Part 2</a>
		<br />An introduction to Pango by Tony Graham.
	</li>
	<li>
		<a href="http://gnomejournal.org/article/34/writing-a-widget-using-cairo-and-gtk28" class="external">Writing a Widget Using Cairo and GTK+2.8, Part 1</a>, <a href="http://gnomejournal.org/article/36/writing-a-widget-using-cairo-and-gtk28-part-2" class="external">Part 2</a>
		<br />Article about creating widgets with Cario, the highly capable 2D drawing library.
	</li>
	<li>
		<a href="http://linux.thai.net/~thep/presents/PAN/theppitak-gtk-l10n-paper.pdf" class="pdf">Localizing GTK+</a>
		<br />An article about input method modules and Pango engines by Theppitak Karoonboonyanan.
	</li>
</ul>

<h2><a name="Presentations">Presentations</a></h2>
<ul>
	<li>
		<a href="http://www.lanedo.com/~kris/highlights-of-gtk210-2006.pdf" class="pdf">Highlights of GTK+ 2.10</a>
		<br />Presentation by Kristian Rietveld and Tim Janik at GUADEC 2006.
	</li>
	<li>
		<a href="http://www.gnome.org/~alexl/presentations/guadec2006-printing.pdf" class="pdf">The new GTK+ printing API</a>
		<br />Presentation by Alexander Larsson and John Palmieri at GUADEC 2006.
	</li>
	<li>
		<a href="http://o-hand.com/~ebassi/2006-guadec-recent-files/recent-files.pdf" class="pdf">Recent Files and Bookmarks</a>
		<br />Presentation by Emmanuele Bassi at GUADEC 2006.
	</li>
	<li><a href="http://www.lanedo.com/~mitch/module-system-talk-guadec-2006/Module-System-Talk-Guadec-2006.pdf" class="pdf">Creating a plug-in system using GTypeModule</a> and example <a href="http://www.lanedo.com/~mitch/module-system-talk-guadec-2006/foo-editor-0.2.tar.bz2">foo-editor.tar.bz2</a><br />
Presentation by Michael Natterer at GUADEC 2006.</li>
</ul>

<h2><a name="UsefulLinks">Useful Links</a></h2>
<ul>
	<li>
		<a href="http://ometer.com/gtk-colors.html" class="external">How to set the color of a widget</a>
		<br />A small article by Havoc Pennington.
	</li>
	<li>
		<a href="http://www.iki.fi/tml/fosdem-2006.pdf" class="pdf">Windows portability for GNOME software.</a>
		<br />A PDF document written by Tor Lillqvist.
	</li>
</ul>

<?php require 'template.php';
