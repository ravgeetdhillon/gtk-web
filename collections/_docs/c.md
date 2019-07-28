---
permalink: /docs/language-bindings/:name/
---
# C and GTK

```c
#include <gtk/gtk.h>

static void
activate (GApplication *app,
          gpointer      user_data)
{
  GtkWidget *widget;

  widget = gtk_application_window_new (GTK_APPLICATION (app));
  gtk_widget_show (widget);
}

int
main (int argc, char **argv)
{
  GtkApplication *app;
  int status;

  app = gtk_application_new ("org.gnome.example", G_APPLICATION_FLAGS_NONE);
  g_signal_connect (app, "activate", G_CALLBACK (activate), NULL);
  status = g_application_run (G_APPLICATION (app), argc, argv);
  g_object_unref (app);

  return status;
}
```