---
---

# Scheme

There are numerous implementations of Scheme and just as many language bindings
for them -- sometimes even multiple ones per implementation.
This list is by no means exhaustive.

## GNU Guile

There are currently two actively maintained projects to provide GObject language bindings for GNU Guile.

Bindings | Latest version | Guile 2.2 | Guile 3.0
--- | :---: | :---: | :---:
<a href="http://savannah.gnu.org/projects/g-golf">G-Golf</a> | N/A | <i class="far fa-check-circle"></i> | <i class="fas fa-minus-circle"></i>
<a href="https://github.com/spk121/guile-gi">Guile-GI</a> | 0.3 | <i class="far fa-check-circle"></i> | <i class="fas fa-check-circle"></i>

### G-Golf

#### About

G-Golf (Gnome: (Guile Object Library for)) is a library for developing modern applications in Guile Scheme.
It comprises a direct binding to the GObject Introspection API and higher-level functionality for importing
Gnome libraries and making GObject classes (and methods) available in Guile's object-oriented programming system, GOOPS.

G-Golf does not yet have a release, but development builds can be made from its [Git repository](http://git.savannah.gnu.org/cgit/g-golf.git).

#### Hello world

```scheme
;; Load Gtk
(use-modules (g-golf))
(gi-import "Gtk")

;; When the application is launched..
(define (activate app)
  ;; - Create a new window and a new button
  (let ((window (make <gtk-application-window> #:application app))
        (button (make <gtk-button> #:label "Hello, World!")))
    ;; - Which closes the window when clicked
    (connect button 'clicked (lambda (b) (close window)))
    (add window button)
    (show-all window)))

;; Create a new application
(let ((app (make <gtk-application> #:application-id "com.example.GtkApplication")))
  (connect app 'activate activate)
  ;; Run the application
  (run app 0 '()))
```

#### See More

* Savannah Project Page: [http://savannah.gnu.org/projects/g-golf](http://savannah.gnu.org/projects/g-golf)
* G-Golf Website: [https://www.gnu.org/software/g-golf/](https://www.gnu.org/software/g-golf/)
* G-Golf Reference Manual: [https://www.gnu.org/software/g-golf/learn.html](https://www.gnu.org/software/g-golf/learn.html)

### Guile-GI

#### About

Guile-GI is a library for GNU Guile to generate a Scheme API from GObject Introspection information.
It consists of a shared library containing glue code to interface with GObject and generate bindings,
and Guile modules to export said bindings in a structured manner.

#### Hello world

```scheme
(use-modules (gi))

(use-typelibs (("Gio" "2.0") #:select (activate run))
              ("Gtk" "3.0"))

;; This is the callback we install to handle the `activate'
;; signal that a <GApplication> may receive.
(define (on-activation app)
  ;; Create a <GtkApplicationWindow> for this
  ;; <GtkApplication>, plus a button.
  (let ((window (make <GtkApplicationWindow> #:application app))
        (button (make <GtkButton> #:label "Hello World")))
    ;; Register a lambda as the signal handler of the
    ;; <GtkButton>'s `clicked' signal.
    (connect button clicked (lambda (b) (close window)))
    (add window button)
    (show-all window)))

;; Create a new <GtkApplication>
(let ((app (make <GtkApplication> #:application-id "com.example.GtkApplication")))
  ;; Register the procedure `on-activation' as the
  ;; signal handler for the `activate' signal that the
  ;; <GtkApplication> handles.
  (connect app activate on-activation)
  ;; Call application:run.
  (run app '()))
```

#### See More

* Github Project: [https://github.com/spk121/guile-gi](https://github.com/spk121/guile-gi)
* Documentation: [https://spk121.github.io/guile-gi](https://spk121.github.io/guile-gi)