#!/bin/sh

# update gtk.org
# /home/timj/svn/gtk-web/install.sh /web/gtk	# not called directly to prevent forged commands
# diff -up update-web /home/timj/svn/gtk-web/install.sh
true && {
	SRCDIR=/home/timj/svn/gtk-web
	INSTALLDIR=/web/gtk
	cd $SRCDIR
	svn update
	
	rsync -rlt --delete --omit-dir-times --exclude-from=$SRCDIR/install.exclude $SRCDIR/ $INSTALLDIR/
	
	for dir in api beos download faq screenshots success plan plan/2.4 plan/2.6 plan/2.8 plan/2.10 plan/ideas plan/meetings ; do
	  for page in site_top.html site_bottom.html box_middle.html box_end.html box_begin.html section_end.html section_begin.html ; do
	    ( cd $INSTALLDIR/$dir/ && rm -f $page && ln -s ../$page $page )
	  done
	done

	( cd $INSTALLDIR 
	  find . ! -group gtk -exec chgrp gtk \{\} \;
	  find . -type f -a  ! -perm -0060 -exec chmod g+rw \{\} \;
	  find . -type d -a  ! -perm -0070 -exec chmod g+rwx \{\} \; )
}
