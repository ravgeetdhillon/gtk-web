<?php
$nav = "download";
$title = "GTK+ Download: Windows (64-bit)";
ob_start();
?>

<h2><a name="Download">Download for Windows (64-bit)</a></h2>

<div class="warning"><span>Note that these 64-bit packages are experimental. Binary compatibility between versions is not guaranteed.</span></div>

<h3><a name="Requirements">Requirements</a></h3>
<h4>Packages</h4>
<p>You will need to get the GLib, Cairo, Pango, ATK, and GTK+ developer packages to build against GTK+. To run GTK+ programs you will also need the libpng and zlib packages, and if your code uses gettext for internationalization and/or you want GTK+ internationalization, the gettext package.</p>

<p>The packages here are for people who develop software that uses GTK+. This page is not intended directly for end-users. It is expected that people who build installers for GTK+ applications for Windows bundle GTK+ with them.</p>

<p>You are welcome to redistribute GTK+ binaries, including applications that bundle them, on other web sites, CD-ROM, and other media. You don't have to ask for permission. That's one of the points of Free Software. One important thing that the <a href="http://www.fsf.org/licenses/licenses.html" class="external">GNU licenses</a> require is that <strong>you must also redistribute the source</strong> code. This usually means at least the gettext, GLib, GTK+, Pango and ATK sources.</p>

<h4>What toolchain to use?</h4>
<p>The most natural toolchain to use together with these packages is the GNU compiler and other utilities. When targeting Windows, that combination is known as <a href="http://www.mingw.org" class="external">MinGW</a>. Support for 64-bit Windows is not yet available from the official MinGW project. There is a separate porting effort for 64-bit Windows called <a href="http://mingw-w64.sourceforge.net" class="external">mingw-w64</a>. These packages have been built using that compiler, cross-compiling from 32-bit Windows.</p>

<p>It might be possible to use these packages also with Microsoft's compiler. Unlike the 32-bit versions, that has not been actually tested, though. The DLLs here use the <tt>msvcrt.dll</tt> runtime library.</p>

<h3><a name="StableRelease">Stable Release</a></h3>
<p>There are 3 types of download options below. <strong>Binaries</strong> provide only the DLLs and other files used you will need to run your GTK+-using application. <strong>Dev</strong> packages provide include files, import libraries, documentation and additional tools, and also for reference the script used to build the component in question. In case patches have been applied to the upstream sources before building, these are inline in the build script. <strong>Source</strong> packages provide the source code for the component in question. In most cases, this is simply the pristine upstream source release tarball, possibly copied to the same server as the binaries to satisfy the license.</p>

<p>If you want to repackage the necessary runtime files together with your application into an installer, you can choose to leave out for instance message catalogs for languages that your application isn't localised to anyway.</p>

<h4>All-in-one bundle</h4>

<p>If you find choosing, downloading and unpacking the individual zip archives below a chore, there are all-in-one bundles of the GTK+ stack including 3rd-party dependencies, both of GTK+ <a href="http://ftp.gnome.org/pub/gnome/binaries/win64/gtk+/2.16/gtk+-bundle_2.16.6-20100208_win64.zip" class="download">2.16</a> and <a href="http://ftp.gnome.org/pub/gnome/binaries/win64/gtk+/2.20/gtk+-bundle_2.20.0-20100402_win64.zip" class="download">2.20</a>. The bundles contain both binaries and a lot of developer files, many of which are relatively irrelevant. If you intend to redistribute the GTK+ run-time, you need to figure out which files you can leave out yourself. A new bundle will ideally be provided here whenever one of the member packages has been updated.</p>

