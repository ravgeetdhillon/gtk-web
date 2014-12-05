<?php
$nav = "features";
$title = "GTK+ Language Bindings";
ob_start();

// Keep these values unique
define("OFFICIAL", 0, true);
define("SUPPORTED", 1, true);
define("PARTIAL", 2, true);
define("UNSUPPORTED", 3, true);
define("UNKNOWN", 4, true);

/**
 * README
 *
 * This page is automatically generated from the values in the following arrays
 *
 * In the following arrays, SUPPORTED means that the project is thought to wrap
 * every part of the C API that you are likely to need in that programming
 * language, and that it has a stable API; PARTIAL means that we think it will
 * reach SUPPORTED status soon; and UNSUPPORTED means that the project has no
 * wrapper for that version of the API. These descriptions are mostly self-
 * reported by the project maintainers.
 */

// Versions of GTK used in the table
$versions = array('2.24', '3.10');

// Array of languages and their support
$bindings = array(
        // Accepts SUPPORTED, PARTIAL, UNSUPPORTED
        // NOTE: Commented out sections are kept for historical reasons, -mr.

	"C++" => array(
		'official' => true, // Whether this binding is an official GNOME binding
		'url' => 'http://www.gtkmm.org/', // Link to this page
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"C#" => array(
		'official' => true,
		'url' => 'http://www.mono-project.com/GtkSharp',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => UNSUPPORTED
		)
	),

	"Java" => array(
		'official' => true,
		'url' => 'http://java-gnome.sourceforge.net/',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"Python" => array(
		'official' => true,
		'url' => 'https://wiki.gnome.org/Projects/PyGObject',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"Javascript" => array(
		'official' => true,
		'url' => 'https://wiki.gnome.org/JavaScript',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"Vala" => array(
		'official' => true,
		'url' => 'https://wiki.gnome.org/Projects/Vala',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"Perl" => array(
		'official' => true,
		'url' => 'http://gtk2-perl.sourceforge.net/',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"Ruby" => array(
		'official' => false,
		'url' => 'http://ruby-gnome2.sourceforge.jp/',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => SUPPORTED
		)
	),

	"Pascal" => array(
		'official' => false,
		'url' => 'http://wiki.lazarus.freepascal.org/GTK2_Interface',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"PHP" => array(
		'official' => false,
		'url' => 'http://gtk.php.net/',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => UNSUPPORTED
		)
	),

	"R" => array(
		'official' => false,
		'url' => 'http://cran.r-project.org/web/packages/RGtk2/index.html',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => UNSUPPORTED
		)
	),

	"Lua" => array(
		'official' => false,
		'url' => 'http://github.com/pavouk/lgi',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => SUPPORTED
		)
	),

	"Guile" => array(
		'official' => false,
		'url' => 'http://www.gnu.org/software/guile-gnome/',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => UNSUPPORTED
		)
	),

	"Ada" => array(
		'official' => false,
		'url' => 'http://libre.adacore.com/libre/tools/gtkada/',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => PARTIAL
		)
	),

	"OCaml" => array(
		'official' => false,
		'url' => 'http://wwwfun.kurims.kyoto-u.ac.jp/soft/olabl/lablgtk.html',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => UNSUPPORTED
		)
	),

	"Haskell" => array(
		'official' => false,
		'url' => 'http://projects.haskell.org/gtk2hs/documentation/',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"FreeBASIC" => array(
		'official' => false,
		'url' => 'http://www.freebasic-portal.de/downloads/ressourcencompiler/gtktobac2-2-0-131.html',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"D" => array(
		'official' => false,
		'url' => 'http://gtkd.org/',
		'support' => array(
			'2.24' => SUPPORTED,
			'3.10' => SUPPORTED
		)
	),

	"Go" => array(
		'official' => false,
		'url' => 'http://mattn.github.com/go-gtk/',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => UNSUPPORTED
                )
        ),


	"Fortran" => array(
		'official' => false,
		'url' => 'http://github.com/jerryd/gtk-fortran/wiki',
		'support' => array(
			'2.24' => PARTIAL,
			'3.10' => PARTIAL
		)
	)
);

// Alternate image attributes
$imgalt = array(
	SUPPORTED => "[#]",
	PARTIAL => "&nbsp;@&nbsp;",
	UNSUPPORTED => "&nbsp;_&nbsp;",
	UNKNOWN => "&nbsp;?&nbsp;",
	OFFICIAL => "&nbsp;O&nbsp;"
);

