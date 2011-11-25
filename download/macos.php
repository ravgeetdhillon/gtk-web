<?php
$nav = "download";
$title = "GTK+ Download: Mac OS X";
ob_start();
?>

<h2><a name="Download">Download for Mac OS X</a></h2>

<h3>About</h3>
<p>Do you have a favorite GTK+ application that you'd like to
run on your Mac with a more Mac-like look and feel, with the
menus up on the menu bar and standard Mac keyboard shortcuts like
Command-Q? Perhaps you maintain a GTK+ application and want to
expand your user base to Mac users who want a Mac experience, not a
transplanted Unix experience?
</p>

<h3>Features</h3>
<p>Linking with GTK+'s <a
href="http://live.gnome.org/GTK%2B/OSX">Quartz backend</a> connects your application to the Mac's native display manager, keyboard, and pointing device. With a little extra code and <a
href="http://live.gnome.org/GTK%2B/OSX/Integration">gtk-mac-integration</a> you can:
<ul>

<li>Integrate the Application's menus with the Mac Menubar</li>
<li>Manipulate your application's dock tile</li>
<li>Receive <q>open</q> events from Finder</li>
<li>Find resources in your application bundle</li>
</ul>
</p>

<h3>Requirements</h3>
<p>There are a number of requirements that need to be met by your
system before you can build for OSX. These are updated from time to
time and kept on the  <a
href="http://live.gnome.org/GTK%2B/OSX/Building#Prerequisites">live wiki</a>.</p>

<h3>Building</h3>
<p><a href="http://live.gnome.org/GTK%2B/OSX/Building">Building</a> with <a
href="https://live.gnome.org/Jhbuild">jhbuild</a> and the GTK-OSX
modulesets, you can build your application and all of its dependent
libraries with a single command.</p>

<h3>All-in-one bundles</h3>
<p><a href="http://live.gnome.org/GTK%2B/OSX/Bundling">Bundling</a>
with the <strong>gtk-mac-bundler</strong>, an easily configured python
program which creates an application bundle for you and populates it
with your application executable and all of the dependent libraries
from your GTK+ build, changing the installed names as needed to point
inside the bundle.</p>

<h3>Getting Started</h3>
<p>First, make sure that your system meets the requirements as
mentioned above, then download and run the <a
href="http://git.gnome.org/browse/gtk-osx/plain/gtk-osx-build-setup.sh">
installation script</a> (gtk-osx-build-setup.sh). If your application
already has a module, everything you need to build your application is
handled by jhbuild. The <a
href="http://live.gnome.org/GTK%2B/OSX/Building">build</a> page has
detailed instructions.</p>

<h3>Success Stories</h3>
<p>Some of the projects which have used GTK+ on Mac OS X have <a
href="http://live.gnome.org/GTK%2B/OSX/PortedApps">shared their
experiences</a> for all to see. If you have any feedback you would
like to give about your experiences here, please contact us on the
the users mailing list as mentioned below.</p>

<h3>Mailing lists &amp; web forum</h3>
<p>Support for building, bundling, and the integration library
is provided by a <a
href="http://mail.gnome.org/mailman/listinfo/gtk-osx-users-list">mailing
list</a> and a <a
href="http://sourceforge.net/apps/phpbb/gtk-osx/">forum</a>. Contributers
may wish to subscribe to the <a
href="http://mail.gnome.org/mailman/listinfo/gtk-osx-devel-list">developer's
mailing list</a> as well.</p>

<h3>Contributing</h3> <p>Bugs, patches and enhancements for building,
integration, or bundling may be submitted to
 <a href="https://bugzilla.gnome.org/enter_bug.cgi?alias=&blocked=&bug_severity=normal&cf_gnome_version=---&comment=&component=mac-integration&contenttypeentry=&contenttypemethod=autodetect&contenttypeselection=text%2Fplain&data=&dependson=&description=&form_name=enter_bug&keywords=&maketemplate=Remember%20values%20as%20bookmarkable%20template&op_sys=Mac%20OS&product=gtk%2B&short_desc=&version=unspecified">Bugzilla, with Product=gtk+ and Component=mac-integration</a>. Bug reports on any other package, including GTK+ itself, should be submitted against that package, not mac-integration. (The GTK+ component for the quartz backend is "quartz".)
<?php require '../template.php';