<h3>GTK+ individual packages</h3>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>
	<tr class="even">
		<td>GLib</td>
		<td>2.26.1</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/glib/2.26/glib_2.26.1-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/glib/2.26/glib-dev_2.26.1-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/glib/2.26/glib-2.26.1.tar.bz2" class="download">Sources</a></td>
	</tr>
	<tr class="odd">
		<td>GTK+</td>
		<td>2.16.6 (old, but in many respects more stable)</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/gtk+/2.16/gtk+_2.16.6-2_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/gtk+/2.16/gtk+-dev_2.16.6-2_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/2.16/gtk+-2.16.6.tar.bz2" class="download">Sources</a></td>
	</tr>
	<tr class="even">
		<td>GTK+</td>
		<td>2.22.1 (current maintained branch)</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/gtk+/2.22/gtk+_2.22.1-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/gtk+/2.22/gtk+-dev_2.22.1-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/2.22/gtk+-2.22.1.tar.bz2" class="download">Sources</a></td>
	</tr>
	<tr class="odd">
		<td>Pango</td>
		<td>1.28.3</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/pango/1.28/pango_1.28.3-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/pango/1.28/pango-dev_1.28.3-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/pango/1.28/pango-1.28.3.tar.bz2" class="download">Sources</a></td>
	</tr>
	<tr class="even">
		<td>ATK</td>
		<td>1.32.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/atk/1.30/atk_1.32.0-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/atk/1.30/atk-dev_1.32.0-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/atk/1.30/atk-1.32.0.tar.bz2" class="download">Sources</a></td>
	</tr>
	<tr class="odd">
		<td>cairo</td>
		<td>1.10.2</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/cairo_1.10.2-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/cairo-dev_1.10.2-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/cairo-1.10.2.tar.gz" class="download">Sources</a></td>
	</tr>
</table>

<h4>Third Party Dependencies</h4>
<p>You won't need all of these packages to just use GTK+ Some of the optional packages are needed for building applications like GIMP on Windows. Required packages are illustrated with <img src="../images/progress-complete.png" alt=""/>.</p>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="4">Downloads</th>
	</tr>
	<tr>
		<td>zlib</td>
		<td>1.2.3</td>
		<td><a href="http://ftp.gnome.org/pub/GNOME/binaries/win64/dependencies/zlib_1.2.3-2_win64.zip" class="download">Binaries</a></td>
		<td colspan="2"><a href="http://ftp.gnome.org/pub/GNOME/binaries/win64/dependencies/zlib_1.2.3-2_win64.zip" class="download">Dev</a></td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	<tr class="odd">
		<td>win_iconv</td>
		<td>20090213</td>
		<td colspan="3"><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/win-iconv-dev_tml-20090213_win64.zip" class="download">Dev &amp; Sources</a></td>
		<td class="required"><img src="../images/progress-incomplete.png" alt=""/></td>
	</tr>
	<tr>
		<td>gettext-runtime</td>
		<td>0.17</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/gettext-runtime_0.17-3_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/gettext-runtime-dev_0.17-3_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/gettext-0.17.tar.gz" class="download">Sources</a></td>
		<td class="required"><img src="../images/progress-incomplete.png" alt=""/></td>
	</tr>
	<tr class="odd">
		<td>pkg-config</td>
		<td>0.23-2</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/pkg-config_0.23-2_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/pkg-config-dev_0.23-2_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config-0.23.tar.gz" class="download">Sources</a></td>
		<td class="required"><img src="../images/progress-incomplete.png" alt=""/></td>
	</tr>
	<tr>
		<td>libpng</td>
		<td>1.4.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/libpng_1.4.0-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/libpng-dev_1.4.0-1_win64.zip" class="download">Dev</a></td>
		<td>-</td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	<!-- libjpeg and libtiff not needed now with GDI+ gdk-pixbuf loaders built in
	<tr class="odd">
		<td>libjpeg</td>
		<td>7</td>
		<td><a href="http://ftp.gnome.org/pub/GNOME/binaries/win64/dependencies/jpeg_7-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/GNOME/binaries/win64/dependencies/jpeg-dev_7-1_win64.zip" class="download">Dev</a></td>
		<td>-</td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	<tr>
		<td>libtiff</td>
		<td>3.9.1</td>
		<td><a href="http://ftp.gnome.org/pub/GNOME/binaries/win64/dependencies/libtiff_3.9.1-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/GNOME/binaries/win64/dependencies/libtiff-dev_3.9.1-1_win64.zip" class="download">Dev</a></td>
		<td>-</td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	-->
	<tr class="odd">
		<td>Freetype</td>
		<td>2.3.12</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/freetype_2.3.12-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/freetype-dev_2.3.12-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/freetype-2.3.12.tar.bz2" class="download">Sources</a></td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	<tr>
		<td>Fontconfig</td>
		<td>2.8.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/fontconfig_2.8.0-1_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/fontconfig-dev_2.8.0-1_win64.zip" class="download">Dev</a></td>
		<td><a href="http://www.fontconfig.org/release/fontconfig-2.8.0.tar.gz" class="download">Source</a></td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	<tr class="odd">
		<td>libexpat</td>
		<td>2.0.1</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/expat_2.0.1-2_win64.zip" class="download">Binaries</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/expat-dev_2.0.1-2_win64.zip" class="download">Dev</a></td>
		<td>-</td>
		<td class="required"><img src="../images/progress-complete.png" alt=""/></td>
	</tr>
	<tr>
		<td>proxy-libintl</td>
		<td>20090911</td>
		<td colspan="3"><a href="http://ftp.gnome.org/pub/gnome/binaries/win64/dependencies/proxy-libintl-dev_20090911_win64.zip" class="download">Binaries &amp; sources</a></td>
		<td class="required"><img src="../images/progress-incomplete.png" alt=""/></td>
	</tr>
