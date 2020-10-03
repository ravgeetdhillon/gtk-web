---
---

# Language Bindings

GTK is written using the [C programming
language](https://en.m.wikipedia.org/wiki/C_(programming_language)), but its
also available to various programming languages through *language bindings*,
which allow writing GTK applications in the style of those languages.
Language bindings are relatively easy to create because GTK is designed with
them in mind.

There are various, maintained language bindings available for GTK:

Language | v3 | v4
--- | :---: | :---:
<a href="https://www.gtkmm.org/en/index.html">C++</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>
<a href="https://gtkd.org/">D</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>
<a href="https://github.com/gotk3/gotk3">Go</a> | <i class="far fa-check-circle"></i> | <i class="fas fa-minus-circle"></i>
<a href="https://gitlab.gnome.org/GNOME/gjs/blob/master/doc/Home.md">JavaScript</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>
<a href="http://gtk2-perl.sourceforge.net/">Perl</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>
<a href="https://pygobject.readthedocs.io/en/latest/">Python</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>
<a href="https://gtk-rs.org">Rust</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>
<a href="https://valadoc.org/">Vala</a> | <i class="far fa-check-circle"></i> | <i class="far fa-check-circle"></i>

## Introspection

GTK generates a complete, machine readable description of its API as part of
its build; the introspection data is available both as an XML file and as a
binary format that can be loaded using a shared library. The introspection
data is commonly used to write the language bindings in the list above.

For more information on the introspection data, you can read [the GObject
Introspection documentation](https://gi.readthedocs.io/en/latest/).
