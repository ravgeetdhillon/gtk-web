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

<h3><a name="StableRelease">Downloads</a></h3>

<p>There are three types of downloads below. <strong>Run-time</strong> provide only the DLLs and other files used you will need to run a GTK+-using application. <strong>Dev</strong> packages provide include files, import libraries, documentation and additional tools, and also for reference the script used to build the component in question. In case patches have been applied to the upstream sources before building, these are inline in the build script. <strong>Source</strong> packages provide the source code for the component in question. In most cases, this is simply the pristine upstream source release tarball, possibly copied to the same server as the binaries to satisfy the license.</p>

<p>GTK+ 2.16 is an old but in some sense more reliable branch. 2.22 is the current maintained version. Choose the one which works better for you.</p> <p>If you want to repackage the necessary run-time files together with your application into an installer, you can choose to leave out for instance message catalogs for languages that your application isn't localised to anyway.</p>

<h3>All-in-one bundles</h3>
<p>If you find choosing, downloading and unpacking the individual zip archives below a chore, there are all-in-one bundles of the GTK+ stack including 3rd-party dependencies, both of GTK+ <a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.16/gtk+-bundle_2.16.6-20100912_win32.zip" class="download">2.16</a> and <a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.22/gtk+-bundle_2.22.1-20101227_win32.zip" class="download">2.22</a>. The bundles contain both run-time and developer files. Many of the developer files are relatively irrelevant. If you intend to redistribute the GTK+ run-time, you need to figure out which files you can leave out yourself. A new bundle will ideally be provided here whenever one of the member packages has been updated.</p>

<h4>GTK+ individual packages</h4>

<table>
	<tr>
		<th>Package</th>
		<th>Version</th>
		<th colspan="3">Downloads</th>
	</tr>
	<tr class="even">
		<td>GLib</td>
		<td>2.28.1</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/glib/2.28/glib_2.28.1-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/glib/2.28/glib-dev_2.28.1-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/glib/2.28/glib-2.28.1.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>ATK</td>
		<td>1.32.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/atk/1.32/atk_1.32.0-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/atk/1.32/atk-dev_1.32.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/atk/1.32/atk-1.32.0.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td>Pango</td>
		<td>1.28.3</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/pango/1.28/pango_1.28.3-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/pango/1.28/pango-dev_1.28.3-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/pango/1.28/pango-1.28.3.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>gdk-pixbuf</td>
		<td>2.22.1</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gdk-pixbuf/2.22/gdk-pixbuf_2.22.1-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gdk-pixbuf/2.22/gdk-pixbuf-dev_2.22.1-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gdk-pixbuf/2.22/gdk-pixbuf-2.22.1.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="even">
		<td rowspan="2">GTK+</td>
		<td>2.16.6</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.16/gtk+_2.16.6-3_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.16/gtk+-dev_2.16.6-3_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/2.16/gtk+-2.16.6.tar.bz2" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>2.22.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.22/gtk+_2.22.0-2_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/gtk+/2.22/gtk+-dev_2.22.0-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/sources/gtk+/2.22/gtk+-2.22.0.tar.bz2" class="download">Sources</a></td>
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
		<td>1.10.0</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/cairo_1.10.0-1_win32.zip" class="download">Run-time</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/cairo-dev_1.10.0-1_win32.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/cairo-1.10.0.tar.gz" class="download">Sources</a></td>
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
		<td>0.18.4</td>
		<td></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pixman-dev_0.18.4-2_win32.zip" class="download">Dev</a></td>
		<td><a href="http://cairographics.org/releases/pixman-0.18.4.tar.gz" class="download">Sources</a></td>
	</tr>

	<tr class="odd">
		<td>pkg-config</td>
		<td>0.23-3</td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config_0.23-3_win32.zip" class="download">Tool</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config-dev_0.23-3_win32.zip" class="download">Dev</a></td>
		<td><a href="http://ftp.gnome.org/pub/gnome/binaries/win32/dependencies/pkg-config-0.23.tar.gz" class="download">Sources</a></td>
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
