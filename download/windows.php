<?php
$nav = "download";
$title = "GTK+ Download: Windows";
ob_start();
?>
<h2><a name="Download">Download for Windows</a></h2>

<h3><a name="Requirements">Requirements</a></h3>
 
<h4>Packages</h4>
 
<p>You will need the GLib, cairo, Pango, ATK, gdk-pixbuf and GTK+ developer packages to build software against GTK+. To run GTK+ programs you will also need the gettext-runtime, fontconfig, freetype, expat, libpng and zlib packages.</p>

<p>This page is not intended directly for end-users. It is expected that people who build installers for GTK+ applications for Windows bundle GTK+ with them.</p>
 
<p>You are welcome to redistribute GTK+ binaries, including applications that bundle them, on other web sites, CD-ROM, and other media. You don't have to ask for permission. That's one of the points of Free Software. One important thing that the <a href="http://www.fsf.org/licenses/licenses.html">GNU licenses</a> require is that <strong>you must also redistribute the source</strong> code. This usually means at least the gettext, GLib, GTK+, Pango and Atk sources.</p>
 
<h4>Downloading GTK and its dependencies</h4>

<p>The preferred way to obtain GTK+ and its dependencies in binary form for Windows is to use the <a href="https://msys2.github.io/">MSYS2</a> project.</p>

<p>You can use the installer to set up the MSYS2 environment for developing your application by following the instructions on the
website. MSYS2 provides packages for the GTK stack, so all you have to do is install them and build your application inside the MSYS2
environment. You can also use MSYS2 to build your application, and create an installer with all the build artifacts necessary for
distributing it. You can find more information in <a href="https://blogs.gnome.org/nacho/2014/08/01/how-to-build-your-gtk-application-on-windows/">this article</a>.</p>

<p>GTK releases also provide project files for Microsoft Visual Studio, which you can use to build GTK itself and use it in your own
project. You can find more information on <a href="https://wiki.gnome.org/Projects/GTK+/Win32/MSVCCompilationOfGTKStack">the Wiki</a>
and in <a href="https://blogs.gnome.org/nacho/2015/02/19/building-gtk-3-with-msvc-2013/">this article</a>.</p>

<h4>Which Windows versions?</h4>
<p>The current GTK+ stack uses APIs that are available only on Windows Vista or later.</p>

<p>If you require builds for unsupported versions of Windows, you should do a custom build of an older version of GLib and GTK+.</p>


<?php require '../template.php';
