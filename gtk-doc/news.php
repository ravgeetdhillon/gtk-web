<?php
$title = "The GTK-Doc Project: News";
$nav = "news";
ob_start();

require 'gtkdoc.config.php';
?>

<h2>GTK-Doc News</h2>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.28</h3>
		<span class="news-date">Released March 24, 2018</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=791928" class="external">Bug 791928</a> : gtk-doc doesn't understand 'stability: Obsolete'</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=792148" class="external">Bug 792148</a> : cmake: Installed GtkDocConfig.cmake has incorrect bindir path</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=792661" class="external">Bug 792661</a> : use pygments to do syntax highlighing</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=793599" class="external">Bug 793599</a> : Please run testsuite with V=0</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=794051" class="external">Bug 794051</a> : rebase: fix on-line location extraction from devhelp files</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=794182" class="external">Bug 794182</a> : private_header regex is broken</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.27</h3>
		<span class="news-date">Released December 07, 2017</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=773879" class="external">Bug 773879</a> : scangobj: Do not generate unused parameters</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=786174" class="external">Bug 786174</a> : Several test failures on Arch Linux</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=787495" class="external">Bug 787495</a> : gtkdoc-fixxref crashes when running vim for syntax highlighting</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=787768" class="external">Bug 787768</a> : Aborts when glib2.0-dev is not installed</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=787862" class="external">Bug 787862</a> : Always open files in text mode and always use utf-8</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=788473" class="external">Bug 788473</a> : fixxref crashes if a .devhelp2.gz file is found</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=789531" class="external">Bug 789531</a> : Don't depend on the system shell</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=790022" class="external">Bug 790022</a> : mkdb: Add support for (not optional) annotation</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=791131" class="external">Bug 791131</a> : gtk-doc and python3: fixxref failures</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.26</h3>
		<span class="news-date">Released August 11, 2017</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=773879" class="external">Bug 773879</a> : scangobj: Do not generate unused parameters</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=780789" class="external">Bug 780789</a> : Convert gtkdoc-scan from Perl to Python</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=752126" class="external">Bug 752126</a> : Add support for inline program documentation</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=753052" class="external">Bug 753052</a> : _() causes element a: validity error : ID idx already defined</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=758137" class="external">Bug 758137</a> : GtkLabel and GtkShortcutsShortcut notes on escaping character entities don't render properly</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=764407" class="external">Bug 764407</a> : Broken links to structs in function definitions</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=764543" class="external">Bug 764543</a> : /usr/bin/gtkdoc-mkpdf always exits with an error</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=768675" class="external">Bug 768675</a> : make check fails on master</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=769125" class="external">Bug 769125</a> : gtkdoc-mkhtml/pdf fails on spaces in search path</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=769341" class="external">Bug 769341</a> : gtkdoc-mkdb line 3966 triggers &quot; Negative repeat count does nothing &quot; warnings</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=771255" class="external">Bug 771255</a> :  &quot; Symbol name not found at the start of comment block &quot; warning with &quot; attributes &quot; annotation.</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=773151" class="external">Bug 773151</a> : configure: Lower perl dependency to 5.16.0</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=774168" class="external">Bug 774168</a> : gobject introspection annotations and gtk-doc parser do not agree</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=774812" class="external">Bug 774812</a> : Error messages from xsltproc are hidden by gtkdoc-mkhtml</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=778144" class="external">Bug 778144</a> : Allow disabling introspection for ancillary property mechanisms</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=779566" class="external">Bug 779566</a> : Replace shell executables with Python</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.25</h3>
		<span class="news-date">Released March 21, 2016</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=763465" class="external">Bug 763465</a> : released version of gtk-doc no longer understands cross-reference data in gtk+</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=742404" class="external">Bug 742404</a> : unify index.sgml and *.devhelp2 + change gtkdoc-fixxref to use *.devhelp2</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=743182" class="external">Bug 743182</a> : Automatically support PACKAGE variables as XML entities</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=744061" class="external">Bug 744061</a> : Skip standard g_iface, parent_instance and parent_class struct members</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=751479" class="external">Bug 751479</a> : help: Document the Stability tag for documentation comments</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=751777" class="external">Bug 751777</a> : gtk-doc -sections.txt file documentation is a bit confusing</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=751783" class="external">Bug 751783</a> : Creating master xml document documentation is a bit lacking</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=751906" class="external">Bug 751906</a> : help: Fix incorrect example syntax for embedded images</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=752795" class="external">Bug 752795</a> : documentation is not rebuilt when only content of doc comments change</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=753145" class="external">Bug 753145</a> : gtkdoc-mkhtml fails on spaces in file names</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=753348" class="external">Bug 753348</a> : gtkdocize does not handle -flat flavours</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=756297" class="external">Bug 756297</a> : Add CMake module</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=756368" class="external">Bug 756368</a> : gtkdocize mistakenly parses options from comments in configure.ac</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=756519" class="external">Bug 756519</a> : `make check' fails - Sequence (?R...) not recognized in regex</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=756684" class="external">Bug 756684</a> : Support (not nullable) annotation</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=756998" class="external">Bug 756998</a> : Support |[ &lt; !-- language= &quot; plain &quot; -- &gt; ]|</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=758996" class="external">Bug 758996</a> : gtkdoc-mkdb: ensure macros appear in the correct section</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=759017" class="external">Bug 759017</a> : autogenerated ids in return and parameter blocks</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.24</h3>
		<span class="news-date">Released May 29, 2015</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=749591" class="external">Bug 749591</a> : gtk-doc 1.23 no longer includes xml namespace in .devhelp2 files</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=749706" class="external">Bug 749706</a> : .gitignore files should not be under version control</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=749816" class="external">Bug 749816</a> : Support syntax highlighting of different languages (patch included)</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=749901" class="external">Bug 749901</a> : Strip common indent when highlighting with vim</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.23</h3>
		<span class="news-date">Released May 17, 2015</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=749142" class="external">Bug 749142</a> : Can't build totem-pl-parser from master using gtk-doc 1.22</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=749210" class="external">Bug 749210</a> : mkman: Use full URL to refer to the docbook manpages stylesheet</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.22</h3>
		<span class="news-date">Released May 07, 2015</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=727778" class="external">Bug 727778</a> : gtk-doc doesn't understand annotations for GList-contained types</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=729911" class="external">Bug 729911</a> : Using #TypeName inshort_description makes &quot; - &quot; in HTML index disappear</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=732689" class="external">Bug 732689</a> : strange result on a generated html page</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=732689" class="external">Bug 732689</a> :  &quot; Specific - &gt; General &quot; document title format</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=736073" class="external">Bug 736073</a> : Regression: problems with enum constants</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=736725" class="external">Bug 736725</a> : Documentation consists mostly of empty space</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=741305" class="external">Bug 741305</a> : Scanner issue with enum containing value ='{'</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=741763" class="external">Bug 741763</a> : Example Makefile.am improvements</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=741941" class="external">Bug 741941</a> : Last function argument missing in docs (possibly due to macro in code)</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=743879" class="external">Bug 743879</a> : special case G_DECLARE_*_TYPE</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=743967" class="external">Bug 743967</a> : Make build results reproducible</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=744075" class="external">Bug 744075</a> : Missing struct members if forward declared in another header</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=744368" class="external">Bug 744368</a> : gtkdoc-depscan doesn't handle unicode in .devhelp2 files correctly</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=746118" class="external">Bug 746118</a> : gtkdoc-scan: fix regex for get_type() functions</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=746120" class="external">Bug 746120</a> : Expand annotation recognition on symbol lines</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=746121" class="external">Bug 746121</a> : gtkdoc-mkdb: don't warn on 'deprecated entities'</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=747207" class="external">Bug 747207</a> : Typos in documentation</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=747298" class="external">Bug 747298</a> : Test still tries to check gtkdoc-scanobj</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=748456" class="external">Bug 748456</a> : xsl: Enable ToC generation on empty &lt; toc/ &gt; elements</li>
	</ul>
</div>


<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.21</h3>
		<span class="news-date">Released Jul 17, 2014</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=170860" class="external">Bug 170860</a> : gtk-doc should have definitions for stability</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=644111" class="external">Bug 644111</a> : one cannot specify against which libs gtkdoc-fixxref should resolve links (problematic with multiple versions)</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=657444" class="external">Bug 657444</a> : &quot; enum foo { ... } &quot; ; not recognized</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=671519" class="external">Bug 671519</a> : Self-test relies on nonportable (GNU enhanced) 'date' command</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=678094" class="external">Bug 678094</a> : the word &quot; returns &quot; in a function description can be parsed as the &quot; Returns: &quot; section</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=722621" class="external">Bug 722621</a> : gtk-doc tarball was created with 32bit uid/gid, unusable with mingw/msys tar</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=724739" class="external">Bug 724739</a> : Self-test fail: gtkdoc-mkdb misusing perl datatype</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=725505" class="external">Bug 725505</a> : new syntax highlighting for code is weird</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=725663" class="external">Bug 725663</a> : configure: non POSIX test usage</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=730658" class="external">Bug 730658</a> : Deprecation warning for non-deprecated type GParamFlags</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=730777" class="external">Bug 730777</a> : Add support for nullable and optional annotations</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.20</h3>
		<span class="news-date">Released Feb 16, 2014</span>
	</div>
	<ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605537" class="external">Bug 605537</a> : Returns: listed among parameters</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=624001" class="external">Bug 624001</a> : Support attribute-based method to deprecate symbols</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=662424" class="external">Bug 662424</a> : Class hierarchy about interfaces not generated by default</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=665926" class="external">Bug 665926</a> : should not have to document object structures</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=666509" class="external">Bug 666509</a> : Specifying --enable-gtk-doc should not be required to build source packages</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=669417" class="external">Bug 669417</a> : Duplicate IDs generated for unions registered as boxed types</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=671519" class="external">Bug 671519</a> : Self-test relies on nonportable (GNU enhanced) 'date' command</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=692367" class="external">Bug 692367</a> : gtkdocize should take a srcdir argument</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=696570" class="external">Bug 696570</a> : style updates</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=697940" class="external">Bug 697940</a> : Race condition between setup-build.stamp and scan-build.stamp</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=701259" class="external">Bug 701259</a> : /bin/bash: -chmod: command not found</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=701638" class="external">Bug 701638</a> : Support automake parallel test harness (fix error with GTKDOC_CHECK)</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=706404" class="external">Bug 706404</a> : Minor bug in gtkdoc-mkdb</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=706438" class="external">Bug 706438</a> : Empty lines added at the beginning and at the end of a programlisting</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=707426" class="external">Bug 707426</a> : master is broken in picking up flavour from configure.ac</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=707717" class="external">Bug 707717</a> : Support &quot; Deprecated: X.Y &quot;</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=708268" class="external">Bug 708268</a> : New *-insensitive.png files are not distributes</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=710478" class="external">Bug 710478</a> : gtkdoc-mkdb: Don't complain about annotations with hyphen</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=711111" class="external">Bug 711111</a> : gtkdoc-mkdb: sort entries in the glossary</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=711598" class="external">Bug 711598</a> : gtkdoc-scan doesn't ignore decorators containing parentheses</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=719644" class="external">Bug 719644</a> : docs: make yelp usage conditional in manual</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=719645" class="external">Bug 719645</a> : configure: emit message when looking for yelp</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=720061" class="external">Bug 720061</a> : make: create subdirectories of the content_files to the  builddir</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=721228" class="external">Bug 721228</a> : configure: search for xml catalog in XDG_DATA_DIRS</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=722479" class="external">Bug 722479</a> : cp -u is not portable</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723118" class="external">Bug 723118</a> : Mark |[ blocks as CDATA</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723288" class="external">Bug 723288</a> : Fix MarkDown support</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723417" class="external">Bug 723417</a> : New MarkDown parser</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723696" class="external">Bug 723696</a> : Add support for blockquote</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723812" class="external">Bug 723812</a> : Add support for reference links</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723913" class="external">Bug 723913</a> : List in markdown: &lt; p &gt; inside the last element of a &lt; ul &gt; list</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=723991" class="external">Bug 723991</a> : Improve the display of the synopsis</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=724002" class="external">Bug 724002</a> : gtkdoc-scan: Fix use of uninitialised value in trace logging</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.19</h3>
		<span class="news-date">Released Jun 05, 2013</span>
	</div>
  <ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=652740" class="external">Bug 652740</a> : Warnings during expansion of content files</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=660436" class="external">Bug 660436</a> : Warning for skip annotations on function parameters</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=661853" class="external">Bug 661853</a> : allow EXTRA_DIST to be predefined</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=668228" class="external">Bug 668228</a> : several of the tests use syntax not compatible with traditional Bourne shells</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=670724" class="external">Bug 670724</a> : gtk-doc.make: double recursion when maintainer-clean</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=670767" class="external">Bug 670767</a> : generated file gnome-doc-utils.m4 is in version control</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=670796" class="external">Bug 670796</a> : (patch) Show commands when building documentation with make</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=671519" class="external">Bug 671519</a> : Self-test relies on nonportable (GNU enhanced) 'date' command</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=671960" class="external">Bug 671960</a> : make dist fails without html/*</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=672710" class="external">Bug 672710</a> : Use new documentation infrastructure</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=676685" class="external">Bug 676685</a> : Allow to order functions without using $MODULE-sections.txt</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=685365" class="external">Bug 685365</a> : (PATCH) Fix contents of warning message, should be &quot; -sections.txt &quot; not &quot; -section.txt &quot;</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=686148" class="external">Bug 686148</a> : [patch] suggested parameters for gtkdoc-scangobj</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=687685" class="external">Bug 687685</a> : 'g_type_init' is deprecated</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=688204" class="external">Bug 688204</a> : undocumented enum values missing in indexes</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=688423" class="external">Bug 688423</a> : Add support for &quot; transfer floating &quot; introspection annotation</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=689209" class="external">Bug 689209</a> : Automake complains about trailing space after backslash.</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=690438" class="external">Bug 690438</a> : Small improvements</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=696930" class="external">Bug 696930</a> : Incorrect allowed value for a property</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=700981" class="external">Bug 700981</a> : make: copy the files with their relative path included</li>
  </ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.18</h3>
		<span class="news-date">Released Sep 14, 2011</span>
	</div>
  <ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=590927" class="external">Bug 590927</a>: Support AM_SILENT_RULES for doc-build steps</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=617121" class="external">Bug 617121</a>: /* &lt; private &gt; */ declarations in enums are still displayed</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=627758" class="external">Bug 627758</a>: A way to ignore a symbol</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=639145" class="external">Bug 639145</a>: shorthand syntax for headings</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=644291" class="external">Bug 644291</a>: Enum parser breaks on assignment of ')'</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=646870" class="external">Bug 646870</a>: HTML_IMAGES no longer in EXTRA_DIST</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=648289" class="external">Bug 648289</a>: gtkdoc-mkdb doesn't compile.</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=648331" class="external">Bug 648331</a>: Specify compatible options for 'highlight' consistently.</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=649269" class="external">Bug 649269</a>: gtkdoc-scanobj should set some of its own CFLAGS/LDFLAGS</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=650407" class="external">Bug 650407</a>: Buildings docs while distchecking produces thousands of “No declaration found” warnings, then fails.</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=652746" class="external">Bug 652746</a>: Documentation of plain boxed structs broken</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=652764" class="external">Bug 652764</a>: Update autotools config a bit</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=655711" class="external">Bug 655711</a>: summarize depscan output by package</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=656453" class="external">Bug 656453</a>: Performance improvements (PATCH)</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=656658" class="external">Bug 656658</a>: gtk-doc.make: install target doesn't install docs when building in a separate directory</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=656773" class="external">Bug 656773</a>: gtk-doc fails to find a symbol declared as 'char* const'</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=656946" class="external">Bug 656946</a>: gtk-doc unable to handle 'extern short int'</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=657377" class="external">Bug 657377</a>: srcdir!=builddir builds discard contents of tmpl</li>
  </ul>
</div>


<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.17</h3>
		<span class="news-date">Released Feb 26, 2011</span>
	</div>
  <ul>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=127049" class="external">Bug 127049</a>: building reference documentation fails when builddir != srcdir</li>
    <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=640241" class="external">Bug 640241</a>: non-srcdir builds busted</li>
  </ul>
</div>


<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.16</h3>
		<span class="news-date">Released Jan 14, 2011</span>
	</div>
        <ul>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=625776" class="external">Bug 625776</a>: serialise doubles and floats always with a decimal dot</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=627269" class="external">Bug 627269</a>: link to signalflags docs from signal descriptions</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=467488" class="external">Bug 467488</a>: GTK man pages request</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=481811" class="external">Bug 481811</a>: Inline function bodies are confused with declarations</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=501107" class="external">Bug 501107</a>: EXTRA_DIST automake warnings</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=512565" class="external">Bug 512565</a>: add GTK_DOC_IGNORE</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=518427" class="external">Bug 518427</a>: documentation best pratices needed</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=597937" class="external">Bug 597937</a>: Function pointers as parameters to other functions are parsed improperly</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=612028" class="external">Bug 612028</a>: gtkdoc-fixxref should call /usr/bin/vim -n -e -u NONE -T xterm</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=617478" class="external">Bug 617478</a>: Tooltip is a nuisance</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=618379" class="external">Bug 618379</a>: Navigation is hiding anchors title</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=620249" class="external">Bug 620249</a>: invalid xml for object_index with (n_objects % 3) == 0</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=621931" class="external">Bug 621931</a>: support GType and GVariant types</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=622971" class="external">Bug 622971</a>: List of typos in the GTK-doc manual</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=623777" class="external">Bug 623777</a>: G_TYPE_STRV in signals generate wrong docs</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=623968" class="external">Bug 623968</a>: gtkdoc-mkdb generates invalid xml from sgml in inline comments</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=624199" class="external">Bug 624199</a>: parser picks up contents of large macros</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=624200" class="external">Bug 624200</a>: 'const' confuses the parser</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=627223" class="external">Bug 627223</a>: gtkdoc-fixxref vim highlight fails on xhtml suffix</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=627920" class="external">Bug 627920</a>: `make check` rule to list xml files missing from DOC_MAIN_SGML_FILE</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=628611" class="external">Bug 628611</a>: gtk-doc &gt; = 1.13 creates automagic dependencies on syntax highlighters</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=628794" class="external">Bug 628794</a>: Issue in gtkdoc-mkman.in</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=630288" class="external">Bug 630288</a>: Fix 'scope notified' annotation</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=631336" class="external">Bug 631336</a>: remove lists of gtk+ signal args in gtkdoc-scanobj and -scangobj</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=632587" class="external">Bug 632587</a>: gtkdoc-scanner fails to identify (closure) annotation</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=638330" class="external">Bug 638330</a>: const in parameter list is ignored</li>
                <li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=638831" class="external">Bug 638831</a>: Support GTK 3 cell properties</li>
        </ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.15</h3>
		<span class="news-date">Released May 21, 2010</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=614496" class="external">Bug 614496</a>: Support for multiple DOC_SOURCE_DIR directories</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=615550" class="external">Bug 615550</a>: gtk-doc fails to recognize (scope ...) and (skip) annotations</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.14</h3>
		<span class="news-date">Released March 28, 2010</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=593282" class="external">Bug 593282</a>: Append ' _struct ' prefix to every struct name</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=599514" class="external">Bug 599514</a>: sane support for per-page images</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604892" class="external">Bug 604892</a>: checks fail</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=613611" class="external">Bug 613611</a>: parameter descriptions with annotations truncated at first \n</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=115531" class="external">Bug 115531</a>: add short description to index entries</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=165425" class="external">Bug 165425</a>: gtk-doc fails to parse unions</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=512155" class="external">Bug 512155</a>: gets confused by multiline typedef</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568711" class="external">Bug 568711</a>: undocumented enum values are not reported</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=590602" class="external">Bug 590602</a>: secondly running gtkdoc-mkdb will generate DOCTYPE missing XML files</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=590625" class="external">Bug 590625</a>: $(DOC_MODULE)-overrides.txt is required by ' make dist '</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=591975" class="external">Bug 591975</a>: Section_Id always embeds a trailing newline</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604885" class="external">Bug 604885</a>: Fix the use of gtkdocize --flavour option</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604992" class="external">Bug 604992</a>: gtkdoc-fixxref broken link warning is broken for functions</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604995" class="external">Bug 604995</a>: Syntax error in gtkdoc-mkman</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604998" class="external">Bug 604998</a>: Check for syntax errors in the test suite</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605052" class="external">Bug 605052</a>: put class structs to the generated section file</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605211" class="external">Bug 605211</a>: Many build failures with gtk-doc 1.13</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605281" class="external">Bug 605281</a>: Add ' Since ' and ' Deprecated ' tag to function example</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605285" class="external">Bug 605285</a>: Add &lt; keycap &gt; and &lt; keycombo &gt; example</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605289" class="external">Bug 605289</a>: Some documentation improvements</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605452" class="external">Bug 605452</a>: Added more info to ' Documenting symbols ' sectio</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=605564" class="external">Bug 605564</a>: Env var equivalent to --flavour=no-tmpl</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=606661" class="external">Bug 606661</a>: XInclude error while gnerating documentation</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=607445" class="external">Bug 607445</a>: gtk-doc does not support long double as returned value type</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=607531" class="external">Bug 607531</a>: Execute system() calls in subshells to ease debugging</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=609062" class="external">Bug 609062</a>: [All-langs] [gtk-doc] Translated *.po files not available within ~/po directory</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=609194" class="external">Bug 609194</a>: sort interface implementers</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=610255" class="external">Bug 610255</a>: Self-test failure in git as of 2010-02-17: FAIL: gobject.sh</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=610257" class="external">Bug 610257</a>: Patch to make GTK-DOC notice functions/variables with 'signed' prototypes</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=611848" class="external">Bug 611848</a>: gtk-doc produces invalid DocBook markup if the SECTION ends with a tag that cannot be nested inside &lt; para &gt;</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.13</h3>
		<span class="news-date">Released December 18, 2009</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604891" class="external">Bug 604891</a>: gtk-doc tarball does not build</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.12</h3>
		<span class="news-date">Released December 18, 2009</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=591450" class="external">Bug 591450</a>: Build related fixes</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=466535" class="external">Bug 466535</a>: generate documentation as pdf</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=502191" class="external">Bug 502191</a>: acronym support</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=532395" class="external">Bug 532395</a>: inline function parsing problems (e.g. in glib api docs)</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=536928" class="external">Bug 536928</a>: have syntax highlghted and xrefs source code samples</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=562064" class="external">Bug 562064</a>: index generation trouble</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=562310" class="external">Bug 562310</a>: glib 2.18.3: /bin/sh: line 1: gtkdoc-rebase: command not found</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=562655" class="external">Bug 562655</a>: doesn't produce deprecation note for signals</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=565126" class="external">Bug 565126</a>: linking to struct members</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=565835" class="external">Bug 565835</a>: Three spelling errors in gtk-doc-manual</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=566911" class="external">Bug 566911</a>: add support for --help and --version to remaining tools</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=567132" class="external">Bug 567132</a>: Take FOO_GET_INTERFACE as standard</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568702" class="external">Bug 568702</a>: gtkdoc-mkhtml no longer works when symlinked</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568706" class="external">Bug 568706</a>: gtkdoc-scan: use CamelCase id for interfaces</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568708" class="external">Bug 568708</a>: gtkdoc-scan should try not to scan files twice</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568714" class="external">Bug 568714</a>: Perl errors when syntax highlighting is not available</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568732" class="external">Bug 568732</a>: missing long descriptions undetected</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=568734" class="external">Bug 568734</a>: configure check for gtk-doc prints that gtk-doc cannot be built</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=569339" class="external">Bug 569339</a>: abbreviation are not expanded at the start of text</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=572396" class="external">Bug 572396</a>: Fix to use shave + gtk-doc + libtool 1.x</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=572612" class="external">Bug 572612</a>: Mistakenly substitute -1 with G_MAXULONG in x86_64</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=572967" class="external">Bug 572967</a>: use g_strerror</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=574654" class="external">Bug 574654</a>: --ignore-decorators does not ignore trailing stuff</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=575574" class="external">Bug 575574</a>: Be more friendly for files with a space in their name</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=575623" class="external">Bug 575623</a>: Update FSF address</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=575711" class="external">Bug 575711</a>:  &lt; table &gt; element mismatch in highlighted code</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=576313" class="external">Bug 576313</a>: implicit declarations in testsuite ?</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=577059" class="external">Bug 577059</a>: Gnome-doc support can't be disabled</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=577774" class="external">Bug 577774</a>: Test suite run even when built with --disable-gtk-doc</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=580206" class="external">Bug 580206</a>: gcc warnings in &lt; module &gt; -scan.c</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=580300" class="external">Bug 580300</a>: gtkdoc-scan picks up _get_type functions it should not</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=580622" class="external">Bug 580622</a>: xml dir is both part of distclean and dist rules</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=581237" class="external">Bug 581237</a>: gtk-doc uses wrong gtkdoc-check in ' make check ' phase</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=584952" class="external">Bug 584952</a>:  ' uninitialized value in concatenation ' gtkdoc-mkdb line 938</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=587103" class="external">Bug 587103</a>: return values of function-like macros</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=587196" class="external">Bug 587196</a>: Typo in a string</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=589426" class="external">Bug 589426</a>: Python is a required dependency</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=591789" class="external">Bug 591789</a>: master FTBFS with automake 1.11</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=594224" class="external">Bug 594224</a>: Please fix manual about inlined SECTION comments (and show warnings when invalid)</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=596730" class="external">Bug 596730</a>: Signed vs. unsigned comparison in gtkdoc-scangobj.in causing compile errors</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=596731" class="external">Bug 596731</a>: autogen.sh doesn't recognize automake-1.11</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=602026" class="external">Bug 602026</a>: Warn if non-existing function gets referenced</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=602518" class="external">Bug 602518</a>: Doesn't support ' long int ' return type</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=604798" class="external">Bug 604798</a>: tests/fail.sh and tests/tools.sh.in use bashisms</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.11</h3>
		<span class="news-date">Released November 16, 2008</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=531572" class="external">Bug 531572</a>: one-page generation option</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=448879" class="external">Bug 448879</a>: Use a footer when generating HTML documentation</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=311857" class="external">Bug 311857</a>: xsltproc very slow generating index for gtk-docs.sgml</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=335239" class="external">Bug 335239</a>: Using gnome-doc-utils for gtk-doc documentation</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=460753" class="external">Bug 460753</a>: enable vpath build in gtkdoc-mkhtml</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=473342" class="external">Bug 473342</a>: Warn about repeated symbols in sections</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=487727" class="external">Bug 487727</a>: DocBook XML DTD version</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=523669" class="external">Bug 523669</a>: make check: Element publisher content does not follow the...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=530758" class="external">Bug 530758</a>: gtk-doc should not expand XML tags and their attributes</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=533262" class="external">Bug 533262</a>: no-template mode scans different source files</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=534627" class="external">Bug 534627</a>: gtk-doc uses non-standard HTML element</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=542137" class="external">Bug 542137</a>: No declaration found for: gsf_output_*</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=543855" class="external">Bug 543855</a>: Fix for <a href="https://bugzilla.gnome.org/show_bug.cgi?id=460753" class="external">Bug 460753</a> (enable vpath build in gtkdoc-mkhtml) ...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=544172" class="external">Bug 544172</a>: Fails to parse return value of 'char const *'</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=552822" class="external">Bug 552822</a>: Add rules to create $(REPORT_FILES)</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=553407" class="external">Bug 553407</a>: Example Makefile.am uses obsolete INCLUDES instead of AM_...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=554718" class="external">Bug 554718</a>: gtk-doc needs to allow versioned TARGET_DIR</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=554833" class="external">Bug 554833</a>: Be more careful with ' struct _ &lt; struct_name &gt;  ' </li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=558082" class="external">Bug 558082</a>: evince docs build fails with GTK_DISABLE_SINGLE_INCLUDES</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=559281" class="external">Bug 559281</a>: Correct check for existance of gtkdoc-rebase</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.10</h3>
		<span class="news-date">Released March 20, 2008</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=460753" class="external">Bug 460753</a>: enable vpath build in gtkdoc-mkhtml</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=503119" class="external">Bug 503119</a>: Add dependency on content_files to SGML target</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=127049" class="external">Bug 127049</a>: building reference documentation fails when builddir != s...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=481811" class="external">Bug 481811</a>: Inline function bodies are confused with declarations</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=448879" class="external">Bug 448879</a>: Use a footer when generating HTML documentation</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=492005" class="external">Bug 492005</a>: Deprecation guard warnings for properties and signals</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=498521" class="external">Bug 498521</a>: Inconsistent compiler flags passed in gtk-doc.make</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=365913" class="external">Bug 365913</a>: gtk-doc output is not predictable</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=446648" class="external">Bug 446648</a>: gtk-doc does not handle forward typedef'd enums</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=468278" class="external">Bug 468278</a>: Display proper types for properties</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=497367" class="external">Bug 497367</a>: don't use US-ASCII for output encoding</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=501066" class="external">Bug 501066</a>: Missing quotes around gtkdoc-rebase check cause a warning</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=508897" class="external">Bug 508897</a>: [PATCH] Fix build when gtk-doc is not installed</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=509539" class="external">Bug 509539</a>: Building documentation aborts when no .types file is present</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=512154" class="external">Bug 512154</a>: Struct member type attributes are limited to one token</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=513318" class="external">Bug 513318</a>: gtk-doc.el doesn't work fine with emacs22</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.9</h3>
		<span class="news-date">Released September 30, 2007</span>
	</div>
	<ul>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=419308" class="external">Bug 419308</a>: unsynced regexps for parameter parsing</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=449618" class="external">Bug 449618</a>: Top navigation bar is in the way</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=453717" class="external">Bug 453717</a>: fixxref logic to determine absolute path's is flawed</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=457173" class="external">Bug 457173</a>: unit tests for gtk-doc</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=465920" class="external">Bug 465920</a>: Use gtkdoc-rebase</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=467773" class="external">Bug 467773</a>: default master doc should have proper extension</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=141869" class="external">Bug 141869</a>: Poor error generated when faced with a type declared as <code>...</code></li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=156643" class="external">Bug 156643</a>: Avoid make error in gtk-doc.make</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=322035" class="external">Bug 322035</a>: wrong macro parsing</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=323938" class="external">Bug 323938</a>: gtk-doc.m4 check is silent</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=324535" class="external">Bug 324535</a>: gtk-doc doesn't handle deprecation inside enumerations</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=355352" class="external">Bug 355352</a>: If you don't have an instantiatable type for a gtypeinter...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=379466" class="external">Bug 379466</a>: Improve C parser to handle TYPE\nVARIABLE in function pro...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=380824" class="external">Bug 380824</a>: docs are truncated if line begins with <code>* returns </code></li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=383456" class="external">Bug 383456</a>: <code>make check</code> test for 100% documentation</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=411739" class="external">Bug 411739</a>: Gtk-doc fails to handle <code>struct tm * function_name ();</code></li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=415388" class="external">Bug 415388</a>: Please clean -undocumented.txt files</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=418027" class="external">Bug 418027</a>: gtkdoc-mkdb does not handle #ifdef in enum {}</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=419997" class="external">Bug 419997</a>: parameter name trouble</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=428596" class="external">Bug 428596</a>: Warnings with gtk-doc.m4 macros</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=434134" class="external">Bug 434134</a>: fixxrefs like sed for installing pregenerated docs</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=436565" class="external">Bug 436565</a>: Report undeclared symbols into a file</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=445596" class="external">Bug 445596</a>: Impossible to link a page with an anchor</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=445693" class="external">Bug 445693</a>: Does not understand <code>unsigned long</code> as a type</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=450338" class="external">Bug 450338</a>: Make gtk-doc.m4 fail when needed gtk-doc is not installed</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=454916" class="external">Bug 454916</a>: gtk-doc should permit generation of URI-based cross-refer...</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=457077" class="external">Bug 457077</a>: add --no-implicit-returns to gtkdoc-mkdb</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=459225" class="external">Bug 459225</a>: Accept automake-1.10 in autogen.sh</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=459725" class="external">Bug 459725</a>: <code>jhbuild build gtk-doc</code> fails on make</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=460127" class="external">Bug 460127</a>: parsing nested union/structs confuses public/private state</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=465365" class="external">Bug 465365</a>: [PATCH] gtk-doc does not compile</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=466559" class="external">Bug 466559</a>: [CSS] styling &lt; hr / &gt;</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=471014" class="external">Bug 471014</a>: G_CONST_RETURN * G_CONST_RETURN * function not picked up</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=477532" class="external">Bug 477532</a>: function variables</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=479913" class="external">Bug 479913</a>: gtk-doc.notmpl.make is not distributed</li>
		<li><a href="https://bugzilla.gnome.org/show_bug.cgi?id=479923" class="external">Bug 479923</a>: distclean test output properly</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.8</h3>
		<span class="news-date">Released Feburary 16, 2007</span>
	</div>
	<ul>
		<li>Made it easier to include example code in the source code comment blocks.</li>
		<li><code>|[ ... ]|</code> can be used to delineate example code (it just gets converted to <code>&lt;informalexample&gt;&lt;programlisting&gt;</code>), and most of the text in example code is left as it is. The only thing that is still expanded is <code>#</code> to allow links to a symbol's documentation, e.g. <code>#GtkWidget</code>.</li>
		<li>Made the field widths wider for the HTML output, so it looks a bit nicer.</li>
		<li>Added a <code>--rebuild-sections</code> option to gtkdoc-scan to automatically rebuild the MODULE-sections.txt file. This only works if all the header files are organized neatly and functions don't need rearranging in the docs.</li>
		<li>Added a <code>--rebuild-types</code> option to gtkdoc-scan to automatically rebuild the MODULE.types file, so you don't need to add new types manually.</li>
		<li>Leave CDATA sections as they are, in the extra XML content files and within source code comment blocks.</li>
		<li>Allow the section id and #include's to be set within the <code>SECTION:</code> comment block, using <code>@Section_ID:xxx</code> and <code>@Include:</code>.</li>
		<li>Added <code>--default-includes</code> option to specify the default #include's (for people who are using --rebuild-sections and so can't specify it in MODULE-sections.txt).</li>
		<li>Added a <code>--query-child-properties</code> argument to help document child properties of arbitrary GObjects (used by things like canvas widgets).</li>
		<li>Fixed documentation of signals of interfaces.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.7</h3>
		<span class="news-date">Released July 29, 2006</span>
	</div>
	<ul>
		<li>Fixed bug that resulted in empty <code>@:</code> lines in the templates.</li>
		<li>Fixed a few bugs with the XSL code.</li>
		<li>Supported a few more variations of C syntax.</li>
		<li>Remove the internally-used '-struct' suffix from links to widget structs.</li>
		<li>Fixed a few missing build dependencies.</li>
		<li>Added a new <code>C-x4s</code> binding to the emacs lisp code, to insert a blank section header in the source code.</li>
		<li>Fixed bug that ignored inline section header docs with '-' in their names.</li>
		<li>Added a <code>make docs</code> target that can be used to build the docs even when gtk-doc has been disabled at configure time.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.6</h3>
		<span class="news-date">Released April 9, 2006</span>
	</div>
	<ul>
		<li>Removed the hard dependancy on openjade or jade, since XML is used mainly now rather than SGML.</li>
		<li>Install the .pc file in <code>$(datadir)</code> rather than <code>$(libdir)</code> since gtk-doc is architecture-independant.</li>
		<li>Added <code>--ignore-decorators</code> option to ignore a list of declarators in function declarations.</li>
		<li>Support <code>#Object::signal'/'#Object:property</code> to link to signals/properties.</li>
		<li>Fixed missing index terms.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.5</h3>
		<span class="news-date">Released March 7, 2006</span>
	</div>
	<ul>
		<li>Output the new version of devhelp2 information, but still generate the old devhelp files so older versions of DevHelp still work OK.</li>
		<li>Fixed the initial creation of the *-sections.txt file so the object hierarchy, signals and properties all work automatically.</li>
		<li>Show information about signal flags (run first/last).</li>
		<li>Support a <code>--source-suffixes</code> argument specifying which source files to scan.</li>
		<li>Support other root object types besides GObject and GInterface.</li>
		<li>Use a fixed navigation bar for the generated documentation.</li>
		<li>New documentation from Stefan Kost.</li>
		<li>Handle more variations of C syntax.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.4</h3>
		<span class="news-date">Released July 3, 2005</span>
	</div>
	<ul>
		<li>Support section documentation (title, short description, long description and 'see also') within the source code. I think everything can now be documented within the source code.</li>
		<li>Support stable/unstable/private stability levels for everything.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.3</h3>
		<span class="news-date">Released January 9, 2005</span>
	</div>
	<ul>
		<li>Use the new style.css stylesheet instead of hard-wiring the styles.</li>
		<li>Updated the documentation and example build files.</li>
		<li>Added support for a gallery of widget images.</li>
		<li>Output default values for widget properties and allowed ranges.</li>
		<li>Only underline links in the docs when the mouse hovers over them.</li>
		<li>Added support for placing the parameter table anywhere within the function documentation (using the <code>&lt;!--PARAMETERS--&gt;</code> marker).</li>
		<li>Handle more variations of C syntax.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.2</h3>
		<span class="news-date">Released February 16, 2004</span>
	</div>
	<ul>
		<li>Added widget signals and properties to undocumented output and statistics.</li>
		<li>Added support for an index of all symbols.</li>
		<li>Emit "Since:" information for signals and properties.</li>
		<li>Added derived subclasses and interfaces to the widget hierarchies.</li>
		<li>Added .cat SGML catalog file.</li>
		<li>Support properties on interfaces.</li>
		<li>Added <code>--help</code> options to the scripts.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.1</h3>
		<span class="news-date">Released April 18, 2003</span>
	</div>
	<ul>
		<li>Add a gtk-doc.m4 macro that allows packages to provide consistent checking for gtk-doc.</li>
		<li>Check to make sure that the XML catalog actually contains entries for the DocBook XML DTD and XSLT stylesheets. Please consult the README file if your system's XML catalog isn't set up.</li>
		<li>Add infrastructure for including the standard gtk-doc makefile glue, so that maintainers of packages don't need to worry about keeping it up to date. See glib head for an example of its use.</li>
		<li>Some updates to the devhelp contents file generation, as suggested by Hallski.</li>
		<li>Fix some bugs in the DocBook XML codepath that were preventing inter-module cross references from being resolved.</li>
		<li>Fix some bugs in extraction of object property documentation.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 1.0</h3>
		<span class="news-date">Released January 20, 2003</span>
	</div>
	<ul>
		<li>Added support for <code>Since:</code> and <code>Deprecated:</code> tags, and look for deprecated guard macros in header files.</li>
		<li>Support <code>/*&lt; public &gt;*/</code> and <code>/*&lt; private &gt;*/</code> markers for all structs.</li>
		<li>New <code>--ignore-files</code> option for gtkdoc-mkdb, to ignore files or directories.</li>
		<li>Used the <code>sgml-raw</code> output type with openjade, to avoid problems with Lynx.</li>
		<li>Added .pc pkg-config file which can be used to check the gtk-doc version.</li>
	</ul>
</div>

<div class="news-item">
	<div class="header">
		<h3 class="news-title">GTK-Doc 0.10</h3>
		<span class="news-date">Released November 14, 2002</span>
	</div>
	<ul>
		<li><code>--output-format</code> option to select whether SGML or XML is generated.</li>
		<li>Use openjade or jade when converting SGML to HTML.</li>
		<li>Use xsltproc to convert XML to HTML, with a new look.</li>
		<li>In XML mode, support XIncludes as an alternative to entities.</li>
		<li>In XML mode, create .devhelp files.</li>
		<li>List interfaces in the object hierarchy.</li>
		<li>Create docs for signals on interfaces.</li>
		<li>Generate links between interface and their implementations and prerequisites.</li>
		<li>Create docs for child and style properties.</li>
		<li>Use blurbs for property documentation.</li>
		<li>Allow inline documentation for signals and properties.</li>
	</ul>
</div>

<?php require '../template.php'; ?>
