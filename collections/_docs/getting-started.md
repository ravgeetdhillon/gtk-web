---
permalink: /docs/:name/
---

## Getting Started with GTK

GTK is a [widget toolkit](https://en.wikipedia.org/wiki/Widget_toolkit).
Each user interface created by GTK consists of UI elements known as *widgets*.

The GTK programming interface is based on [Object
Orientation](https://en.wikipedia.org/wiki/Object-oriented_design); widgets
are organized in a *hierarchy* of classes—for instance, the window widget is
also a specialised container, called a "bin", that can hold at most one child
widget. A window will be able to use functions that pertain to the widget,
container, bin, and window classes.

Each user interface is built by adding buttons, text labels, input fields,
drop down menus, and other widgets to a window.

If you are creating complex user interfaces, it is recommended to describe
the structure of your window using the [GtkBuilder][builder] XML description
format, instead of assembling it manually. You can also use a visual UI
editor that will generate the XML for you, like [Glade][glade].

GTK is [event-driven](https://en.wikipedia.org/wiki/Event-driven_programming).
The toolkit listens for events such as a pointer click on a button, or a
window resize, and notifies the widgets in your application.

Follow the ["Hello World"](https://www.gtk.org/docs/getting-started/hello-world/)
to learn how to write your first GTK application.

Use the [GTK API reference](https://developer.gnome.org/gtk3/stable) to
learn more about the functionality provided by GTK.

[builder]: https://developer.gnome.org/gtk3/stable/GtkBuilder.html
[glade]: https://glade.gnome.org
