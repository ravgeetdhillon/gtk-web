---
---

# Setting up GTK for Windows

![GTK and Windows](/assets/img/docs/docs-gtk-windows.svg)

> Note: These instructions are intended for developers wanting to create
> Windows applications based on GTK, not for end-users. On Windows, GTK
> applications are typically bundled with GTK already, so end-users do not
> need to worry about how to install GTK itself.

There are various methods to install GTK on Windows development machines.

* ### [MSYS2](#using-gtk-from-msys2-packages)
  This method is based on the packages provided by [MSYS2](https://www.msys2.org/),
  which provides a UNIX-like environment for Windows. Both of these repositories
  also provide packages for a large number of other useful open source libraries.
* ### [gvsbuild](https://github.com/wingtk/gvsbuild)
  This method provides scripts to build the GTK stack from source and outputs
  libraries and tools that can be consumed by Visual Studio or Meson based projects.

<div class="alert alert-warning">
We assume that you are using Windows 7 or later. For older versions of
Windows, you will need to do a custom build of older versions of GLib and
GTK.
</div>

## Using GTK from MSYS2 packages

### Installation

The [MSYS2](https://msys2.github.io/) project provides a UNIX-like
development environment for Windows. It provides packages for many software
applications and libraries, including the GTK stack. If you prefer
developing using Visual Studio, you should use gvsbuild instead.

In MSYS2 packages are installed using the [pacman package
manager](https://github.com/msys2/msys2/wiki/MSYS2-installation#iv-general-package-management).

> Note: in the following steps, we will assume you're using a `64-bit
> Windows`. Therefore, the package names include the x86\_64 architecture
> identifier. If you're using a 32-bit Windows, please adapt the
> instructions below using the i686 architecture identifier.

**Step 1.**: Download the [MSYS2 installer](https://www.msys2.org/) that
matches your platform and follow the installation instructions.

**Step 2.**: Install GTK3 and its dependencies. Open a MSYS2 shell, and run:

```
pacman -S mingw-w64-x86_64-gtk3
```

**Step 3. (recommended)**: Install the GTK core applications. `Glade` is a
GUI designer for GTK. It lets you design your GUI and export it in XML
format. You can then import your GUI from your code using the GtkBuilder
API. Read the GtkBuilder section in the GTK manual for more information.

To install Glade:
```
pacman -S mingw-w64-x86_64-glade
```

**Step 4. (optional)**: If you want to develop a GTK3 application in Python,
you need to install the Python bindings.

If you develop in Python 3:
```
pacman -S mingw-w64-x86_64-python3-gobject
```

If you develop in Python 2:
```
pacman -S mingw-w64-x86_64-python2-gobject
```

**Step 5. (optional)**: Install the build tools. If you want to develop a
GTK3 application in other languages like C, C++, Fortran, etc, you'll need a
compiler like gcc and other development tools: ``` pacman -S
mingw-w64-x86_64-toolchain base-devel ```

## Building and distributing your application

<div class="alert alert-success">
Once you have installed the GTK as above, you should have little problem
compiling a GTK app. In order to run it successfully, you will also need
a GTK theme. There is some old builtin support for a Windows theme in GTK,
but that makes your app look like a Windows 7 app. It is better to get a
Windows 10 theme, for instance the
[Windows 10 Transformation Pack](https://github.com/B00merang-Project/Windows-10).
</div>

**Step 1.** Copy the `gtk-3.20` folder of that repository to a folder
`share/themes/Windows10/gtk-3.0/` in your installation folder.

**Step 2.** You also need to copy the icons from the Adwaita theme, which
you can download from [the GNOME sources](https://download.gnome.org/sources/adwaita-icon-theme/).

**Step 3.** Perform the same steps for the [`hicolor`](https://www.freedesktop.org/wiki/Software/icon-theme/)
icons, which are the mandatory fallback for icons not available in Adwaita.

**Step 4.** To make GTK pick up this theme, put a file 
`settings.ini` in `etc/gtk-3.0` in your installation folder. This should contain

```
[Settings]
gtk-theme-name=Windows10
gtk-font-name=Segoe UI 9
```

**Step 5.** To top it all off, run the `glib-compile-schemas` utility
provided by GLib to generate the compiled settings schema in your installation
folder:

```
glib-compile-schemas share/glib-2.0/schemas
```

**Step 6.** You can then zip up your installation folder, or use an installer
generator to do that for you, and distribute the result.

You may use MSYS2 to [build your GTK application and create an installer to
distribute it](https://blogs.gnome.org/nacho/2014/08/01/how-to-build-your-gtk-application-on-windows/).
Your installer will need to ship your application build artifacts as well as
GTK binaries and runtime dependencies.

## Legal notes on distributing GTK with your application

You are welcome to redistribute GTK binaries, including applications that
bundle them, on other web sites, CD-ROM, and other media. You don't have to
ask for permission. That's one of the points of Free Software. 

One important thing that the [GNU
licenses](http://www.fsf.org/licenses/licenses.html) require is that you
must also redistribute the source code on request. This usually means at
least the gettext, GLib, GTK, Pango and ATK sources.
