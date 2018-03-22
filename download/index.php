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
			<li class="windows"><a href="windows.php">Windows</a></li>
			<li class="macos"><a href="macos.php">Mac OS X</a></li>
		</ul>
	</div>

	<div class="right">
		<h2 id="UnstableRelease">Unstable releases</h2>
		<p>The latest unstable tarballs can be downloaded from <a href="http://download.gnome.org/sources/gtk+/" class="external">download.gnome.org</a>.</p>
	</div>

</div>

<h2 id="BleedingEdge">Bleeding edge</h2>
<p>Alternatively, you can check out the latest unstable release of GTK+ using <a href="http://git-scm.com/" class="external">git</a>.</p>
<pre>
git clone https://gitlab.gnome.org/GNOME/gtk.git
</pre>

<p>If you plan on pushing changes back upstream and have a GNOME account, use the following instead:</p>
<pre>
git clone git@gitlab.gnome.org:GNOME/gtk.git
</pre>

<p>For more information on this, see the <a href="https://wiki.gnome.org/GitLab" class="external">instructions on how to use the repository</a>.</p>

<h2 id="RepositoryBrowser">Repository Browser</h2>
<p>If you prefer to view the git repository from your web browser for <a href="https://gitlab.gnome.org/GNOME/gtk" class="external">gtk+</a>, <a href="https://git.gnome.org/browse/glib" class="external">glib</a>,
<a href="https://git.gnome.org/browse/pango" class="external">pango</a>, <a href="https://git.gnome.org/browse/gdk-pixbuf" class="external">gdk-pixbuf</a> and <a href="https://git.gnome.org/browse/atk" class="external">atk</a>.</p>

<?php require '../template.php';
