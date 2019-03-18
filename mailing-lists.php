<?php
$nav = "development";
$title = "GTK Mailing Lists";
ob_start();
?>
<h2><a name="Discussion">Discussions</a></h2>

<p>If you want to ask questions about GTK, whether it's for developing applications with GTK or contributing to GTK itself, you should use the GNOME <a href="https://discourse.gnome.org" class="external">Discourse</a> instance, under the
<a href="https://discourse.gnome.org/c/platform/core" class="external">Platform/Core</a> category. You can use tags like <i>gtk</i> or <i>glib</i> to narrow down the topic of discussion to specific libraries.</p>

<h2><a name="MailingLists">Mailing Lists</a></h2>

<p>With ALL of these mailing lists, if you want to subscribe, all you need to do is to go to the subscribe url for each mailing list or visit the list information page detailed below:</p>
<p>For information on how to use the mailing lists, see the <a href="http://mail.gnome.org/" class="external">mailing list FAQ</a>.</p>

<h3>gtk-doc-list@gnome.org</h3>
<p>This list is for discussion of the development of the gtk-doc documentation tool.</p>
<p>Specific suggestions for the documentation should be put in <a href="http://bugzilla.gnome.org" class="external">Bugzilla</a>.</p>
<p>Mailing list: <a href="mailto:gtk-doc-list-request@gnome.org?subject=subscribe" class="email">Subscribe</a>, <a href="http://mail.gnome.org/mailman/listinfo/gtk-doc-list" class="info">Information</a>, <a href="http://mail.gnome.org/archives/gtk-doc-list/" class="archives">Archives</a></p>

<h3>gtk-i18n-list@gnome.org</h3>
<p>This list is intended for discussion of the internationalization and localization of GTK itself and of GTK applications.</p>
<p>Mailing list: <a href="mailto:gtk-i18n-list-request@gnome.org?subject=subscribe" class="email">Subscribe</a>, <a href="http://mail.gnome.org/mailman/listinfo/gtk-i18n-list" class="info">Information</a>, <a href="http://mail.gnome.org/archives/gtk-i18n-list/" class="archives">Archives</a></p>

<h3>gtk-perl-list@gnome.org</h3> 
<p>This list is intended for discussion of the usage of GTK with Perl.</p>
<p>Mailing list: <a href="mailto:gtk-perl-list-request@gnome.org?subject=subscribe" class="email">Subscribe</a>, <a href="http://mail.gnome.org/mailman/listinfo/gtk-perl-list" class="info">Information</a>, <a href="http://mail.gnome.org/archives/gtk-perl-list/" class="archives">Archives</a></p>

<h3>language-bindings@gnome.org</h3>
<p>This list is intended for discussion among creators of language bindings.</p> 
<p>Mailing list: <a href="mailto:language-bindings-request@gnome.org?subject=subscribe" class="email">Subscribe</a>, <a href="http://mail.gnome.org/mailman/listinfo/language-bindings" class="info">Information</a>, <a href="http://mail.gnome.org/archives/language-bindings/" class="archives">Archives</a></p>

<h3>gir-devel-list@gnome.org</h3>
<p>This list is intended for discussion of the GObject Introspection library and formats. Discussions about specific language bindings should go on the specific binding mailing list, or on language-bindings.</p>
<p>Mailing list: <a href="mailto:gir-devel-list-request@gnome.org?subject=subscribe" class="email">Subscribe</a>, <a href="http://mail.gnome.org/mailman/listinfo/gir-devel-list" class="info">Information</a>, <a href="http://mail.gnome.org/archives/gir-devel-list/" class="archives">Archives</a></p>

<h3><a name="OldMailingLists">Old Mailing Lists</a></h3>

<p>Before switching to Discourse, discussions related to GTK happened on the following mailing lists; if you're looking for historical information about GTK, you can look into their archives.</p>

<h3>gtk-list@gnome.org</h3>
<p>This is the main mailing list and probably the one on which you should ask questions about GTK.</p>
<p>This list is for general topics related to GTK, including everything from discussion of proposed new features to questions about compiling GTK.</p>
<p><a href="http://mail.gnome.org/archives/gtk-list/" class="archives">Archives</a></p>

<h3>gtk-app-devel-list@gnome.org</h3>
<p>Discussion on this list is oriented toward developing applications with GTK. This has been a lower traffic list which is good for asking simple GTK questions.</p>
<p><a href="http://mail.gnome.org/archives/gtk-app-devel-list/" class="archives">Archives</a></p>

<h3>gtk-devel-list@gnome.org</h3>
<p>This list is for developers of the <strong>core</strong> GTK library to discuss GTK implementation. GTK application development and general GTK questions should <strong>not</strong> be asked on this list. The gtk-app-devel-list mailing list is more appropriate for that.</p>
<p>Bug reports and requests for new features should generally be entered in <a href="https://gitlab.gnome.org/GNOME/gtk" class="external">GitLab</a> instead of sent to this list.</p>
<p><a href="http://mail.gnome.org/archives/gtk-devel-list/" class="archives">Archives</a></p>


<?php require 'template.php';
