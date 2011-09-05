<?php
$nav = "development";
$title = "GTK+ Development";
ob_start();
?>
<div class="sidebar">
	<h2><a name="BugReporting">Bug Reporting</a></h2>
	<p>Bugs should be reported to the <a href="http://bugzilla.gnome.org/" class="external">GNOME bug tracking system</a>.</p>
	<p>You will need an email address to register (if you haven't already) before you can use the system to file a new bug report.</p>
	<p>There are <a href="http://bugzilla.gnome.org/page.cgi?id=bug-writing.html" class="external">guidelines</a> for reporting new bugs. Try to make sure you follow them, so we can help you much more effectively. The use of <a href="http://bugzilla.gnome.org/describekeywords.cgi" class="external">keywords</a> also helps us prioritize bugs.</p>

	<h2><a name="MailingLists">Mailing Lists</a></h2>
	<p>For archives and information on how to subscribe, see the list of <a href="mailing-lists.php">mailing lists</a> available.</p>

	<h2><a name="Wiki">Wiki</a></h2>
	<p>We have a Wiki for drafting, designing and proposing GTK+ development available at <a href="http://live.gnome.org/GTK+" class="external">http://live.gnome.org/GTK+</a>.</p>

	<h2><a name="Meetings">Meetings</a></h2>
	<p>As regularly as possible, GTK+ team meetings take place in the <a href="irc://irc.gnome.org/%23gtk-devel" class="irc">#gtk-devel</a> IRC channel on irc.gnome.org. Anyone is welcome to join the meeting to listen in and follow the progress of the GTK+ project. <a href="http://live.gnome.org/GTK+/Meetings" class="external">All meetings</a> are recorded and available dating back to early 2004.</p>
	<p>#gtk-devel is only used for GTK+ team meetings, and should not be used to ask general questions about GTK+. For all other IRC communication, <a href="irc://irc.gnome.org/%23gtk%2B" class="irc">#gtk+</a> is used.</p>
</div>

<h2><a name="WheresTheSource">Where's the Source?</a></h2>
<p>You can clone the source code repository using <a href="http://git-scm.com/" class="external">git</a>. Instructions on how to use bleeding edge versions of GTK+ are available on the <a href="/download/#BleedingEdge">download</a> page.</p>

<h2><a name="Contributing">Contributing</a></h2>
<p>GTK+ is a large project and relies on voluntary contributions. Everyone is invited to help project development. Starting points for contributors are:</p>

<ul class="tasks">
	<li>Sign up for one of the <a href="http://live.gnome.org/GtkTasks" class="external">project assistance tasks</a>.</li>
	<li>Hack away on existing <a href="http://live.gnome.org/GtkLove" class="external">bug reports and feature requests</a>.</li>
	<li>Write to the GTK+ <a href="mailing-lists.php">mailing lists</a> and offer your help.</li>
</ul>

<h2><a name="BestPractices">Best Practices</a></h2>
<p>When working on GTK+/GLib, there are several points once should consider, to keep the code in shape. See the <a href="http://live.gnome.org/GTK+/BestPractices" class="external">GTK+ Best Practices</a>.</p>

<h2><a name="Team">Team</a></h2>
<p>Current core maintainers of GTK+ are:</p>

<?php
// How about we have PHP automatically generate odd rows for us?
$maintainers = array(
	  /* ("Name",                    "Affiliation"), */
	array("Matthias Clasen",         "Red Hat"),
	array("Tim Janik",               "Lanedo GmbH"),
	array("Behdad Esfahbod",         "Google"),
	array("Benjamin Otte",           "Red Hat"),
	array("Federico Mena Quintero",  "Novell"),
	array("Alexander Larsson",       "Red Hat"),
	array("Tristan Van Berkom",      "Openismus"),
	array("Carlos Garnacho",         "Lanedo GmbH"),
	array("Kristian Rietveld",       "Lanedo GmbH"),
	array("Michael Natterer",        "Lanedo GmbH"),
	array("Ryan Lortie",             "Codethink Ltd"),
	array("Emmanuele Bassi",         "Intel Open Source Technology Center")
);
?>

<pre style="display: none;"><!-- For Lynx --></pre>

<table>
	<tr>
		<th>Name</th>
		<th>Affiliation</th>
	</tr><?php foreach($maintainers as $index => $person) { ?> 
	<tr<?php echo $index % 2 != 0 ? ' class="odd"': ' class="even"'; ?>>
		<td><?php echo $person[0]; ?></td>
		<td><?php echo $person[1]; ?></td>
	</tr><?php } ?> 
</table>

<h2><a name="LanguageBindings">Language Bindings</a></h2>
<p>For information about programming languages other than C which support GTK+, see the <a href="language-bindings.php">language bindings</a> available.</p>

<h2><a name="Support">Donations</a></h2>
<p>If you want to help the GTK+ project by donating money OR perhaps your company wants to pay someone to develop GTK+, you can email the GNOME foundation. Any donations to GNOME for GTK+ will ONLY be spent on GTK+.</p>
<ul class="tasks">
	<li>Contact the <a href="mailto:foundation-list@gnome.org?subject=Supporting%20GTK+" class="email">GNOME Foundation</a>.</li>
</ul>

<?php require 'template.php';
