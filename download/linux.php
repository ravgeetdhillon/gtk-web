<?php
$nav = "download";
$title = "GTK+ Download: GNU/Linux";
ob_start();

// Set the current stable version numbers of GTK+, GLib, and Pango to automatically include it in the page.
$versions = array(
	'gtk' => '2.22',
	'glib' => '2.26',
	'pango' => '1.28'
);

// Versions of GTK+ that are older, but still included on the page in the "Older Versions" section
$oldgtk = array( '2.20', '2.18', '2.16', '2.14', '2.12', '2.10', '2.8', '2.6', '2.4', '1.2' );

?>
<h2><a name="Download">Download for GNU/Linux and Unix</a></h2>
<h3><a name="Requirements">Requirements</a></h3>
<p>You will need to get the GLib, Pango and GTK+ packages to build GTK+.<br/>You may also need some of the external dependencies that are also linked for each version listed
below.</p>

<h3><a name="StableRelease">Stable Release</a></h3>
<p>To build GTK+ <?php echo $versions['gtk']; ?> you may find the installation guide helpful. For additional help, the <a href="http://library.gnome.org/devel/gtk-faq/stable/" class="external">FAQ</a> is a good starting point.</p>

<ul>
	<li><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/<?php echo $versions['gtk']; ?>/" class="download">GTK+ <?php echo $versions['gtk']; ?></a></li>
	<li><a href="http://ftp.gnome.org/pub/gnome/sources/glib/<?php echo $versions['glib']; ?>/" class="download">GLib <?php echo $versions['glib']; ?></a></li>
	<li><a href="http://ftp.gnome.org/pub/gnome/sources/pango/<?php echo $versions['pango']; ?>/" class="download">Pango <?php echo $versions['pango']; ?></a></li>
</ul>
<!--
<ul>
<li><a href="ftp://ftp.gtk.org/pub/gtk/v<?php echo $versions['gtk']; ?>/dependencies"><img src="images/download.png" alt=""/> Dependencies</a></li>
</ul>
-->
<p>For details on installing GTK+, see the <a href="http://library.gnome.org/devel/gtk/stable/gtk-building.html" class="external">installation guide</a>.</p>

<h3><a name="OlderVersions">Older Versions</a></h3>
<p>Some applications still require GTK+ 1.2, an older stable version of GTK+. You can have the run-time and development environments for both GTK+ 2.x and GTK+ 1.2 installed simultaneously on your computer.</p>
<table>
	<tr>
		<th>Version</th>
		<th>Packages</th>
	</tr><?php foreach( $oldgtk as $index => $version ) { ?> 
	<tr<?php echo $index % 2 != 0 ? ' class="odd"': ' class="even"'; ?>>
		<td>GTK+ <?php echo $version; ?></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/<?php echo $version; ?>/" class="download">Sources</a></td>
	</tr><?php } ?> 
</table>

<?php require '../template.php';