</table>

<h4>About libpng</h4>
<p>This is an image file format library used by GTK+, and required.</p>

<h4>About zlib</h4>
<p>This is the compression library used by libpng and libtiff, and thus also required.</p>

<h4>About win_iconv</h4>
<p>win_iconv is an implementation of <a href="http://www.opennc.org/onlinepubs/7908799/xsh/iconv.html" class="external">iconv</a> for Windows by Yukihiro Nakadaira that has a much smaller footprint than GNU libiconv. The win_iconv package above includes the header file, static archive library and the source file. This library is linked statically into GLib and thus not needed separately at run-time.</p>

<h4>About gettext</h4>
<p>The GNU internationalization library. All of the GTK+ stack uses it, but through proxy-libintl (see below) so it is actually optional at run-time.</p>

<!--
<h4>About libjpeg and libtiff</h4>
<p>These libraries are used by the gdk-pixbuf library in GTK+, and for instance by GIMP.</p>
-->

<h4>About pkg-config</h4>
<p>This program is useful for Makefiles and configure scripts and extensively used in building software according to the GTK+ and GNOME conventions using autotools. It uses a <q>database</q> specifying inter-dependencies among software packages. It is used to get the compile and link flags needed when building software using libraries that provide pkg-config data. It requires GLib.</p>

<h4>About freetype and fontconfig</h4>
<p>These libraries are used by cairo and by Pango, so they are required. They provide an alternative font backend. In a normal GTK+ application on Windows their functionality won't actually be used, though. GIMP is an exception, GIMP's text tool uses freetype and fontconfig APIs.</p>

<h4>About libexpat</h4>
<p>This is a library required by fontconfig.</p>

<h4>About proxy-libintl</h4> 
<p>proxy-libintl is a very small static library. It acts as a proxy for the the DLL from gettext, loading it dynamically, and failing gracefully. Fallback dummy functions are used if the DLL isn't found. It is a static archive and is linked into the binaries in the GTK+ stack instead of referring directly the gettext DLL. This enables application packagers to leave out the gettext binaries if they don't need or want to support internationalization.</p>

<p>When building DLLs against the proxy-libintl static library and using the GNU linker's auto-export feature (i.e. not using a .def file, and not using <tt>__declspec(dllexport)</tt>), it is a good idea to pass <tt>-Wl,--exclude-libs=libintl.a</tt> so that the libintl functions don't get exported from your DLL.</p>

<?php require '../template.php';
