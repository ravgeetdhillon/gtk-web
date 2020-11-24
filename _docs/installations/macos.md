---
---

# Setting up GTK for Mac OS

![GTK and MacOS](/assets/img/docs/docs-gtk-macos.svg)

## About

Do you have a favorite GTK application that you'd like to run on your Mac
with a more Mac-like look and feel, with the menus up on the menu bar and
standard Mac keyboard shortcuts like Command-Q? Perhaps you maintain a GTK
application and want to expand your user base to Mac users who want a Mac
experience, not a transplanted Unix experience?

## Features

Linking with GTK's [Quartz backend](https://wiki.gnome.org/Projects/GTK/OSX)
connects your application to the Mac's native display manager, keyboard, and
pointing device. With a little extra code and
[gtk-mac-integration](https://wiki.gnome.org/Projects/GTK/OSX/Integration)
you can:

* **Integrate** the Application's menus with the Mac Menubar.
* **Manipulate** your application's dock tile.
* **Receive** open events from Finder.
* **Find** resources in your application bundle.

## Requirements

There are a number of requirements that need to be met by your system before
you can build for OSX. These are updated from time to time and kept on the
live wiki.

## Building

[Building](https://wiki.gnome.org/Projects/GTK/OSX/Building) with
[jhbuild](https://wiki.gnome.org/Projects/Jhbuild) and the GTK-OSX
modulesets, you can build your application and all of its dependent
libraries with a single command.

## All-in-one bundles

[Bundling](https://wiki.gnome.org/Projects/GTK/OSX/Bundling) with the
gtk-mac-bundler, an easily configured python program which creates an
application bundle for you and populates it with your application executable
and all of the dependent libraries from your GTK build, changing the
installed names as needed to point inside the bundle.

## Getting Started

First, make sure that your system meets the requirements as mentioned above,
then download and run the [installation
script](https://gitlab.gnome.org/GNOME/gtk-osx/-/blob/master/gtk-osx-setup.sh)
(gtk-osx-build-setup.sh). If your application already has a module,
everything you need to build your application is handled by jhbuild. The
build page has detailed instructions.

## Success Stories

Some of the projects which have used GTK on Mac OS X have shared their
[experiences](https://wiki.gnome.org/Projects/GTK/OSX/PortedApps) for all to
see. If you have any feedback you would like to give about your experiences
here, please contact us on the the users mailing list as mentioned below.

## Mailing lists & web forum

Support for building, bundling, and the integration library is provided by a
[mailing list](http://mail.gnome.org/mailman/listinfo/gtk-osx-users-list)
and a [forum](http://sourceforge.net/apps/phpbb/gtk-osx/). Contributors may
wish to subscribe to the [developer's mailing
list](http://mail.gnome.org/mailman/listinfo/gtk-osx-devel-list) as well.

## Contributing

Bugs, patches and enhancements for building, integration, or bundling may be
submitted to the [gtk-mac-integration project on Gitlab](https://gitlab.gnome.org/GNOME/gtk-mac-integration/issues/new).
Bug reports on any other package, including GTK itself, should be submitted
against that package, not gtk-mac-integration; the label for the Quartz
backend is "macOS".
