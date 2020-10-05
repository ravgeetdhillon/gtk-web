---
---

# Overview of GTK and its Libraries

![GTK Architecture](/assets/img/docs/docs-gtk-architecture.svg)

Over time GTK has been built up to be based on various libraries, also
developed by the GTK team.

## GLib

[GLib](https://developer.gnome.org/glib/) is a low-level core library that
forms the basis of GTK. It provides data structure handling for C,
portability wrappers and interfaces for such run-time functionality as an
event loop, threads, dynamic loading and an object system.

## Pango

[Pango](https://www.pango.org/) is a library for layout and rendering of
text with an emphasis on internationalization. It forms the core of text and
font handling for GTK.

## Cairo

[Cairo](https://www.cairographics.org/) is a library for 2D graphics with
support for multiple output devices (including the X Window System, Win32)
while producing a consistent output on all media while taking advantage of
display hardware acceleration when available.

## GdkPixbuf

[GdkPixbuf](https://developer.gnome.org/gdk-pixbuf) is a library for loading
graphical assets like icons in various formats, like PNG, JPEG, and GIF.

## ATK

[ATK](https://developer.gnome.org/atk/) is a library for a set of interfaces
providing accessibility. By supporting the ATK interfaces, an application or
toolkit can be used with tools such as screen readers, magnifiers, and
alternative input devices.
