<?php
$title = "The GTK-Doc Project: Download";
$nav = "download";
ob_start();

require 'gtkdoc.config.php';
?>
<h2>Unstable release</h2>
<p>You can check out the latest unstable release of GTK-Doc using <a href="http://git-scm.com/" class="external">Git</a>.</p>
<pre>git clone git://git.gnome.org/gtk-doc</pre>

<p>For more information on this, see the <a href="https://wiki.gnome.org/Git/Developers" class="external">instructions on how to use the repository</a>.</p>

<h2>Stable release</h2>
<p>GTK-Doc is available here:</p>

<ul>
	<li><a href="http://download.gnome.org/sources/gtk-doc/" class="external">http://download.gnome.org/sources/gtk-doc/</a></li>
</ul>

<?php require '../template.php';
