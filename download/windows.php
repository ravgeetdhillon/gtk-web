<?php
$nav = "download";
$title = "GTK Download: Windows";
ob_start();
?>
<h2><a name="Download">Download for Windows</a></h2>

<p>Note: These instructions are intended for developers wanting to
create Windows applications based on GTK, not for end-users. On
Windows, GTK applications are typically bundled with GTK already, so
end-users do not need to worry about how to install GTK itself.</p>

<p>There are two methods to install GTK on Windows development
machines. One method is based on the packages available from the <a
href="https://docs.microsoft.com/en-us/cpp/vcpkg">Microsoft vcpkg
project</a>, which are built using Visual Studio, and therefore work
well if you intend to develop using that platform. The other method is
based on the packages provided by <a
href="https://www.msys2.org/">MSYS2</a>, which provides a UNIX-like
environment for Windows. Both of these repositories also provide
packages for a large number of other useful open source libraries.</p>

<p>If you really want to build GTK from the pristine sources
yourself, you can use the project files for Microsoft Visual Studio
provided by the GTK releases. Learn more on <a class="external"
href="https://wiki.gnome.org/Projects/GTK/Win32/MSVCCompilationOfGTKStack">how
to build the GTK stack using Microsoft Visual Studio</a> and read
these other tips on <a class="external"
href="https://blogs.gnome.org/nacho/2015/02/19/building-gtk-3-with-msvc-2013/">how
to build GTK with MSVC on Windows</a>. In almost all cases, using the
packages from vcpkg or MSYS2 is much simpler though.</p>

<p>These instructions all assume you are using Windows 7 or later. For
older versions of Windows, you will need to do a custom build of older
versions of GLib and GTK.</p>


<h2><a name="Vcpkg">Using GTK from vcpkg packages</a></h2>

<p><b>WARNING</b>: The vcpkg packaging is not maintained by the GTK team,
and it uses a different build system than the one used by GTK. If
something breaks when building GTK or its dependencies using vcpkg, make
sure to open an issue in the <a href="https://github.com/Microsoft/vcpkg/issues"
class="external">vcpkg issue tracker</a>, instead of the GTK one.</p>

<h3>Installation</h3>

<p>The GTK library, as well as all pre-requisites and many language
bindings (e.g.&nbsp;the C++ bindings gtkmm) are packaged by the
Microsoft vcpkg project for use with Visual Studio. This provides a
very simple way to setup a development environment to create GTK
apps. If you prefer a more UNIX-like experience, building from the
command line instead of using Visual Studio, you may want to consider
installing GTK from MSYS2 instead.</p>

<p>In order to use vcpkg packages, you first need to clone the vcpkg repository,<br/>
<code>git clone https://github.com/Microsoft/vcpkg<br/>
cd vcpkg<br/>
.\bootstrap-vcpkg.bat</code>
You can then install the GTK packages with<br/>
<code>vcpkg install gtk:x64-windows<br/></code><br/>
The part behind the colon ':' specifies the target. After this step, any 
project created in Visual Studio will now automatically see the GTK libraries.</p>

<p>If you build from the command line using CMake, you need to tell CMake where
to find the libraries. This is done by adding<br/>
<code>-DCMAKE_TOOLCHAIN_FILE=[vcpkg root]\scripts\buildsystems\vcpkg.cmake</code><br/>
to the CMake options, where <code>vcpkg root</code> is the location where
you cloned the vcpkg repository.</p>

<h3>Building and distributing your application</h3>

<p> Once you install GTK as above, you should have little problem
compiling a GTK app. In order to run it successfully, you will also
need a GTK theme.  There is some old builtin support for a Windows
theme in GTK, but that makes your app look like a Windows&nbsp;7
app. It is better to get a Windows&nbsp;10 theme, for instance the <a
href="https://github.com/B00merang-Project/Windows-10">Windows 10
Transformation Pack</a>.</p>

<p> Copy the <code>gtk-3.20</code> folder of that repository to a
folder <code>share/themes/Windows10/gtk-3.0/</code> in your
installation folder. You also need to copy the icons from the Adwaita
theme, which you can get from Linux box, where they are stored in
<code>/usr/share/icons/Adwaita/</code>; copy this entire folder to a
<code>share/icons</code> folder in your installation folder. Ditto for
the hicolor icons. To make GTK pick up this theme,
put a file <code>settings.ini</code> in <code>etc/gtk-3.0</code>
in your installation folder. This should contain<br/>
<code>[Settings]<br/>
gtk-theme-name=Windows10<br/>
gtk-font-name=Segoe UI 9<br/></code><br/>
And to top it all off, find the <code>gschemas.compiled</code> file
in <code>/usr/share/glib-2.0/schemas/</code> and copy that to
<code>share/glib-2.0/schemas</code>.</p>

<p> You then zip up your installation folder, or use an installer
generator to do that for you, and distribute the result.  </p>


<h2><a name="MSYS2">Using GTK from MSYS2 packages</a></h2>

<h3>Installation</h3>

<p>The <a class="external" href="https://msys2.github.io/">MSYS2</a>
project provides a UNIX-like development environment for Windows. It
provides packages for many software applications and libraries,
including the GTK stack. If you prefer developing using Visual Studio,
you may be better off installing GTK from vcpkg instead.</p>

<p>In MSYS2 packages are installed using the <a class="external"
href="https://github.com/msys2/msys2/wiki/MSYS2-installation#iv-general-package-management">pacman
package manager</a>.</p>

<p>Note: in the following steps, we will assume you're using a 64-bit
Windows. Therefore, the package names include the <code>x86_64</code>
architecture identifier. If you're using a 32-bit Windows, please
adapt the instructions below using the <code>i686</code> architecture
identifier.</p>

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

<h3>Building and distributing your application</h3>

<p>You may use MSYS2 to <a class="external"
href="https://blogs.gnome.org/nacho/2014/08/01/how-to-build-your-gtk-application-on-windows/">build
your GTK application and create an installer to distribute
it</a>. Your installer will need to ship your application build
artifacts as well as GTK binaries and runtime dependencies; see the
instructions above for vcpkg for more details.</p>


<h3>Legal notes on distributing GTK with your application</h3>

<p>You are welcome to redistribute GTK binaries, including
applications that bundle them, on other web sites, CD-ROM, and other
media. You don't have to ask for permission. That's one of the points
of Free Software. One important thing that the <a class="external"
href="http://www.fsf.org/licenses/licenses.html">GNU licenses</a>
require is that <strong>you must also redistribute the source
code</strong>. This usually means at least the gettext, GLib, GTK,
Pango and Atk sources.</p>

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
