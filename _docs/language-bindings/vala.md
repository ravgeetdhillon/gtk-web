---
permalink: /docs/language-bindings/:name/
---
# GTK and Vala

## About Vala

[**Vala**](https://wiki.gnome.org/Projects/Vala) is a programming language using modern high level abstractions without imposing additional runtime requirements and without using a different ABI compared to applications and libraries written in C. Vala uses the GObject type system and has additional code generation routines that make targeting the GNOME stack simple. Vala has many other uses where native binaries are required..

## GTK Documentation for Vala

There is an official [GTK API Documentation](https://valadoc.org/) for using GTK and Vala together, deals with the Vala bindings for GLib, GTK, Cairo, GtkSourceView and other GLib-compatible libraries(more than 256).

There are also a growing number of examples and through tests of language features in the test suite.

You can see many Vala and GTK based projects[GNOME Wiki](https://wiki.gnome.org/Projects/Vala/Documentation#Projects_Developed_in_Vala) and [Github Repositories](https://github.com/search?q=language%3AVala&type=Repositories&ref=advsearch&l=Vala&l=).


## Tutorials

[**Vala**](https://wiki.gnome.org/Projects/Vala/) website lists various [Vala's GTK tutorial](https://wiki.gnome.org/Projects/Vala/Documentation#GUI_Programming) [GTK's Vala tutorial](https://developer.gnome.org/gnome-devel-demos/stable/beginner.vala.html.en) that range from introduction to the usage of Gtk and much more.

## A Hello World app
Below is an `Hello World` program that can be used as an example to get started with GTK Vala binding.
```vala
int main (string[] argv) {
    // Create a new application
    var app = new Gtk.Application ("com.example.GtkApplication",
                                   GLib.ApplicationFlags.FLAGS_NONE);

    app.activate.connect (() => {
        // Create a new window
        var window = new Gtk.ApplicationWindow (app);

        // Create a new button
        var button = new Gtk.Button.with_label ("Hello, World!");

        // When the button is clicked, close the window
        button.clicked.connect (() => {
            window.close ();
        });

        window.set_child (button);
        window.present ();
    });

    return app.run (argv);
}
```

## Contribute

If you are interested in contributing to the Vala and GTK binding project, you can get a head start by reading the instructions on how to get started for contributing to Vala [here](https://wiki.gnome.org/Projects/Vala/Bindings).

If you want to get in touch with the original source files, you can visit the project's [git repository](https://gitlab.gnome.org/GNOME/vala) on GNOME.

## See More

* Project: [https://gitlab.gnome.org/GNOME/vala](https://gitlab.gnome.org/GNOME/vala)
* Docs: [https://valadoc.org/](https://valadoc.org/)
* Tutorial:
  - [Vala's GTK tutorial](https://wiki.gnome.org/Projects/Vala/Documentation#GUI_Programming)
  - [GTK's Vala tutorial](https://developer.gnome.org/gnome-devel-demos/stable/beginner.vala.html.en)
