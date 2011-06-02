<?php
$nav = "about";
include 'libs/gtknewsfeedloader.class.php';
ob_start();
?>

<div class="sidebar" id="NewsFeed">

	<h2>News Feed</h2>
	<ul class="newsfeed"><?php
echo '<!-- test 1 -->';
$newsfeed = new GTKNewsFeedLoader(IDENTICA);
echo '<!-- test 2 -->';
$newsfeed->usecaching = false;
echo '<!-- test 3 -->';
$items = $newsfeed->load( array( 'count' => 6 ) );
echo '<!-- test 4 -->';

$first = true;
echo '<!-- test 5 -->';
if( $newsfeed->iscached ) echo '<!-- This content is cached -->';
echo '<!-- test 6 -->'

foreach( $items as $item ) {
?> 
		<li<?php if($first) echo ' class="first"'; ?>>
			<div class="time">
				<span class="date"><?php echo date("F j, Y", $item['date']); ?></span>
				<span class="relt"><?php echo $newsfeed->reltime($item['date']); ?></span>
			</div>
			<span class="text"><?php echo $item['html']; ?></span>
		</li>
<?php
$first = false;
} ?>
	</ul>

	<div class="newsfeed_buttons">
		<div>Follow the GTK+ project on:</div>
		<span>
			<a href="http://twitter.com/GTKtoolkit" title="Follow GTKtoolkit on Twitter">Twitter</a> |
			<a href="http://identi.ca/gtktoolkit" title="Follow GTKtoolkit on identi.ca">identi.ca</a>
		</span>
	</div>

</div>

<h2 id="WhatIsGTK"><a name="WhatIsGTK">What is GTK+, and how can I use it?</a></h2>

<p><span id="intro">GTK+</span>, or the GIMP Toolkit, is a multi-platform toolkit for creating graphical user interfaces. Offering a complete set of widgets, GTK+ is suitable for projects ranging from small one-off tools to complete application suites.</p>

<dl>
	<dt id="WhereCanIUseIt">Where can I use it?</dt>
	<dd>Everywhere! GTK+ is cross-platform and boasts an easy to use API, speeding up your development time. Take a look at the <a href="screenshots/">screenshots</a> to see a number of platforms GTK+ will run.</dd>

	<dt id="WhatLanguages">What languages are supported?</dt>
	<dd>GTK+ is written in C but has been designed from the ground up to support a <a href="language-bindings.php">wide range of languages</a>, not only C/C++. Using GTK+ from languages such as Perl and Python (especially in combination with the <a href="http://glade.gnome.org/" class="external">Glade GUI builder</a>) provides an effective method of rapid application development.</dd>

	<dt id="AreThereRestrictions">Are there any licensing restrictions?</dt>
	<dd>GTK+ is free software and part of the GNU Project. However, the licensing terms for GTK+, the <a href="http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html" class="external">GNU LGPL</a>, allow it to be used by all developers, including those developing proprietary software, without any license fees or royalties.</dd>
</dl>

<p>Get an <a href="overview.php">overview</a> of GTK+. Understand who started it, the basic architecture and why we use the license we do.</p>

<p>GTK+ has been involved in <a href="http://www.gtkfiles.org/" class="external">many</a> <a href="http://www.gtk-apps.org/" class="external">projects</a> and some big platforms. To get a glimpse of what people think of GTK+ and how it has been used in commercial projects, <a href="commerce.php">read the success stories...</a></p>

<p>To find out how more about what GTK+ can do for you, visit our <a href="features.php">features</a> page. If you want to <a href="development.php#Contributing">contribute</a>, you are more than welcome.</p>

<?php require 'template.php';
