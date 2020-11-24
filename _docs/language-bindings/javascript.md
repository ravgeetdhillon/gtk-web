---
---

# GJS

## About

GJS is a JavaScript binding for using GNOME platform libraries in your
applications. Developers can easily integrate GJS with GTK and create
powerful GTK applications using JavaScript. GJS powers GNOME Shell, Polari,
GNOME Documents, and many other apps which are primarily written in
JavaScript.

The current stable series is built on Mozilla's SpiderMonkey featuring ES6
(ECMAScript 2015) and GObject-Introspection making most of the GNOME API
library available.

## GJS API Documentation

There is an official [GJS API Documentation](https://gjs-docs.gnome.org/gtk30/)
for using GTK with GJS.

There are also a growing number of examples and thorough tests of language
features in the test suite.

## A Hello World app

```javascript
const Gtk = imports.gi.Gtk;

let app = new Gtk.Application({ application_id: 'org.gtk.ExampleApp' });

app.connect('activate', () => {
    let win = new Gtk.ApplicationWindow({ application: app });
    let btn = new Gtk.Button({ label: 'Hello, World!' });
    btn.connect('clicked', () => { win.close(); });
    win.add(btn);
    win.show_all();
});

app.run([]);
```

### Explanation

This code depicts how to use GJS and GTK together for creating a simple
Hello World application.

### Running the application

You can run the example after saving it to a file using:
`gjs filename`

## GTK Templates in GJS

[http://www.hadess.net/2014/09/gtk-widget-templates-now-in-javascript.html](http://www.hadess.net/2014/09/gtk-widget-templates-now-in-javascript.html)

## Contribute

If you are interested in contributing to the GJS project, read the
instructions on how to get started for contributing to GJS in the
[contributing guide](https://gitlab.gnome.org/GNOME/gjs/tree/master/CONTRIBUTING.md).

If you want to get in touch with the original source files, you can visit
the project's [git repository](https://gitlab.gnome.org/GNOME/gjs/) on
Gitlab.

## See More

* Project: [https://gitlab.gnome.org/GNOME/gjs](https://gitlab.gnome.org/GNOME/gjs)
* Wiki: [https://gitlab.gnome.org/GNOME/gjs/wikis/Home](https://gitlab.gnome.org/GNOME/gjs/wikis/Home)
* JavaScript API reference: [https://gjs-docs.gnome.org/gtk30/](https://gjs-docs.gnome.org/gtk30/)
