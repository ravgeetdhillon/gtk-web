<?php
$title = "The GTK-Doc Project: Requirements";
$nav = "requirements";
ob_start();

require 'gtkdoc.config.php';
?>

<h2>Basic GTK-Doc Requirements</h2>
<p>The main scripts are written in <a href="http://www.perl.com/" class="external">Perl</a>.</p>

<h2>XML Generation</h2>
<p>For writing XML files you will need the following packages. This is highly recommended!</p>
<ul>
	<li><a href="http://www.oasis-open.org/docbook/" class="external">DocBook XML DTD</a></li>
	<li><a href="http://docbook.sourceforge.net/" class="external">DocBook XSL Stylesheets</a></li>
	<li><a href="http://xmlsoft.org/" class="external">libxslt &amp; libxml2</a></li>
</ul>

<h2>SGML Generation</h2>
<p>For writing SGML files you will need the following packages. This is not actively maintained anymore.</p>
<ul>
	<li><a href="http://www.oasis-open.org/docbook/" class="external">DocBook SGML DTD</a></li>
	<li><a href="http://docbook.sourceforge.net/" class="external">DocBook DSSSL Stylesheets</a></li>
	<li><a href="http://www.jclark.com/jade" class="external">Jade</a> or <a href="http://sourceforge.net/projects/openjade" class="external">OpenJade</a></li>
</ul>

<p>Most distributions now have packages for all of these, so it is strongly advised that you grab those if possible.</p>

<?php require '../template.php'; ?>
