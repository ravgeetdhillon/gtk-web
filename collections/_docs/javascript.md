---
permalink: /docs/language-bindings/:name/
---
# ![GJS and GTK Binding](/assets/img/docs/docs-jsgnome.png) GJS

## About

GJS is a Javascript binding for using GNOME patform libraries in your applications. Developers can easily integrate GJS with GTK and create powerful GTK applications using Javascript. GJS powers GNOME Shell, Polari, GNOME Documents, and many other apps which are primarily written in Javascript.

The current stable series is built on Mozilla's SpiderMonkey 52 featuring ES6 (ECMAScript 2015) and GObjectIntrospection making most of the GNOME API library available.

## GJS API Documentation

There is an official [GJS API Documentation](https://gjs-docs.gnome.org/gtk30~3.24.8/) for using GJS with GTK.

There are also a growing number of examples and thorough tests of language features in the test suite.

## A Hello World app

```javascript
const Gtk = imports.gi.Gtk;
const GLib = imports.gi.GLib;

// Initialize the gtk
Gtk.init(null, 0);

let mwindow = new Gtk.Window({type : Gtk.WindowType.TOPLEVEL});
let label = new Gtk.Label({label : "Hello World"});

// Set the window title
mwindow.title = "Hello World!";
mwindow.connect("destroy", function(){Gtk.main_quit()});

// Add the label
mwindow.add(label);

// Show the widgets
label.show();
mwindow.show();

Gtk.main();
```

### Explanation

This code depicts how to use GJS and GTK together for creating a simple Hello World application.

## GTK Templates in GJS

[http://www.hadess.net/2014/09/gtk-widget-templates-now-in-javascript.html](http://www.hadess.net/2014/09/gtk-widget-templates-now-in-javascript.html)

## Contribute

If you are interested in contributing to the GJS project, read the instructions on how to get started for contributing to GJS in the [contributing guide](https://gitlab.gnome.org/GNOME/gjs/tree/master/CONTRIBUTING.md).

If you want to get in touch with the original source files, you can visit the project's [git repository](https://gitlab.gnome.org/GNOME/gjs/) on Gitlab.

## See More

* Project: [https://gitlab.gnome.org/GNOME/gjs](https://gitlab.gnome.org/GNOME/gjs)
* Wikis: [https://gitlab.gnome.org/GNOME/gjs/wikis/Home](https://gitlab.gnome.org/GNOME/gjs/wikis/Home)
* Docs: [https://gjs-docs.gnome.org/gtk30~3.24.8/](https://gjs-docs.gnome.org/gtk30~3.24.8/)
