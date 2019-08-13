echo 'structurizing the website...'

ls ../node_modules

mv ../node_modules/* ../assets/ -f

rm -rf ../node_modules