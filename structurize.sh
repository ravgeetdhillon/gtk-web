mv node_modules/bootstrap assets/ -f
mv node_modules/jquery assets/ -f
mv node_modules/popper.js assets/ -f
mv node_modules/@fortawesome assets/ -f
mv node_modules/slick-carousel assets/ -f
mv node_modules/moment assets/ -f
rm -rf node_modules
sass assets/scss/theme.scss assets/css/theme.css