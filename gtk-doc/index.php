<?php
$title = "The GTK-Doc Project";
$nav = "about";
ob_start();

require 'gtkdoc.config.php';
?>

<h2>The GTK-Doc Project</h2>
<p>GTK-Doc is a project which was started to generate API documentation from comments added to C code. It is typically used to document the public API of <a href="http://www.gtk.org/" class="external">GTK+</a> and <a href="http://www.gnome.org/" class="external">GNOME</a> libraries, but it can also be used to document application code.</p>

<h2>History</h2>
<p>GTK-Doc wasn't originally intended to be a general-purpose documentation tool, so it can be a bit awkward to setup and use. For a more polished general-purpose documentation tool you may want to look at <a href="http://www.doxygen.org/" class="external">Doxygen</a>. However GTK-Doc has some special code to document the signals and properties of GTK+ widgets and GObject classes which other tools may not have.</p>

<h2>How it works</h2>
<p>GTK-Doc allows your documentation to be written in 2 ways:</p>
<ul>
	<li>Embedded inside the source code in specially-formatted comments.</li>
	<li>Added to the <em>template</em> files which gtk-doc outputs after scanning all the header files and parsing the declarations.</li>
</ul>

<p>From these source code comments and template files GTK-Doc generates a <a href="http://www.docbook.org/" class="external">Docbook</a> XML (or <a href="http://en.wikipedia.org/wiki/SGML" class="external">SGML</a>) document, which is then transformed into HTML.</p>

<p>The generated HTML documentation can be browsed in an ordinary web browser or by using the special <a href="http://live.gnome.org/devhelp" class="external">Devhelp API browser</a>. Devhelp uses a special <a href="devhelp2.xsd.html">index file</a> to locate and present the manuals.</p>

<p>For full details have a look at the <a href="http://developer.gnome.org/gtk-doc-manual/unstable/" class="external">GTK-Doc user manual</a>.</p>

<h2>Examples</h2>
<p>Visit the <a href="../documentation.php" class="external">GTK+ documentation</a> and click on one of the API references there to see the final result of using GTK-Doc. For examples on how to make use of GTK-Doc in your project, <a href="../download/index.php" class="external">download GTK+</a> and see how it is added to the source files. GTK-Doc itself has a test suite as well that can be used as examples.</p>

<?php require '../template.php';
