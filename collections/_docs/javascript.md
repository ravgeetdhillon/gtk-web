---
permalink: /docs/language-bindings/:name/
---
# GTK and Javascript

```javascript
const Gio = imports.gi.Gio;
const Gtk = imports.gi.Gtk;
const Lang = imports.lang;

const ExampleApp = Lang.Class({
    Name: 'ExampleApp',
    Extends: Gtk.Application,

    _init: function() {
        this.parent({ application_id: 'org.gnome.example',
                      flags: Gio.ApplicationFlags.FLAGS_NONE, });
    },

    vfunc_activate: function() {
        let w = new Gtk.ApplicationWindow({ application: this });
        w.show();
    },
});

let app = new ExampleApp();
app.run(ARGV);
```