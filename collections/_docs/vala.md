---
permalink: /docs/language-bindings/:name/
---
# GTK and Vala

```vala
class ExampleApp : Gtk.Application {
  protected override void activate () {
    var window = new Gtk.ApplicationWindow (this);
    window.show ();
  }

  public ExampleApp () {
    Object (application_id: "org.gnome.example");
  }
}

int main (string[] args) {
  return new ExampleApp ().run (args);
}
```