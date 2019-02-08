<?php
$nav = "support";
$title = "GTK Support";
ob_start();
?>
<div class="sidebar">
	<h2><a name="FAQ">FAQ</a></h2>
	<p>For information about frequently asked questions, please <a href="https://developer.gnome.org/gtk3/stable/gtk-question-index.html" class="external">visit the FAQ</a>.</p>

	<h2><a name="Documentation">Documentation</a></h2>
	<p>Visit our <a href="/documentation.php">documentation</a> page for books, tutorials, articles and presentations about GTK.</p>

	<h2><a name="GetInvolved">Get Involved</a></h2>
	<p>For support and details about how to get involved, see our <a href="/development.php">development</a> page.</p>
</div>

<h2><a name="GetSupportFor">Get Assistance</a></h2>
<p>GTK is supported by a number of businesses and they provide services, experience and skills to help the large community of GTK users produce innovative customer solutions in multiple industries and devices (like mobile and embedded).</p>

<p>Consultancy partners which support GTK offer a range of business services including:</p>
<ul>
	<li><a href="#Consultation">Consultation</a></li>
	<li><a href="#HardwareIntegration">Hardware integration</a></li>
	<li><a href="#Porting">Porting</a></li>
	<li><a href="#ApplicationDevelopment">Application development</a></li>
	<li><a href="#BackFolding">Patch set back folding</a></li>
	<li><a href="#Training">Training</a></li>
</ul>

<h3>Consultancy Partners</h3>

<?php
$businesses = array(
	/* ("Company",                   "Website"), */
	array("Lanedo GmbH",             "http://www.lanedo.com/projects/gtk/"),
	array("Codethink Ltd",           "http://www.codethink.co.uk/contact.html"),
	array("Collabora Ltd",           "https://www.collabora.com/contact-us.html"),
	array("Igalia",                  "http://www.igalia.com/contact/")
);

function array_random_assoc($arr, $num = 1) {
    $keys = array_keys($arr);
    shuffle($keys);

    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[$keys[$i]] = $arr[$keys[$i]];
    }

    return $r;
}

$r = array_random_assoc($businesses, sizeof($businesses));
/* print_r($r) */
?>

<table>
	<tr>
		<th>Companies</th>
		<th>Websites</th>
	</tr>

  <?php
	  $i = 0;
    foreach($r as $index => $b) {
	?>

	<tr<?php echo $i % 2 != 0 ? ' class="odd"': ' class="even"'; ?>>
    <td><?php echo $b[0]; ?></td>
    <td><a href="<?php echo $b[1]; ?>"><?php echo $b[1]; ?></a></td>
	</tr>

  <?php $i++;	} ?>

  <tr><td colspan="2"><div id="note">Not listed above? Want to be? Contact the gtk-devel <a href="/mailing-lists.php">mailing list</a>.</div></td></tr>
</table>

<h3><a name="Consultation">Consultation</a></h3>
<p>Perhaps your business is looking for consultancy around using GTK. If this is what you&apos;re looking for, our consultancy partners affilliated with GTK can offer these services. This can range from development, to support, to even queries about licensing and how to integrate the toolkit into your existing solutions and much more!</p>

<h3><a name="HardwareIntegration">Hardware Integration</a></h3>
<p>With changes happening all the time in hardware, GTK is constantly adapting to the requests for newer and richer user interface features. One great example of those is Multi-Touch support. Businesses invested in GTK have been at the forefront of implementing this hardware support and working with other projects up and down the Linux stack to make that happen (such as Xorg).</p>

<h3><a name="Porting">Porting</a></h3>
<p>Porting can cover a range of areas. Businesses supporting GTK offer porting applications to GTK from other toolkits and also porting areas of the toolkit to specific platforms (for example, Windows 64bit support).</p>

<h3><a name="ApplicationDevelopment">Application Development</a></h3>
<p>Should you need application development for your solution to be deliverable cross platform, GTK has all the tools you need to do that. Most of the businesses who are involved with GTK have decades of experience on offer to assist you.</p>

<h3><a name="BackFolding">Patch Set Back-Folding</a></h3>
<p>It&apos;s not uncommon for companies to start forking a project to customize it and perhaps to keep it in-house. This can lead to wanting new features from an upstream project like GTK being available in your forked version. If you need help back-folding patch sets into upstream GTK or suggesting new features into the main stream, we have a support network that can help you do that.</p>

<h3><a name="Training">Training</a></h3>
<p>There are various training opportunities on offer. Everything from writing an application with GTK to developing and customizing GTK. If this is what you&apos;re looking for, there are businesses out there that can help you do that.</p>

<?php require 'template.php';
