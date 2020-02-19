---
permalink: /docs/language-bindings/:name/
---
# GTK and Rust

## About

[**gtk-rs**](https://gtk-rs.org/) project deals with the Rust bindings for GTK, Cairo, GtkSourceView and other GLib-compatible libraries.

## gtk-rs Documentation

There is an official [gtk-rs API Documentation](https://gtk-rs.org/docs/gtk/) for using GTK and Rust together.

There are also a growing number of examples and thorough tests of language features in the test suite.

## A Hello World app

```rust
use gio::prelude::*;
use gtk::prelude::*;
use glib::clone;

use std::env::args;

fn on_activate(application: &gtk::Application) {
    let window = gtk::ApplicationWindow::new(application);
    let button = gtk::Button::new_with_label("Hello World!");

    button.connect_clicked(clone!(@weak window => move |_| window.destroy()));

    window.add(&button);
    window.show_all();
}

fn main() {
    let application =
        gtk::Application::new(Some("com.github.gtk-rs.examples.basic"), Default::default())
            .expect("Initialization failed...");

    application.connect_activate(|app| on_activate(app));
    application.run(&args().collect::<Vec<_>>());
}
```

### Explanation

This code depicts how to use GTK Rust binding for creating a simple Hello World application.

## Tutorials

[**gtk-rs**](https://gtk-rs.org/) website lists various [tutorials](https://gtk-rs.org/docs-src/tutorial/) that range from introduction to the usage of Gtk-rs crates and much more. If you want more tutorials please refer to the [FAQ](https://gtk-rs.org/docs-src/faq) page on the gtk-rs website.

## Contribute

If you are interested in contributing to the gtk-rs binding project, you can get a head start by reading the instructions on how to get started for contributing to gtk-rs [here](https://github.com/gtk-rs/gtk#contribute).

If you want to get in touch with the original source files, you can visit the project's [git repository](https://github.com/gtk-rs/gtk) on Gitlab.

## See More

* Project: [https://github.com/gtk-rs/gtk](https://github.com/gtk-rs/gtk)
* Docs: [https://gtk-rs.org/docs/gtk/](https://gtk-rs.org/docs/gtk/)
* Tutorial: [https://gtk-rs.org/docs-src/tutorial/](https://gtk-rs.org/docs-src/tutorial/)
