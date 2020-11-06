---
---

# Scheme

There are numerous implementations of Scheme and just as many language bindings
for them -- sometimes even multiple ones per implementation.
This list is by no means exhaustive.

## GNU Guile

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
