<?php
$nav = "tutorial";
$title = "GTK+ installation and usage tutorial: Windows";
ob_start();
?>
<h2><a name="Tutorial">Installation and usage tutorial for Windows</a></h2>

<h3><a name="Releasing">Releasing your program</a></h3>
<p>You should always ship all needed DLLs & files with your binaries. End-users should not be required to download the bundle themselves.</p>

<h3><a name="Requirements">Requirements</a></h3>
<p>GTK+3 is known to work on Windows XP, Vista, 7 and 8 at this date.</p>
<p>Developers might want to have a working <a href="http://www.mingw.org">MinGW</a> or MSVC installation.</p>

<h3><a name="Setup">Initial setup</a></h3>

<ol>
 <li>
  <p>Download the latest <a href="http://win32builder.gnome.org/gtk+-bundle_3.6.4-20130921_win32.zip">all-in-one bundle</a> and extract it using right-click -> "Extract All...".
  Choose a location at your will ; we will call it <strong>%GTKDIR%</strong> during next phases.</p>
  <p><a href="../images/screenshots/screenshot-tutorial-01.png" class="image"><img src="../images/screenshots/screenshot-tutorial-01.png" /></a></p>
 </li>

 <li>
  <p>
  Add <strong>%GTKDIR%\bin</strong> to your PATH environment variable :
  <ul>
   <li>Windows XP : right-click on "My Computer" -> "Properties".</li>
   <li>Windows Vista/7 : right-click on "Computer" -> "Properties" -> "Advanced system settings".</li>
  </ul>
  </p>
  <p>Click on "Advanced tab" -> "Environment variables". Double-click on <strong>PATH</strong> line in "System variables" panel, and add <strong>;%GTKDIR%\bin</strong> at the end of the text.</p>
  <p><a href="../images/screenshots/screenshot-tutorial-02.png" class="image"><img src="../images/screenshots/screenshot-tutorial-02.png" /></a></p>
  <p><a href="../images/screenshots/screenshot-tutorial-02a.png" class="image"><img src="../images/screenshots/screenshot-tutorial-02a.png" /></a></p>
 </li>

 <li>
 <p> 
  Optionally, open a console (<i>Start -> Run -> "cmd"</i> or <i>Start -> search for "cmd"</i>) and type the following commands :
  <ul><strong>
   <li>pango-querymodules > %GTKDIR%\etc\pango\pango.modules</li>
   <li>gdk-pixbuf-query-loaders > %GTKDIR%\lib\gdk-pixbuf-2.0\2.10.0\loaders.cache</li>
   <li>gtk-query-immodules-3.0 > %GTKDIR%\lib\gtk-3.0\3.0.0\immodules.cache</li>
  </strong></ul>
 </p>
 </li>

 <li>
  <p>Let's test ! Still in a console or in the "Run" window, run the demo : <strong>gtk3-demo</strong></p>
  <p><a href="../images/screenshots/screenshot-tutorial-03.png" class="image"><img src="../images/screenshots/screenshot-tutorial-03.png" /></a></p>
 </li>
</ol>


<h3><a name="Developing">Developing with GTK+3</a></h3>

<h4>MinGW</h4>
<p>You should have a working installation, i.e. "gcc.exe" already in your PATH.</p>

<ol>
 <li>
  <p>In the console, verify that "pkg-config" prints out something reasonable by typing :</p>
  <p><strong>pkg-config --cflags --libs gtk+-3.0</strong></p>
  <p><a href="../images/screenshots/screenshot-tutorial-04.png" class="image"><img src="../images/screenshots/screenshot-tutorial-04.png" /></a></p>
 </li>

 <li>
  <p>Use this output in your further compilation commands, like this one :</p>
  <p><strong>gcc -o gtk3.exe gtk3.c -mms-bitfields -Ic:/gtk3/include/gtk-3.0 -Ic:/gtk3/include/atk-1.0 -Ic:/gtk3/include/cairo</strong> [...]</p>
  <p><a href="../images/screenshots/screenshot-tutorial-04a.png" class="image"><img src="../images/screenshots/screenshot-tutorial-04a.png" /></a></p>
 </li>

 <li>
  <p>Test the resulting executable (here <strong>gtk3.exe</strong>) :</p>
  <p><a href="../images/screenshots/screenshot-tutorial-04b.png" class="image"><img src="../images/screenshots/screenshot-tutorial-04b.png" /></a></p>
 </li>
</ol>

<h4>MSVC</h4>

<ol>
 <li>
  <p>Open the Visual Studio Command Prompt :</p>
  <p><a href="../images/screenshots/screenshot-tutorial-05.png" class="image"><img src="../images/screenshots/screenshot-tutorial-05.png" /></a></p>
 </li>

 <li>
  <p>In the console, verify that "pkg-config" prints out something reasonable by typing :</p>
  <p><strong>pkg-config --cflags gtk+-3.0</strong></p>
  <p><a href="../images/screenshots/screenshot-tutorial-05a.png" class="image"><img src="../images/screenshots/screenshot-tutorial-05a.png" /></a></p>
 </li>

 <li>
  <p>Use this output in your further compilation commands, like this one, modifying the following : <br />
  <ul>
   <li>delete the "<i>-mms-bitfields</i>" switch ;</li>
   <li>add the "<i>-Dinline= /link /libpath:%GTKDIR% gtk-win32-3.0.lib gobject-2.0.lib</i>" switches at the end.</li>
  </ul>
  </p>
  For instance :
  <p><strong>cl gtk3.c -mms-bitfields -Ic:/gtk3/include/gtk-3.0 -Ic:/gtk3/include/atk-1.0</strong> [...] <strong>-Dinline= /link /libpath:c:/gtk3/lib gtk-win32-3.0.lib gobject-2.0.lib</strong></p>
  <p><a href="../images/screenshots/screenshot-tutorial-05b.png" class="image"><img src="../images/screenshots/screenshot-tutorial-05b.png" /></a></p>
  <p><i>("gtk-win32-3.0.lib gobject-2.0.lib" are a minimal requirement. You may want to add other .lib files as you need them)</i></p>
 </li>

 <li>
  <p>Test the resulting executable (here <strong>gtk3.exe</strong>) :</p>
  <p><a href="../images/screenshots/screenshot-tutorial-04b.png" class="image"><img src="../images/screenshots/screenshot-tutorial-04b.png" /></a></p>
 </li>



<?php require '../template.php';
