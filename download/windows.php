<?php
$nav = "download";
$title = "GTK Download: Windows";
ob_start();
?>
<h2><a name="Download">Download for Windows</a></h2>

<p>Note: These instructions are intended for developers wanting to develop applications based on GTK, not for end-users.</p>

<h3><a name="Requirements">Requirements</a></h3>
 
<h4>Windows version</h4>
<p>GTK requires Windows 7 or later.</p>

<p>For older versions of Windows, you should do a custom build of older versions of GLib and GTK.</p>

<h3>Installing GTK and its dependencies</h3>

<p>The easiest way to install GTK and its dependencies in binary form is through the <a class="external" href="https://msys2.github.io/">MSYS2</a> project. MSYS2 provides a UNIX-like development environment for Windows. It provides packages for many software applications and libraries, including the GTK stack. These packages are installed using the <a class="external" href="https://github.com/msys2/msys2/wiki/MSYS2-installation#iv-general-package-management">pacman package manager</a>.</p>

<p>Note: in the following steps, we'll assume you're using a 64-bit Windows. Therefore, the package names include the <code>x86_64</code> architecture identifier. If you're using a 32-bit Windows, please adapt the instructions below using the <code>i686</code> architecture identifier.</p>

<h4>Step 1: Install MSYS2</h4>
<p>
<a class="external" href="https://msys2.github.io/">Download the MSYS2 installer</a> that matches your platform and follow the installation instructions.
</p>

<h4>Step 2: Install GTK3 and its dependencies</h4>
<p>Open a MSYS2 shell, and run:<br />
<code>pacman -S mingw-w64-x86_64-gtk3</code>
</p>

<h4>Step 3 (recommended): Install GTK core applications</h4>
<p><strong>Glade</strong> is a GUI designer for GTK. It lets you design your GUI and export it in XML format.
You can then import your GUI from your code using the <code>GtkBuilder</code> API. Read the <code>GtkBuilder</code> section in the GTK manual for more information.</p>

<p>To install Glade:<br />
<code>pacman -S mingw-w64-x86_64-glade</code>
</p>

<p><strong>Devhelp</strong> is a help browser. It lets you easily navigate offline in the GTK, glib and gobject API help relative to the version of these libraries installed on your system.</p>

<p>To install Devhelp:<br />
<code>pacman -S mingw-w64-x86_64-devhelp</code>
</p>

<h4>Step 4 (optional): Install the Python bindings</h4>
<p>If you want to develop a GTK3 application in Python, you need to install the Python bindings.</p>

<p>If you develop in Python 3:<br />
<code>pacman -S mingw-w64-x86_64-python3-gobject</code>
</p>

<p>If you develop in Python 2:<br />
<code>pacman -S mingw-w64-x86_64-python2-gobject</code>
</p>

<h4>Step 5 (optional): Install build tools</h4>
<p>If you want to develop a GTK3 application in other languages like C, C++, Fortran, etc, you'll need a compiler like gcc and other development tools:<br />
<code>pacman -S mingw-w64-x86_64-toolchain base-devel</code>
</p>

<h2>Building and distributing your application</h2>

<h3>Building your application with MSYS2</h3>
<p>You may use MSYS2 to <a class="external" href="https://blogs.gnome.org/nacho/2014/08/01/how-to-build-your-gtk-application-on-windows/">build your GTK application and create an installer to distribute it</a>. Your installer will need to ship your application build artifacts as well as GTK binaries and runtime dependencies.</p>

<h3>Building your application with Visual Studio</h3>
<p>GTK releases provide project files for Microsoft Visual Studio. You can use them to build GTK itself and use it in your own project. Learn more on <a class="external" href="https://wiki.gnome.org/Projects/GTK/Win32/MSVCCompilationOfGTKStack">how to build the GTK stack using Microsoft Visual Studio</a> and read these other tips on <a class="external" href="https://blogs.gnome.org/nacho/2015/02/19/building-gtk-3-with-msvc-2013/">how to build GTK with MSVC on Windows</a>.</p>

<h3>Distributing GTK with your application</h3>
<p>You are welcome to redistribute GTK binaries, including applications that bundle them, on other web sites, CD-ROM, and other media. You don't have to ask for permission. That's one of the points of Free Software. One important thing that the <a class="external" href="http://www.fsf.org/licenses/licenses.html">GNU licenses</a> require is that <strong>you must also redistribute the source code</strong>. This usually means at least the gettext, GLib, GTK, Pango and Atk sources.</p>

<h4>List of GTK dependencies</h4>
<p>GTK depends on several libraries:</p>
<ul>
<li>GLib</li>
<li>cairo</li>
<li>Pango</li>
<li>ATK</li>
<li>gdk-pixbuf</li>
</ul>

<p>To run GTK programs you will also need:</p>
<ul>
<li>gettext-runtime</li>
<li>fontconfig</li>
<li>freetype</li>
<li>expat</li>
<li>libpng</li>
<li>zlib</li>
</ul>

<?php require '../template.php';
