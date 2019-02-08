<?php
$nav = "about";
$title = "GTK Success Stories";
ob_start();
?>
<h2>Developers</h2>
<p>GTK, the development toolkit for the GNOME desktop and the GIMP image editor, is the choice of thousands of developers worldwide. Developers choose GTK for a variety of reasons, from the community that surrounds it to the free-of-charge LGPL licensing it offers. For many, the internationalization support is essential; for others, performance is the most important factor. Some prefer it because they program in C, and others because they program in C++, or Python, or C#. Regardless of the reasons, GTK is the finest development toolkit worldwide. This page presents some of the developers who use GTK and the reasons they like it.</p>

<h2>Platforms</h2>

<div class="columns">
	<div class="left">
		<h3><a href="http://www.maemo.org" class="external"><img src="images/commerce/platforms/maemo.png" alt="Maemo" /></a></h3>
		<p>The Maemo platform has been developed for over 2 years now and is the basis for Nokia's N770, N800, and N900 products which have been highly successful.</p>
	</div>
	<div class="right">
		<h3><a href="http://www.gnome.org" class="external"><img src="images/commerce/platforms/gnome.png" alt="GNOME" /></a></h3>
		<p>The GNOME platform has been developed since 1997 and is used by many people expecting the high grade, clean look and feel for their every day desktop. GNOME delivers that with the power of GTK sitting underneath the software stack written on top of it.</p>
</div>
</div>

<h2>Applications</h2>

<div class="columns bubbles">

	<div class="left">

		<div class="bubble"><!-- div -->
			<h3>TouchTunes Music</h3>
			<p><a href="http://touchtunes.com/" class="external">TouchTunes Music</a> Corporation sells over a thousand digital jukeboxes a year, each with a GTK interface and glib-driven internals. Developer Tristan Van Berkom writes that he prefers GTK because <q>I consider myself a perfectionist</q> and that, examining the source, he often says <q>I couldn't have done it better myself</q>.</p>
		</div>

		<div class="bubble"><!-- div -->
			<h3>Solvo Ltd</h3>
			<p>Andrew Makeev, from Solvo, Ltd. of St. Petersburg, Russia, develops warehouse management systems using C++ and gtkmm. He cites several factors in his company's choice of GTK as a development toolkit, especially performance and internationalization. He appreciates the extensive documentation, direct access to the development community, and the straightforward object model.</p>
		</div>

		<div class="bubble"><!-- div -->
			<h3>NorayBio</h3>
			<p>Miguel Pignatelli, a senior scientist at the Bilbao, Spain bioinformatics company <a href="http://www.noraybio.com/" class="external">NorayBio</a>, uses GTK in the development of software that predicts protein folding patterns. Although they initially selected GTK because they were writing in C, the NorayBio developers have grown to appreciate the way that provides access to both high and low levels of graphical programming and inter-process communications.</p>
		</div>

		<div class="bubble"><!-- div -->
			<h3>London National Gallery</h3>
			<p>The <a href="http://www.nationalgallery.org.uk/" class="external">London National Gallery</a> uses GTK for its image-processing system, <a href="http://www.vips.ecs.soton.ac.uk/" class="external">VIPS</a>. VIPS is in use on Windows and Linux systems as part of the <a href="http://www.ecs.soton.ac.uk/~km/projs/vasari/" class="external">Vasari</a> image archiving project, cataloging and storing extremely high resolution digital images of art work for museums worldwide. Developer John Cupitt says that the Gallery's reasons for choosing GTK were portability, support, and appearance.</p>
		</div>

		<div class="bubble"><!-- div -->
			<h3>University of Ljubljana</h3>
			<p>Andrej Prsa, research scientist in the Physics department at the University of Ljubljana, is using GTK in his work on <a href="http://www.fiz.uni-lj.si/phoebe" class="external">eclipse patterns in binary star systems</a>. He chose GTK for its licensing and because of the ubiquity of Linux software in astrophysics.</p>
		</div>

	</div>
	<div class="right">

		<div class="bubble"><!-- div -->
			<h3>SendOutCards</h3>
			<p>Developers at <a href="http://sendoutcards.com/" class="external">sendoutcards.com</a> use GTK and gtkmm to develop internal applications that allow end users to perform specialized technical tasks easily. Developer Adam Olsen says he selected GTK for its licensing and its cross-platform portability. Additional features he appreciates are the ease of development: with libglade, he says, <q>I really like that I can tweak the interface without having to recompile</q>.</p>
		</div>

		<div class="bubble"><!-- div -->
			<h3>Linux Audio Systems</h3>
			<p><a href="http://linuxaudiosystems.com/" class="external">Linux Audio Systems</a>, a small music and pro-audio software company, uses GTK for all of its GUI-based software. Linux Audio Systems programs in C++, and was attracted by the way that the gtkmm wrappers use standard C++ and the Standard Template Library. They also appreciate the availability of a model/view/controller structure in GTK. The canvas, in particular, has been crucial in their work, and has been extended for the main GUI object in the Ardour digital audio workstation. Developer Paul Davis says <q>the ease of new widget creation with gtkmm and the simplicity of creating new Canvas items have been highlights for us</q>. In addition, <q>the presence of a very helpful and knowledgeable user community on the GTK mailing lists has been another very useful feature of the toolkit for us</q>. Finally, GTK offered a better cost structure: the choice of the LGPL means that Linux Audio Systems has no licensing fees to pay for the toolkit.</p>
		</div>

		<div class="bubble"><!-- div -->
			<h3>BMA Coal, Australia</h3>
			<p>Kim Adil, at BMA Coal in Australia, used GTK to build a cross-platform mining process visualization tool for the mine control room. Developed on Linux and deployed on Windows 2000, the application displays near-real-time equipment location and status for the mine's heavy equipment. It has been so successful that it runs not only in the control room, but on a plasma display at the entrance to the BMA office. BMA Coal selected GTK for its licensing, cross-platform ability, and range of features. Adil, a mechanical engineer by with little previous software development experience, says <q>cross platform stability has been quite astounding,</q> and that the GTK community and mailing lists were significant factors in the project's success.</p>
		</div>

	</div>
</div>

<h2>Community Applications</h2>
<p>For some time now, free applications which use GTK have been listed on the <a href="http://www.gtk-apps.org/" class="external">gtk-apps.org</a> website. This is great for finding out about new releases and searching for applications by category which use the same desktop environment (i.e. GTK and GNOME).</p>

<?php require 'template.php';
