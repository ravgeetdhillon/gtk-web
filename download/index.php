<?php
$nav = "download";
$title = "Download GTK+";
ob_start();
?>

<div class="columns">

	<div class="left">
		<h2 id="StableRelease">Stable release</h2>
		<p>GTK+ is available on:</p>
		<ul class="platform_list">
			<li class="linux"><a href="linux.php">GNU/Linux and Unix</a></li>
			<li class="windows"><a href="win32.php">Windows (32-bit)</a> and <a href="win64.php">64-bit</a></li>
			<li class="macos"><a href="macos.php">Mac OS X</a></li>
		</ul>
	</div>

	<div class="right">
		<h2 id="UnstableRelease">Unstable release</h2>
		<p>The latest unstable tarballs can be downloaded with <a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/" class="external">HTTP</a> or <a href="ftp://ftp.gtk.org/pub/gtk/" class="external">FTP</a>.</p>
	</div>

</div>

<h2 id="BleedingEdge">Bleeding edge</h2>
<p>Alternatively, you can check out the latest unstable release of GTK+ and GLib using <a href="http://git-scm.com/" class="external">git</a>.</p>
<pre>git clone git://git.gnome.org/gtk+</pre>
<pre>git clone git://git.gnome.org/glib</pre>
<p>If you plan on pushing changes back upstream and have a GNOME account, use the following instead:</p>
<pre>git clone ssh://&lt;username&gt;@git.gnome.org/git/gtk+</pre>
<pre>git clone ssh://&lt;username&gt;@git.gnome.org/git/glib</pre>

<p>For more information on this, see the <a href="http://live.gnome.org/Git" class="external">instructions on how to use the repository</a>.</p>

<!--
<h2>Applications</h2>
<p>If you're looking for applications built <em>with</em>
GTK+, you can find many projects available for download at
<a href="http://www.gtkfiles.org" class="external" class="external">gtkfiles.org</a>.</p>
-->

<?php require '../template.php';
