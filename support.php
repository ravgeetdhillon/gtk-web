<?php
$nav = "support";
$title = "GTK+ Support";
ob_start();
?>
<div class="sidebar">
	<h2><a name="FAQ">FAQ</a></h2>
	<p>For information about frequently asked questions, please <a href="http://library.gnome.org/devel/gtk-faq/stable/" class="external">visit the FAQ</a>.</p>

	<h2><a name="Documentation">Documentation</a></h2>
	<p>Visit our <a href="/documentation.php">documentation</a> page for books, tutorials, articles and presentations about GTK+.</p>

	<h2><a name="GetInvolved">Get Involved</a></h2>
	<p>For support and details about how to get involved, see our <a href="/development.php">development</a> page.</p>
</div>

<h2><a name="GetSupportFor">Get Assistance</a></h2>
<p>GTK+ is supported by a number of businesses and they provide services, experience and skills to help the large community of GTK+ developers produce innovative customer solutions in multiple industries and devices (like mobile and embedded).</p>

<p>There are many businesses which are help with:</p>
<ul>
	<li><a href="#Consultation">Consultation</a></li>
	<li><a href="#ApplicationDevelopment">Application development</a></li>
	<li><a href="#HardwareIntegration">Hardware integration</a></li>
	<li><a href="#Porting">Porting</a></li>
	<li><a href="#Training">Training</a></li>
	<li><a href="#BackFolding">Patch set back folding</a></li>
</ul>

<h3>Businesses</h3>

<?php
// How about we have PHP automatically generate odd rows for us?
$businesses = array(
        /* ("Company",                   "Website"), */
	array("Lanedo GmbH",             "http://lanedo.com/gtk.html"),
	array("Openismus GmbH",          "http://www.openismus.com/about"),
	array("Codethink Ltd",           "http://www.codethink.co.uk/contact"),
	array("Collabora Ltd",           "http://www.collabora.com/contact/"),
	array("Red Hat",                 "http://www.redhat.com/support/"),
	array("Novell",                  "http://www.novell.com/support"),
	array("Intel",                   "http://www.intel.com/p/en_US/support")
);
?>

<table>
	<tr>
		<th>Companies</th>
		<th>Websites</th>
	</tr><?php foreach($businesses as $index => $business) { ?> 
	<tr<?php echo $index % 2 != 0 ? ' class="odd"': ' class="even"'; ?>>
		<td><?php echo $business[0]; ?></td>
		<td><a href="<?php echo $business[1]; ?>"><?php echo $business[1]; ?></a></td>
	</tr><?php } ?> 
</table>

<h3><a name="Consultation">Consultation</a></h3>
<p>Perhaps your business is looking for consultancy around using GTK+. If this is what you're looking for, companies affilliated with GTK+ can offer these services.</p>

<h3><a name="ApplicationDevelopment">Application Development</a></h3>
<p>Should you need application development for your solution to be deliverable cross platform, GTK+ has all the tools you need to do that. Contact us today and find out how we can help you.</p>

<h3><a name="HardwareIntegration">Hardware Integration</a></h3>
<p>With changes happening all the time in hardware, GTK+ is constantly adapting to the requests for newer and richer user interface features. One great example of those is Multi-Touch support. Businesses invested in GTK+ have been at the forefront of implementing this hardware support and working with other projects up and down the Linux stack to make that happen (such as Xorg). If you need hardware integration with GTK+, contact us to find out more.</p>

<h3><a name="Porting">Porting</a></h3>
<p>Porting can cover a range of areas. Businesses supporting GTK+ offer porting applications to GTK+ from other toolkits and also porting areas of the toolkit to specific platforms (for example, Windows 64bit support).</p>

<h3><a name="Training">Training</a></h3>
<p>There are various training opportunities on offer. Everything from writing an application with GTK+ to developing and customizing GTK+. If this is what you're looking for, there are businesses out there that can help you do that.</p>

<h3><a name="BackFolding">Patch Set Back-Folding</a></h3>
<p>It's not uncommon for companies to start forking a project to customize it and perhaps to keep it in-house. This can lead to wanting new features from an upstream project like GTK+ being available in your forked version. If you need help back-folding patch sets into upstream GTK+ or suggesting new features into the main stream, we have a support network that can help you do that.</p>

<?php require 'template.php';
