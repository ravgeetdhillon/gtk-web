---
permalink: /docs/language-bindings/:name/
---
#  GTK and Python

```python
import sys
import gi

gi.require_version('Gtk', '3.0')
from gi.repository import Gio
from gi.repository import Gtk

class App(Gtk.Application):
    def __init__(self):
        Gtk.Application.__init__(self,
                                 application_id="org.gnome.example",
                                 flags=Gio.ApplicationFlags.FLAGS_NONE)

    def do_activate(self):
        window = Gtk.ApplicationWindow(application=self)
        window.show()

if __name__ == '__main__':
    app = App()
    app.run(sys.argv)
```