---
---

# GTK and C++

## About

[**gtkmm**](https://www.gtkmm.org/) is the official C++ interface for GTK.
Highlights include typesafe callbacks, and a comprehensive set of widgets
that are easily extensible via inheritance. You can create user interfaces
either in code or with the [Glade User Interface
designer](http://glade.gnome.org/), using `Gtk::Builder`. There's [extensive
documentation](https://www.gtkmm.org/en/documentation.shtml), including API
reference and a tutorial.

gtkmm is free software distributed under the GNU Library General Public
License (LGPL).

## Releases

gtkmm follows the official GNOME Platform Bindings release schedule. This
guarantees API/ABI-stability and new releases on a predictable schedule,
delivering C++ API for the underlying GTK+ and GNOME APIs as soon as
possible.

## Documentation

There is an official [gtkmm API
Documentation](https://www.gtkmm.org/en/documentation.html) for using GTK
and C++ together provided on the gtkmm website.

## A Hello World app

```cpp
// File: helloworld.h

#ifndef GTKMM_EXAMPLE_HELLOWORLD_H
#define GTKMM_EXAMPLE_HELLOWORLD_H

#include <gtkmm/button.h>
#include <gtkmm/window.h>

class HelloWorld : public Gtk::Window
{

public:
  HelloWorld();
  virtual ~HelloWorld();

protected:
  //Signal handlers:
  void on_button_clicked();

  //Member widgets:
  Gtk::Button m_button;
};

#endif
```

```cpp
// File: helloworld.cc

#include "helloworld.h"
#include <iostream>

HelloWorld::HelloWorld()
: m_button("Hello World")   // creates a new button with label "Hello World".
{
  // Sets the border width of the window.
  set_border_width(10);

  // When the button receives the "clicked" signal, it will call the
  // on_button_clicked() method defined below.
  m_button.signal_clicked().connect(sigc::mem_fun(*this,
              &HelloWorld::on_button_clicked));

  // This packs the button into the Window (a container).
  add(m_button);

  // The final step is to display this newly created widget...
  m_button.show();
}

HelloWorld::~HelloWorld()
{
}

void HelloWorld::on_button_clicked()
{
  std::cout << "Hello World" << std::endl;
}
```

```cpp
// File: main.cc

#include "helloworld.h"
#include <gtkmm/application.h>

int main (int argc, char *argv[])
{
  auto app = Gtk::Application::create(argc, argv, "org.gtkmm.example");

  HelloWorld helloworld;

  //Shows the window and returns when it is closed.
  return app->run(helloworld);
}
```

### Output

After compiling and run the above code and you should see get the below given output:

![gtkmm output for a hello world application](/assets/img/docs/docs-cpp-helloworld.png)

### Explanation

This code depicts how to use GTK C++ binding for creating a simple Hello
World application. A more detailed explanation of the above code can be
checked out
[here](https://developer.gnome.org/gtkmm-tutorial/stable/sec-helloworld.html.en).

## Tutorials

You can find various useful tutorials regarding gtkmm from this
[source](https://developer.gnome.org/gtkmm-tutorial/stable/index.html).

## Contribute

If you are interested in contributing to the gtkmm binding project, you can
get a head start by reading the instructions on how to get started for
contributing to gtkmm [here](https://www.gtkmm.org/en/developers.html).

If you want to get in touch with the original source files, you can visit
the project's [git repository](https://gitlab.gnome.org/GNOME/gtkmm/) on
Gitlab.

## See More

- Project: [https://gitlab.gnome.org/GNOME/gtkmm/](https://gitlab.gnome.org/GNOME/gtkmm/)
- Docs: [https://www.gtkmm.org/en/documentation.html](https://www.gtkmm.org/en/documentation.html)
- Tutorial: [https://developer.gnome.org/gtkmm-tutorial/stable/index.html](https://developer.gnome.org/gtkmm-tutorial/stable/index.html)