// Title image attributes
$imgtitle = array(
	SUPPORTED => "Supported",
	PARTIAL => "Has partial support",
	UNSUPPORTED => "Unsupported",
	UNKNOWN => "Unknown",
	OFFICIAL => "Official GNOME Binding"
);

if(isset($_GET['json'])) {
	ob_end_clean();
	header("Content-type: application/json");
	echo json_encode($bindings);
	die();
}

?>
<h2><a name="LanguageBindings">Language Bindings</a></h2>
<p>Language Bindings (or 'wrappers') allow GTK+ to be used from other programming languages, in the style of those languages. They are relatively easy to create because GTK+ is designed with them in mind.</p>

<p>The official GNOME bindings follow the GNOME release schedule which guarantees API stability and time-based releases.</p>

<p style="display: none;"><!-- For Lynx --></p>

<table class="bindingtable">
	<tr>
		<th colspan="2">Language</th><?php foreach($versions as $v) { ?> 
		<th><?php echo $v; ?></th><?php } ?> 
	</tr><?php $index = -1; foreach($bindings as $name => $lang) { $index++; ?> 

	<tr<?php echo $index % 2 != 0 ? ' class="odd"': ' class="even"'; ?>>
		<td><a href="<?php echo htmlentities($lang['url']); ?>" class="external"><?php echo htmlentities($name); ?></a></td>
		<td><?php if($lang['official']) { ?><img src="images/gnome-binding.png" alt="<?php echo $imgalt[OFFICIAL]; ?>" title="<?php echo $imgtitle[OFFICIAL]; ?>" /><?php } else { echo '&nbsp;'; } ?></td><?php

foreach($versions as $v) {
	if(isset($lang['support'][$v])) { $s = $lang['support'][$v]; ?> 
		<td><?php if( $s == SUPPORTED ) { ?>
<img src="images/progress-complete.png" width="12" height="12" alt="<?php echo $imgalt[SUPPORTED]; ?>" title="<?php echo $imgtitle[SUPPORTED]; ?>" /><?php } elseif ( $s == PARTIAL ) { ?>
<img src="images/progress-pending.png" width="12" height="12" alt="<?php echo $imgalt[PARTIAL]; ?>" title="<?php echo $imgtitle[PARTIAL]; ?>" /><?php } else { ?>
<img src="images/progress-incomplete.png" width="12" height="12" alt="<?php echo $imgalt[UNSUPPORTED]; ?>" title="<?php echo $imgtitle[UNSUPPORTED]; ?>" /><?php } ?></td><?php } else { ?> 
		<td>?</td><?php } } ?> 
	</tr><?php } ?> 

</table>

<div class="legend"><!-- aside -->
	<h3>Legend</h3>
	<ul>
		<li><img src="images/gnome-binding.png" alt="<?php echo $imgalt[OFFICIAL]; ?>" title="<?php echo $imgtitle[OFFICIAL]; ?>" /> Official GNOME Binding</li>
		<li><img src="images/progress-complete.png" alt="<?php echo $imgalt[SUPPORTED]; ?>" title="<?php echo $imgtitle[SUPPORTED]; ?>" /> Supported</li>
		<li><img src="images/progress-pending.png" alt="<?php echo $imgalt[PARTIAL]; ?>" title="<?php echo $imgtitle[PARTIAL]; ?>" /> Partially Supported</li>
		<li><img src="images/progress-incomplete.png" alt="<?php echo $imgalt[UNSUPPORTED]; ?>" title="<?php echo $imgtitle[UNSUPPORTED]; ?>" /> Unsupported</li>
	</ul>
</div>

<p class="footnote">If this page happens to be out of date, you can edit this page by checking out the <a href="http://git.gnome.org/cgit/gtk-web/" class="external">gtk-web</a> module in <a href="http://git.gnome.org/" class="external">GNOME's Git</a>. If you don't have an account to do this, please contact the  <a href="mailto:language-bindings@gnome.org?subject=Out%20of%20date%20language%20bindings" class="email">GNOME Language Bindings Team</a> for GNOME supported bindings or the <a href="mailto:gtk-devel-list@gnome.org" class="email">gtk-devel list</a> for all other bindings. </p>

<?php require 'template.php';
