@echo off

bundle install & npm install & move /Y node_modules/bootstrap assets/ & move /Y node_modules/jquery assets/ & move /Y node_modules/popper.js assets/ & rmdir node_modules /S /Q & sass assets/scss/theme.scss assets/css/theme.css
