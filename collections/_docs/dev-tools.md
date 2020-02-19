---
permalink: /docs/:name/
---

# Using GTK

To compile a GTK application, you need to tell the compiler where to find
the GTK header files and libraries. This is done with the
[`pkg-config`](https://www.freedesktop.org/wiki/Software/pkg-config/)
utility.

The following interactive shell session demonstrates how `pkg-config` is used
(the actual output on your system may be different):

```sh
$ pkg-config --cflags gtk+-3.0
 -pthread -I/usr/include/gtk-3.0 
 -I/usr/lib64/gtk-3.0/include
 -I/usr/include/atk-1.0
 -I/usr/include/cairo
 -I/usr/include/pango-1.0
 -I/usr/include/glib-2.0
 -I/usr/lib64/glib-2.0/include
 -I/usr/include/pixman-1
 -I/usr/include/freetype2
 -I/usr/include/libpng12
$ pkg-config --libs gtk+-3.0
 -pthread
 -lgtk-3
 -lgdk-3
 -latk-1.0
 -lgio-2.0
 -lpangoft2-1.0
 -lgdk_pixbuf-2.0
 -lpangocairo-1.0
 -lcairo
 -lpango-1.0
 -lfreetype
 -lfontconfig
 -lgobject-2.0
 -lgmodule-2.0
 -lgthread-2.0
 -lrt
 -lglib-2.0
```

The simplest way to compile a program is to use the "backticks" feature of
the shell. If you enclose a command in backticks (not single quotes), then
its output will be substituted into the command line before execution. So to
compile a GTK "Hello, World" application, you would type the following:

```sh
$ cc `pkg-config --cflags gtk+-3.0` hello.c -o hello `pkg-config --libs gtk+-3.0`
```

# Development environments

You can use various integrated development environments to write your GTK
applications, as well as contributing to GTK.
