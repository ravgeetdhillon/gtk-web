---
permalink: /docs/installations/:name/
---
# Setting up GTK for GNU/Linux and Unix

![GTK and Linux](/assets/img/docs/docs-gtk-linux.png)

In order to install GTK for GNU/Linux and Unix systems, you will need to get the GLib, GObject-Introspection, Pango, Gdk-Pixbuf, ATK and GTK packages to build GTK. To read more about these packages, please refer to the [Architecture](/docs/architecture/).

To build an environment for GTK, install all te dependencies listed below:

Dependency | Version | Source
--- | --- | :---:
GTK | 3.24 | [<i class="fas fa-download"></i>](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.24/)
GLib | 2.60 | [<i class="fas fa-download"></i>](http://ftp.gnome.org/pub/gnome/sources/glib/2.60/)
Pango | 1.42 | [<i class="fas fa-download"></i>](http://ftp.gnome.org/pub/gnome/sources/pango/1.42/)
Gdk-pixbuf | 2.38 | [<i class="fas fa-download"></i>](http://ftp.gnome.org/pub/gnome/sources/gdk-pixbuf/2.38/)
ATK | 2.26 | [<i class="fas fa-download"></i>](http://ftp.gnome.org/pub/gnome/sources/atk/2.26/)
GObject-Introspection | 1.60 | [<i class="fas fa-download"></i>](http://ftp.gnome.org/pub/gnome/sources/gobject-introspection/1.60/)

To build GTK 3.24, see the [installation guide](https://developer.gnome.org/gtk3/stable/gtk-building.html). For additional help, [FAQ](https://developer.gnome.org/gtk3/stable/gtk-question-index.html) is a good starting point.

## Older Versions

Some applications still require GTK 2, an older stable version of GTK. You can have the run-time and development environments for GTK 3.x, GTK 2.x and GTK 1.2 installed simultaneously on your computer.

### GTK v3.x

Version | Packages
--- | ---
GTK 3.22 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.22/)
GTK 3.20 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.20/)
GTK 3.18 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.18/)
GTK 3.16 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.16/)
GTK 3.14 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.14/)
GTK 3.12 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.12/)
GTK 3.10 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.10/)
GTK 3.8 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.8/)
GTK 3.6 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.6/)
GTK 3.4 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.4/)
GTK 3.2 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.2/)
GTK 3.0 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/3.0/)

### GTK v2.x

Version | Packages
--- | ---
GTK 2.24 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/2.24/)

### GTK v1.x

Version | Packages
--- | ---
GTK 1.2 | [Sources](http://ftp.gnome.org/pub/gnome/sources/gtk+/1.2/)