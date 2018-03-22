<?php
$nav = "screenshots";
$title = "GTK+ Screenshots Museum";
ob_start();
?>
<h2><a name="ScreenshotsMuseum">Screenshots Museum</a></h2>
<p>BeOS has been discontinued, so these screenshots show GTK+ when BeOS was still in active development.</p>

<div class="gallery">
	<ul>
		<li>
			<div class="figure"><!-- figcaption -->
				<a href="../images/screenshots/screenshot-beos.png" class="image"><img src="../images/screenshots/thumbnail-beos.png" alt="[Screenshot]" /></a>
				<div class="caption"><!-- figcaption -->GTK+ on BeOS</div>
			</div>
		</li>
		<li>
			<div class="figure"><!-- figcaption -->
				<a href="../images/screenshots/screenshot-dfb-alpha.png" class="image"><img src="../images/screenshots/thumbnail-dfb-alpha.png" alt="[Screenshot]"/></a>
				<div class="caption"><!-- figcaption -->GTK+ using DirectFB</div>
			</div>
		</li>
	</ul>
</div>

<?php require '../template.php';
