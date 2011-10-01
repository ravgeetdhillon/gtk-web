<?php
$nav = "download";
$title = "GTK+ Download: Mac OS X";
ob_start();
?>

<h2><a name="Download">Download for Mac OS X</a></h2>
<p>Do you have a favorite GTK+  application that you'd like to
run on your Mac, but you don't really like X-Windows, MacPorts, or
Fink? Maybe you'd like to have a more Mac-like look and feel, with the
menus up on the menu bar and standard Mac keyboard shortcuts like
Command-Q?
</p>

<p>
Or do you  maintain a GTK+ application and want to
expand your user base to Mac users who want a Mac experience, not a
transplanted Unix experience?
</p>

<p> <strong>GTK-OSX</strong> can help. </p>

<a href="http://live.gnome.org/GTK%2B/OSX/Building">Build</a>: With <a
href="https://live.gnome.org/Jhbuild">jhbuild</a> and GTK-OSX's
modulesets, you can build your application and all of its dependent
libraries with a single command.  </p>

<p> <strong>Integrate</strong>: Gtk's <a
href="http://live.gnome.org/GTK%2B/OSX">Quartz Backend</a> provides
the connection between your application and the Mac's display, mouse,
and keyboard. <a
href="http://live.gnome.org/GTK%2B/OSX/Integration">Gtk-mac-integration</a>
extends the integration with functions to integrate your Application's
menus with the Mac Menubar, manipulate the app's dock tile, receive
"open" events from Finder, and find resources in your bundle.  </p>

<p>
<a href="http://live.gnome.org/GTK%2B/OSX/Bundling">Bundle</a>:
GTK-OSX's gtk-mac-bundler is an easily configured python program which
creates an application bundle for you and populates it with your
application executable and all of the dependent libraries from your
GTK+ build, changing the installed names as needed to point inside the
bundle.
</p>

<h3>Getting Started</h3>

<p>Make sure that your system meets the <a
href="http://live.gnome.org/GTK%2B/OSX/Building#Prerequisites">Prerequisites</a>
then download and run the <a
href="http://git.gnome.org/browse/gtk-osx/plain/gtk-osx-build-setup.sh">
installation script</a>. If your application already has a module,
everything you need to build your application is handled by
jhbuild. The <a
href="http://live.gnome.org/GTK%2B/OSX/Building">Build</a> page has
detailed instructions.  </p>

<h3>Success Stories</h3>

<p> Some of the projects which have used Gtk-OSX to provide MacOSX
users with a native installation have <a
href="http://live.gnome.org/GTK%2B/OSX/PortedApps">shared the
news</a>.</p> <p>

<h3>Mailing lists and Web Forum</h3>

<p>Support for building, bundling, and the Gtk-mac-integration library
is provided by a <a
href="http://mail.gnome.org/mailman/listinfo/gtk-osx-users-list">mailing
list</a> and a <a
href="http://sourceforge.net/apps/phpbb/gtk-osx/">forum</a>. Contributers
may wish to subscribe to the <a
href="http://mail.gnome.org/mailman/listinfo/gtk-osx-devel-list">developer's
mailing list</a> as well.</p>

<p>Bugs, patches and enhancements may be submitted to our <a
href="http://sourceforge.net/apps/trac/gtk-osx/newticket">tracker</a>.
</p>



<?php require '../template.php';
