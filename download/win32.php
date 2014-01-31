<?php
$nav = "download";
$title = "GTK+ Download: Windows (32-bit)";
ob_start();
?>
<h2><a name="Download">Download for Windows (32-bit)</a></h2>

<h3><a name="Requirements">Requirements</a></h3>
 
<h4>Packages</h4>
 
<p>You will need the GLib, cairo, Pango, ATK, gdk-pixbuf and GTK+ developer packages to build software against GTK+. To run GTK+ programs you will also need the gettext-runtime, fontconfig, freetype, expat, libpng and zlib packages.</p>

<p>The packages here are for people who develop software that uses GTK+. This page is not intended directly for end-users. It is expected that people who build installers for GTK+ applications for Windows bundle GTK+ with them.</p>
 
<p>These packages are not for developing or running programs that use the <a href="http://www.cygwin.com/">Cygwin</a> Unix emulation environment. Cygwin has GTK+ packages available directly in its installer which you should use. Note that the Cygwin GTK+ uses the X11 backend, so you will need to also run an X11 server then when you run GTK+ programs on Cygwin, but presumably that is what Cygwin users want.</p>

<p>You are welcome to redistribute GTK+ binaries, including applications that bundle them, on other web sites, CD-ROM, and other media. You don't have to ask for permission. That's one of the points of Free Software. One important thing that the <a href="http://www.fsf.org/licenses/licenses.html">GNU licenses</a> require is that <strong>you must also redistribute the source</strong> code. This usually means at least the gettext, GLib, GTK+, Pango and Atk sources.</p>
 
<h4>What toolchain to use?</h4>
 
<p>The most natural toolchain to use together with these packages would probably be the GNU compiler and other utilities. When targeting Windows, that combination is known as <a href="http://www.mingw.org">MinGW</a>. Using Cygwin tools to build non-Cygwin Windows binaries is not recommended unless you are very careful and look out for mixups.</p>
 
<p>It is possible to use these packages also with Microsoft's compiler. However, the DLLs here use the <code>msvcrt.dll</code> run-time library. This means that also applications that use the DLLs should preferably use the <code>msvcrt.dll</code> run-time. Specifically, this means that you should not use newer versions of the Microsoft compiler than Visual C++ 6 without knowing exactly what you are doing.</p>

<h4>Which Windows versions?</h4>
<p>The current GTK+ stack uses APIs that are available only on Windows 2000 or later. Long obsolete versions of GTK+ did run on Win9x and NT 4, too.</p>

<h4>Tutorial</h4>
<p>An installation and usage <a href="win32_tutorial.php">tutorial</a> is available for beginners.</p>

<h3><a name="StableRelease">Downloads</a></h3>

<p>There are three types of downloads below. <strong>Run-time</strong> provide only the DLLs and other files used you will need to run a GTK+-using application. <strong>Dev</strong> packages provide include files, import libraries, documentation and additional tools, and also for reference the script used to build the component in question. In case patches have been applied to the upstream sources before building, these are inline in the build script. <strong>Source</strong> packages provide the source code for the component in question. In most cases, this is simply the pristine upstream source release tarball, possibly copied to the same server as the binaries to satisfy the license.</p>
<p>If you want to repackage the necessary run-time files together with your application into an installer, you can choose to leave out for instance message catalogs for languages that your application isn't localised to anyway.</p>

<h3>GTK+ 3.x</h3>
<p>GTK+ 3.6.4 is the current maintained version.</p>

<h4>All-in-one bundles</h4>
<p>If you find choosing, downloading and unpacking the individual zip archives below a chore, there is an <a href="http://win32builder.gnome.org/gtk+-bundle_3.6.4-20130921_win32.zip" class="download">all-in-one bundle</a> of the GTK+ stack including 3rd-party dependencies. The bundle contains both run-time and developer files. Many of the developer files are relatively irrelevant. If you intend to redistribute the GTK+ run-time, you can use this <a href="win32_contentlist.php">content list</a> to figure out which files you can leave out yourself. A new bundle will ideally be provided here whenever one of the member packages has been updated.</p>

<h4>GTK+ individual packages</h4>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>
	<tr class="even">
		<td>GLib</td>
		<td>2.34.3</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/glib_2.34.3-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/glib-dev_2.34.3-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/glib/2.34/glib-2.34.3.tar.xz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>ATK</td>
		<td>2.6.0</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/atk_2.6.0-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/atk-dev_2.6.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/atk/2.6/atk-2.6.0.tar.xz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>Pango</td>
		<td>1.30.1</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/pango_1.30.1-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/pango-dev_1.30.1-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/pango/1.30/pango-1.30.1.tar.xz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>gdk-pixbuf</td>
		<td>2.26.5</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/gdk-pixbuf_2.26.5-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/gdk-pixbuf-dev_2.26.5-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gdk-pixbuf/2.26/gdk-pixbuf-2.26.5.tar.xz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>GTK+</td>
		<td>3.6.4</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/gtk+_3.6.4-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/gtk+-dev_3.6.4-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/3.6/gtk+-3.6.4.tar.xz" class="download">Sources</a></td>
	</tr>
