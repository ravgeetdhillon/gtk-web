#!/bin/sh

cd /home/web/gtk/www.gtk.org

rm -f gtkdotorg.html
wget -q http://core.freshmeat.net/backend/gtkdotorg.html 

rm -f gtk-index.html
wget -q http://core.freshmeat.net/backend/gtk-index.html 

rm -f gtk-categories.html
wget -q http://core.freshmeat.net/backend/gtk-categories.html 

if [ -f gtkdotorg.html ]; then
  mv gtkdotorg.html gtk_news.html
fi

if [ -f gtk-index.html ]; then
  mv gtk-index.html gtk_app_index.html
fi

if [ -f gtk-categories.html ]; then
  mv gtk-categories.html gtk_app_categories.html
fi

if [ -f gtk_news.html ]; then
  ./last_10.pl
  mv gtk_news_top_10_tmp.html gtk_news_top_10.html
fi

#nothing to do with freshmeat
./update_mirrors.sh
