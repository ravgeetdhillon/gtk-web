<?php
$title = "The GTK-Doc Project: News";
$nav = "news";
ob_start();

require 'gtkdoc.config.php';
?>

<h2>GTK-Doc News</h2>

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