</table>

<h4>Required third party dependencies</h4>
<p>The run-time packages here are required by the GTK+ stack.</p>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>

	<tr class="even">
		<td>zlib</td>
		<td>1.2.7</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/zlib_1.2.7-1_win32.zip" class="download">Run-time </a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/zlib-dev_1.2.7-1_win32.zip" class="download">Dev </a></td>
		<td><a href="http://www.zlib.net/zlib127.zip" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>cairo</td>
		<td>1.10.2</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/cairo_1.10.2-2_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/cairo-dev_1.10.2-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/cairo-1.10.2.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>libpng</td>
		<td>1.5.14</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/libpng_1.5.14-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/libpng-dev_1.5.14-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://sourceforge.net/projects/libpng/files/libpng15/older-releases/1.5.14/libpng-1.5.14.tar.xz/download" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>libxml2</td>
		<td>2.8.0</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/libxml2_2.8.0-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/libxml2-dev_2.8.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="ftp://xmlsoft.org/libxml2/libxml2-2.8.0.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>Freetype</td>
		<td>2.4.11</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/freetype_2.4.11-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/freetype-dev_2.4.11-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://downloads.sourceforge.net/project/freetype/freetype2/2.4.11/freetype-2.4.11.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>Fontconfig</td>
		<td>2.10.2</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/fontconfig_2.10.2-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/fontconfig-dev_2.10.2-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://www.fontconfig.org/release/fontconfig-2.10.2.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>libiconv</td>
		<td>1.13.1</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/libiconv_1.13.1-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/libiconv-dev_1.13.1-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnu.org/pub/gnu/libiconv/libiconv-1.13.1.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>gettext-runtime</td>
		<td>0.18.2.1</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/gettext_0.18.2.1-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/gettext-dev_0.18.2.1-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnu.org/pub/gnu/gettext/gettext-0.18.2.1.tar.gz" class="download">Sources</a></td>
	</tr>

</table>

<h4>Other third party software</h4>
<p>These packages are not needed to run software that uses just GTK+, or to develop such software. These packages are used when building and running more complex applications.</p>

<table>

	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>

	<tr class="even">
		<td>rsvg</td>
		<td>2.36.4</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/rsvg_2.36.4-1_win32.zip" class="download">Runtime</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/rsvg-dev_2.36.4-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.acc.umu.se/pub/gnome/sources/librsvg/2.36/librsvg-2.36.4.tar.xz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>croco</td>
		<td>0.6.8</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/croco_0.6.8-1_win32.zip" class="download">Runtime</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/croco-dev_0.6.8-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.acc.umu.se/pub/gnome/sources/libcroco/0.6/libcroco-0.6.8.tar.xz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>pixman</td>
		<td>0.26.0</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/pixman_0.26.0-1_win32.zip" class="download">Runtime</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/pixman-dev_0.26.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/pixman-0.26.0.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>pkg-config</td>
		<td>0.28</td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/pkg-config_0.28-1_win32.zip" class="download">Tool</a></td>
		<td><a href="http://win32builder.gnome.org/packages/3.6/pkg-config-dev_0.28-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://pkgconfig.freedesktop.org/releases/pkg-config-0.28.tar.gz" class="download">Sources</a></td>
	</tr>

</table>

<h3>GTK+ 2.x</h3>
<p>GTK+ 2.24 is the current maintained version.</p>

<h4>All-in-one bundles</h4>
<p>If you find choosing, downloading and unpacking the individual zip archives below a chore, there is an <a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.24/gtk+-bundle_2.24.10-20120208_win32.zip" class="download">all-in-one bundle</a> of the GTK+ stack including 3rd-party dependencies. The bundle contains both run-time and developer files. Many of the developer files are relatively irrelevant. If you intend to redistribute the GTK+ run-time, you need to figure out which files you can leave out yourself. A new bundle will ideally be provided here whenever one of the member packages has been updated.</p>

<h4>GTK+ individual packages</h4>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>
	<tr class="even">
		<td>GLib</td>
		<td>2.28.8</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/glib/2.28/glib_2.28.8-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/glib/2.28/glib-dev_2.28.8-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/glib/2.28/glib-2.28.8.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>ATK</td>
		<td>1.32.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/atk/1.32/atk_1.32.0-2_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/atk/1.32/atk-dev_1.32.0-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/atk/1.32/atk-1.32.0.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>Pango</td>
		<td>1.29.4</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/pango/1.29/pango_1.29.4-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/pango/1.29/pango-dev_1.29.4-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/pango/1.29/pango-1.29.4.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>gdk-pixbuf</td>
		<td>2.24.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gdk-pixbuf/2.24/gdk-pixbuf_2.24.0-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gdk-pixbuf/2.24/gdk-pixbuf-dev_2.24.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gdk-pixbuf/2.24/gdk-pixbuf-2.24.0.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>GTK+</td>
		<td>2.24.10</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.24/gtk+_2.24.10-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.24/gtk+-dev_2.24.10-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/2.24/gtk+-2.24.10.tar.xz" class="download">Sources</a></td>
	</tr>
