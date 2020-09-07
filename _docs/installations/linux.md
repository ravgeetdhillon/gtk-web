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
GTK | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/gtk+/3.24/)
GLib | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/glib/)
Pango | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/pango/)
Gdk-pixbuf | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/gdk-pixbuf/)
ATK | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/atk/)
GObject-Introspection | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/gobject-introspection/)
Epoxy | [<i class="fas fa-download"></i>](https://download.gnome.org/sources/libepoxy/)

The current stable API version of GTK3 is 3.24.

To build GTK, see the [installation guide](https://developer.gnome.org/gtk3/stable/gtk-building.html).
For additional help, the [frequently asked questions page](https://developer.gnome.org/gtk3/stable/gtk-question-index.html) is a
good starting point.

## Development version

To build the latest development version of GTK it is recommended to use a
tool like [JHBuild](https://wiki.gnome.org/Projects/Jhbuild), which will
download, and optionally build, all the required project dependencies.

## Older Versions

Some applications still require GTK 2, an older stable version of GTK. You
can have the run-time and development environments for GTK 3.x, GTK 2.x and
GTK 1.2 installed simultaneously on your computer.

### GTK v3.x

Version | Packages
--- | ---
GTK 3.22 | [Sources](https://download.gnome.org/sources/gtk+/3.22/)
GTK 3.20 | [Sources](https://download.gnome.org/sources/gtk+/3.20/)
GTK 3.18 | [Sources](https://download.gnome.org/sources/gtk+/3.18/)
GTK 3.16 | [Sources](https://download.gnome.org/sources/gtk+/3.16/)
GTK 3.14 | [Sources](https://download.gnome.org/sources/gtk+/3.14/)
GTK 3.12 | [Sources](https://download.gnome.org/sources/gtk+/3.12/)
GTK 3.10 | [Sources](https://download.gnome.org/sources/gtk+/3.10/)
GTK 3.8 | [Sources](https://download.gnome.org/sources/gtk+/3.8/)
GTK 3.6 | [Sources](https://download.gnome.org/sources/gtk+/3.6/)
GTK 3.4 | [Sources](https://download.gnome.org/sources/gtk+/3.4/)
GTK 3.2 | [Sources](https://download.gnome.org/sources/gtk+/3.2/)
GTK 3.0 | [Sources](https://download.gnome.org/sources/gtk+/3.0/)

### GTK v2.x

Version | Packages
--- | ---
GTK 2.24 | [Sources](https://download.gnome.org/sources/gtk+/2.24/)

### GTK v1.x

Version | Packages
--- | ---
GTK 1.2 | [Sources](https://download.gnome.org/sources/gtk+/1.2/)
