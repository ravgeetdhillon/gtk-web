<?php
$nav = "download";
$title = "Download GTK+";
ob_start();
?>

<div class="columns">

	<div class="left">
		<h2 id="StableRelease">Stable releases</h2>
		<p>GTK+ is available on:</p>
		<ul class="platform_list">
			<li class="linux"><a href="linux.php">GNU/Linux and Unix</a></li>
			<li class="windows"><a href="win32.php">Windows (32-bit)</a> and <a href="win64.php">64-bit</a></li>
			<li class="macos"><a href="macos.php">Mac OS X</a></li>
		</ul>
	</div>

	<div class="right">
		<h2 id="UnstableRelease">Unstable releases</h2>
		<p>The latest unstable tarballs can be downloaded with <a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/" class="external">HTTP</a> or <a href="ftp://ftp.gnome.org/pub/gnome/sources/gtk+/" class="external">FTP</a>.</p>
	</div>

</div>

<h2 id="BleedingEdge">Bleeding edge</h2>
<p>Alternatively, you can check out the latest unstable release of GTK+ using <a href="http://git-scm.com/" class="external">git</a>.</p>
<pre>
git clone git://git.gnome.org/gtk+
</pre>

<!--git clone git://git.gnome.org/glib-->

<p>If you plan on pushing changes back upstream and have a GNOME account, use the following instead:</p>
<pre>
git clone ssh://&lt;username&gt;@git.gnome.org/git/gtk+
</pre>

<!--git clone ssh://&lt;username&gt;@git.gnome.org/git/glib-->

<p>NOTE: the modules are: <q>gtk+</q>, <q>glib</q>, <q>pango</q>, <q>gdk-pixbuf</q> and <q>atk</q>.</p>

<p>For more information on this, see the <a href="https://wiki.gnome.org/Git" class="external">instructions on how to use the repository</a>.</p>

<h2 id="RepositoryBrowser">Repository Browser</h2>
<p>If you prefer to view the git repository from your web browser for <a href="http://git.gnome.org/browse/gtk+" class="external">gtk+</a>, <a href="http://git.gnome.org/browse/glib" class="external">glib</a>, <a href="http://git.gnome.org/browse/pango" class="external">pango</a>, <a href="http://git.gnome.org/browse/gdk-pixbuf" class="external">gdk-pixbuf</a> and <a href="http://git.gnome.org/browse/atk" class="external">atk</a>.</p>

<?php require '../template.php';
