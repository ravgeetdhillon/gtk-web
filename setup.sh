# install npm dependencies
npm install


# install gem dependencies
gem install bundler -v "$(grep -A 1 "BUNDLED WITH" Gemfile.lock | tail -n 1)"
bundle install


# script for fetching api data
echo 'creating directory for storing api results...'
mkdir _data/api_fetch
echo 'getting the api data from the gitlab...'
curl -o- https://gitlab.gnome.org/api/v4/projects/665/repository/tags?search=^3.24 > _data/api_fetch/old_stable_tags.json
curl -o- https://gitlab.gnome.org/api/v4/projects/665/repository/tags?search=^4.0 > _data/api_fetch/stable_tags.json
echo 'successfully fetched gtk-release-tags'
curl -o- https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fblog.gtk.org%2Ffeed%2F > _data/api_fetch/gtk-blog-feed.json
echo 'successfully fetched the gtk blog feed in json format'
curl -o- https://gitlab.gnome.org/api/v4/projects/665/issues_statistics > _data/api_fetch/issues_stats.json
echo 'successfully fetched gtk-issue-statistics'
curl -o- https://gitlab.gnome.org/api/v4/projects/665/issues?state=opened > _data/api_fetch/issues_opened.json
echo 'successfully fetched gtk-issues'


# script for structuring the website
echo 'structuring the website...'
dependencies=('@fortawesome' 'bootstrap' 'jquery' 'moment' 'popper.js' 'slick-carousel')
for dependency in "${dependencies[@]}"
do
    rsync -a node_modules/${dependency} assets
    echo "Moved ${dependency} to assets/ folder"
done


# script for compiling scss to css
npm run compile-sass
