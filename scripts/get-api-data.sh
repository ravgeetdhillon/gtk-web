echo 'creating directory for storing api results...'

mkdir ../_data/api_fetch

echo 'getting the api data from the gitlab...'

curl https://gitlab.gnome.org/api/v4/projects/665/repository/tags?order_by=name > ../_data/api_fetch/tags.json

echo 'successfully fetched gtk-release-tags'

curl https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fblog.gtk.org%2Ffeed%2F > ../_data/api_fetch/gtk-blog-feed.json

echo 'successfully fetched the gtk blog feed in json format'

curl https://gitlab.gnome.org/api/v4/projects/665/issues_statistics > ../_data/api_fetch/issues_stats.json

echo 'successfully fetched gtk-issue-statistics'

curl https://gitlab.gnome.org/api/v4/projects/665/issues?state=opened > ../_data/api_fetch/tags.json

echo 'successfully fetched gtk-issues'

ls ../_data/api_fetch