#!/bin/sh

CVSDIR=`pwd`

if test "x$1" != x ; then
  INSTALLDIR=$1
else
  echo 2>&1 "Usage: install.sh DESTDIR"
  exit 1
fi

rsync -rlt --delete --exclude-from=$CVSDIR/install.exclude $CVSDIR/ $INSTALLDIR/

make_link () {
  from=$1
  to=$2

  todir=`dirname $to`
  tobase=`basename $to`

  ( cd $INSTALLDIR/$todir && rm -f $tobase && ln -s ../$from $tobase )
}

for i in api apps beos download faq news screenshots success plan plan/2.4 plan/2.6 plan/meetings ; do
  for j in site_top.html site_bottom.html box_middle.html box_end.html box_begin.html section_end.html section_begin.html ; do
    make_link $j $i/$j
  done
done

make_link gtk_news.html news/gtk_news.html
make_link gtk_app_categories.html apps/gtk_app_categories.html
make_link gtk_app_index.html apps/gtk_app_index.html
make_link web/alphabetically.html apps/index.html

( cd $INSTALLDIR && ln -s tutorial2.0 tutorial )

( cd $INSTALLDIR 
  find . ! -group gtk -exec chgrp gtk \{\} \;
  find . -type f -a  ! -perm -0060 -exec chmod g+rw \{\} \;
  find . -type d -a  ! -perm -0070 -exec chmod g+rwx \{\} \; )
 
