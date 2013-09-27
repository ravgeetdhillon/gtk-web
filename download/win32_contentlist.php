<?php
$nav = "tutorial";
$title = "GTK+ Bundle content list and description";
ob_start();
?>
<h2><a name="ContentListDesc">GTK+ Bundle content list and description</a></h2>

<h3><a name="ContentListHowTo">How to use this list</a></h3>

<ul>
 <li>
  <p>To distribute a minimal GTK+3 program, ship the DLLs marked as <strong>Required</strong> above.</p>
 </li>

 <li>
  <p>To distribute a GTK+3 program using .SVG images, ship the DLLs marked with <strong><font color="red">SVG support</font></strong> above, including the "<strong>lib\gdk-pixbuf-2.0</strong>" folder under the root.</p>
 </li>
</ul>

<h3><a name="ContentList">Content list</a></h3>

<h4>/bin</h4>
<ul>
 <li> libatk-1.0-0.dll : Accessibility Toolkit runtime. Interface used by accessibility functions like high-contrast visual themes and keyboard modifiers. <strong>Required.</strong> </li>
 <li> libcairo-2.dll : Cairo runtime. Used internally by GDK-Pixbuf to draw surfaces. <strong>Required.</strong> </li>
 <li> libcairo-gobject-2.dll : Cairo GObject binding runtime. <strong>Required.</strong> </li>
 <li> libcairo-script-interpreter-2.dll : Script interpreter for Cairo. </li>
 <li> libcroco-0.6-3.dll : CSS2 Parsing library runtime. <strong><font color="red">SVG support.</font></strong> </li>
 <li> libffi-6.dll : LibFFI runtime. Bridge between interpreted and compiled code. <strong>Required.</strong> </li>
 <li> libfontconfig-1.dll : Fontconfig runtime. Font sets detection. </li>
 <li> libfreetype-6.dll : FreeType runtime. Portable font engine. <strong>Required.</strong> </li>
 <li> libgailutil-3-0.dll : GTK+ Accessibility Implementation Library Utilities runtime. </li>
 <li> libgdk_pixbuf-2.0-0.dll : GDK-Pixbuf runtime. Image loading and pixel buffer manipulation. <strong>Required.</strong> </li>
 <li> libgdk-3-0.dll : GDK runtime. GIMP Drawing Kit. Wraps low-level drawing and windowing functions used by each supported platform for use by GTK+. Each platform is designated as a "backend". <strong>Required.</strong> </li>
 <li> libgio-2.0-0.dll : GIO runtime. Filesystem operations abstraction layer for GLib. <strong>Required.</strong> </li>
 <li> libglib-2.0-0.dll : GLib runtime. General-use functions acting as an abstraction layer between the software and the underlying OS. <strong>Required.</strong> </li>
 <li> libgmodule-2.0-0.dll : GModule runtime. Provides GLib with dynamic module loading. <strong>Required.</strong> </li>
 <li> libgobject-2.0-0.dll : GObject runtime. Provides GLib with OOP functions. <strong>Required.</strong> </li>
 <li> libgthread-2.0-0.dll : GThread runtime. Provides GLib with thread management. </li>
 <li> libgtk-3-0.dll : GTK+3 runtime. GIMP Toolkit. <strong>Required.</strong> </li>
 <li> libiconv-2.dll : Iconv runtime. Text conversion between Unicode and traditional encoding. <strong>Required.</strong> </li>
 <li> libintl-8.dll : Gettext Internationalization runtime. Allons on-the-fly translation of text using locale files. <strong>Required.</strong> </li>
 <li> libjpasper-1.dll : JPEG-2000 runtime. Renders JPEG-2000 images. </li>
 <li> libjpeg-9.dll : LibJPEG runtime. Renders classic JPEG images. </li>
 <li> liblzma-5.dll : LibLZMA runtime. LZMA and XZ compression support. <strong><font color="red">SVG support.</font></strong> </li>
 <li> libpango-1.0-0.dll : Pango runtime. Internationalized text rendering. <strong>Required.</strong> </li>
 <li> libpangocairo-1.0-0.dll : Pango Cairo runtime. Render text onto Cairo surfaces. <strong>Required.</strong> </li>
 <li> libpangoft2-1.0-0.dll : Pango FreeType runtime. </li>
 <li> libpangowin32-1.0-0.dll : Pango Win32 runtime . <strong>Required.</strong> </li>
 <li> libpixman-1-0.dll : Pixman runtime. Required by Cairo. <strong>Required.</strong> </li>
 <li> libpng15-15.dll : LibPNG runtime. Renders PNG images. <strong>Required.</strong> </li>
 <li> librsvg-2-2.dll : SVG runtime. Renders SVG images. <strong><font color="red">SVG support.</font></strong> </li>
 <li> libxml2-2.dll : XML parser library runtime. <strong>Required</strong> </li>
 <li> pthreadGC2.dll : POSIX threads runtime. Multithreading support. <strong>Required.</strong> </li>
 <li> zlib1.dll : zlib runtime. GZIP compression support. <strong>Required.</strong> </li>
</ul>

<h4>/etc</h4>
<ul>
 <li> /gtk-3.0/settings.ini : applications-wide settings. </li>
 <li> * : miscellaneous files. </li>
</ul>

<h4>/include</h4>
<ul>
 <li> Header files, only needed for development. </li>
</ul>

<h4>/lib</h4>
<ul>
 <li> /gdk-pixbuf-2.0 : GDK-Pixbuf modules. <strong><font color="red">SVG support.</font></strong> </li>
 <li> /gtk-3.0 : GTK+-IM modules. </li>
 <li> /pango : Pango modules. </li>
 <li> * : import libraries, headers, pkg-config files... only needed for development. </li>
</ul>

<h4>/share</h4>
<ul>
 <li> /doc : license and copyleft. </li>
 <li> /gtk-3.0 : resource files for <i>gtk3-demo</i> program.</li>
 <li> /gtk-doc : documentation in HTML format. </li>
 <li> /icons : icon themes, used by <i>gtk3-demo</i> and <i>gtk3-widget-factory</i>. </li>
 <li> /locale : localization files. <strong><font color="green"> Internationalized text support.</font> Required.</strong> </li>
 <li> /themes : graphical themes. </li>
 <li> * : miscellaneous files. </li>
</ul>

<?php require '../template.php';
