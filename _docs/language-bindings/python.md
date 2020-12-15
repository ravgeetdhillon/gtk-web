---
---

# GTK and Python

## About

PyGObject is a Python package which provides bindings for GObject based
libraries such as GTK, GStreamer, WebKitGTK, GLib, GIO and many more.

It supports Linux, Windows and macOS and works with Python 2.7+, Python
3.5+, PyPy and PyPy3. PyGObject, including this documentation, is licensed
under the LGPLv2.1+.

If you want to write a Python application for GNOME or a Python GUI
application using GTK, then PyGObject is the way to go. For more information
on specific libraries check out the [Python GTK 3 Tutorial](https://python-gtk-3-tutorial.readthedocs.io/)
and the [Python GI API Reference](https://lazka.github.io/pgi-docs).

For more information, visit [https://pygobject.readthedocs.io](https://pygobject.readthedocs.io).

## PyGObject API

You can view the API Reference for the PyGObject at
[http://lazka.github.io/pgi-docs/](http://lazka.github.io/pgi-docs/)

## A Hello World app

Below is an `Hello World` program that can be used as an example to get
started with the PyGObject.

```python
import gi
gi.require_version("Gtk", "3.0")
from gi.repository import Gtk

def on_activate(app):
    win = Gtk.ApplicationWindow(application=app)
    btn = Gtk.Button(label="Hello, World!")
    btn.connect('clicked', lambda x: win.close())
    win.add(btn)
    win.show_all()

app = Gtk.Application(application_id='org.gtk.Example')
app.connect('activate', on_activate)
app.run(None)
```

### Explanation

`gi` python module is imported to use APIs linked with the PyGObject.

## Contribute

If you are interested in contributing to the PyGObject project or want to get in touch with the original source files, you can visit the project's [git repository](https://gitlab.gnome.org/GNOME/pygobject/) on Gitlab.

## See More

* Gitlab Project: [https://gitlab.gnome.org/GNOME/pygobject/](https://gitlab.gnome.org/GNOME/pygobject/)
* PyGObject Website: [https://pygobject.readthedocs.io/en/latest/](https://pygobject.readthedocs.io/en/latest/)
* API References: [http://lazka.github.io/pgi-docs/](http://lazka.github.io/pgi-docs/)
* PyGObject Tutorials: [https://python-gtk-3-tutorial.readthedocs.io/en/latest/](https://python-gtk-3-tutorial.readthedocs.io/en/latest/)
