---
---

# Setting up GTK for GNU/Linux and Unix

![GTK and Linux](/assets/img/docs/docs-gtk-linux.png)

In order to install GTK for GNU/Linux and Unix systems, you will need to get
the GLib, GObject-Introspection, Pango, Gdk-Pixbuf, ATK and GTK packages to
build GTK. To read more about these packages, please refer to the
[Architecture](/docs/architecture/).

## Stable version

To build an environment for GTK, install all the dependencies listed below:

Dependency | Source
--- | :---:
GTK | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/gtk+/3.99/)
GLib | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/glib/)
Pango | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/pango/)
Gdk-pixbuf | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/gdk-pixbuf/)
ATK | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/atk/)
GObject-Introspection | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/gobject-introspection/)
Epoxy | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/libepoxy/)

The current unstable API version of GTK is 3.99.

To build GTK, see the [installation guide](https://developer.gnome.org/gtk4/unstable/gtk-building.html).
For additional help, the [frequently asked questions page](https://developer.gnome.org/gtk4/unstable/gtk-question-index.html) is a
good starting point.

## Development version

To build the latest development version of GTK you can use a tool like
[JHBuild](https://wiki.gnome.org/Projects/Jhbuild), or you can rely on
meson which will download and build many of the required dependencies
as subprojects, if they are not available on your system.

## Older Versions

Some applications still require GTK 3, an older stable version of GTK. You
can have the run-time and development environments for GTK 4.x and GTK 3.x
installed simultaneously on your computer.

### GTK v3.x

Version | Packages
--- | ---
GTK 3.24 | [Sources](https://download.gnome.org/sources/gtk+/3.24/)
