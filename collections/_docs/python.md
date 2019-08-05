---
permalink: /docs/language-bindings/:name/
---
![PyGObject](/assets/img/docs/docs-pygobject.svg)

## About

PyGObject is a Python package which provides bindings for GObject based libraries such as GTK, GStreamer, WebKitGTK, GLib, GIO and many more.

It supports Linux, Windows and macOS and works with Python 2.7+, Python 3.5+, PyPy and PyPy3. PyGObject, including this documentation, is licensed under the LGPLv2.1+.

If you want to write a Python application for GNOME or a Python GUI application using GTK, then PyGObject is the way to go. For more information on specific libraries check out the [Python GTK 3 Tutorial](https://python-gtk-3-tutorial.readthedocs.io/) and the [Python GI API Reference](https://lazka.github.io/pgi-docs).

For more information, visit [https://pygobject.readthedocs.io](https://pygobject.readthedocs.io).

## PyGObject API Reference

You can view the API Reference for the PyGObject at [http://lazka.github.io/pgi-docs/](http://lazka.github.io/pgi-docs/)

## Hello World

Below is an `Hello World` program that can be used as an example to get started with the PyGObject.

```python
import gi
gi.require_version("Gtk", "3.0")
from gi.repository import Gtk

window = Gtk.Window(title="Hello World")
window.show()
window.connect("destroy", Gtk.main_quit)
Gtk.main()
```

### Explanation

`gi` python module is imported to use APIs linked with the PyGObject.

## Contribute

If you are interested in contributing to the PyGObject project or want to get in touch with the original source files, you can visit the project's [git repository](https://gitlab.gnome.org/GNOME/pygobject/) on Gitlab.

## More Resources

[Gitlab Project](https://gitlab.gnome.org/GNOME/pygobject/)
[PyGObject Website](https://pygobject.readthedocs.io/en/latest/)
[API References](http://lazka.github.io/pgi-docs/)
[PyGObject Tutorials](https://python-gtk-3-tutorial.readthedocs.io/en/latest/)