</table>

<h4>Required third party dependencies</h4>
<p>The run-time packages here are required by the GTK+ stack.</p>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>

	<tr class="even">
		<td>zlib</td>
		<td>1.2.5</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/zlib_1.2.5-2_win32.zip" class="download">Run-time </a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/zlib-dev_1.2.5-2_win32.zip" class="download">Dev </a></td>
		<td><a href="http://www.zlib.net/zlib125.zip" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>cairo</td>
		<td>1.10.2</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/cairo_1.10.2-2_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/cairo-dev_1.10.2-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/cairo-1.10.2.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>libpng</td>
		<td>1.4.3</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/libpng_1.4.3-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/libpng-dev_1.4.3-1_win32.zip" class="download">Dev</a></td>
		<td></td>
	</tr>

	<tr class="odd">
		<td>Freetype</td>
		<td>2.4.2</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/freetype_2.4.2-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/freetype-dev_2.4.2-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/freetype-2.4.2.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>Fontconfig</td>
		<td>2.8.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/fontconfig_2.8.0-2_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/fontconfig-dev_2.8.0-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://www.fontconfig.org/release/fontconfig-2.8.0.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>expat</td>
		<td>2.0.1</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/expat_2.0.1-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/expat-dev_2.0.1-1_win32.zip" class="download">Dev</a></td>
		<td></td>
	</tr>

	<tr class="even">
		<td>gettext-runtime</td>
		<td>0.18.1.1</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/gettext-runtime_0.18.1.1-2_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/gettext-runtime-dev_0.18.1.1-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/gettext-0.18.1.1.tar.gz" class="download">Sources</a></td>
	</tr>

</table>

<h4>Other third party software</h4>
<p>These packages are not needed to run software that uses just GTK+, or to develop such software. These packages are used when building and running more complex applications.</p>

<table>

	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>

	<tr class="even">
		<td>pixman</td>
		<td>0.24.0</td>
		<td></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pixman-dev_0.24.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/pixman-0.24.0.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>pkg-config</td>
		<td>0.26</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config_0.26-1_win32.zip" class="download">Tool</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config-dev_0.26-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config-0.26.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>gettext-tools</td>
		<td>0.18.1.1</td>
		<td></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/gettext-tools-dev_0.18.1.1-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/gettext-0.18.1.1.tar.gz" class="download">Sources</a></td>
	</tr>

</table>

<h4>About pixman</h4>
<p>This is a static build of pixman library. It is linked into the cairo DLL and there is no separate pixman run-time package.</p>

<h4>About libpng</h4>
<p>This libpng build package provides <code>libpng14-14.dll</code>. This package is built by me (Tor Lillqvist). Back in history the GTK+ stack was built against the gnuwin32 build of libpng. Confusingly, gnuwin32's older builds of libpng provided <code>libpng13.dll</code>, and their newer builds provided <code>libpng12.dll</code>. I don't know whether these builds actually are binary compatible even if the DLL name was different. To be safe, never rename DLLs.</p>

<h4>About zlib</h4>
<p>This is the compression library used by glib and libpng. The above is just repackaged upstream DLL, slightly fixed headers, and import libraries. It provides <code>zlib1.dll</code>.</p>

<h4>About pkg-config</h4>
<p>This program is useful for Makefiles and configure scripts and extensively used in building software according to the GTK+ and GNOME conventions using autotools. It uses a <q>database</q> specifying inter-dependencies among software packages. It is used to get the compile and link flags needed when building software using libraries that provide pkg-config data. It requires GLib.</p>

<h4>About freetype and fontconfig</h4>
<p>These libraries are used by cairo and by Pango. They provide an alternative font backend. In a normal GTK+ application on Windows their functionality won't actually be used, though. GIMP is an exception, GIMP's text tool uses freetype and fontconfig APIs.</p>

<h4>About gettext-runtime</h4>
<p>The GNU internationalization library. All of the GTK+ stack uses it. The DLL uses the traditional name intl.dll as it is ABI compatible with older builds of GNU libintl that used that DLL name.</p>
 
<p>Previously the "proxy-libintl" library that loads the gettext-runtime DLL dynamically was used, but now the GTK+ stack is just linked normally to intl.dll.</p>

<?php require '../template.php';
