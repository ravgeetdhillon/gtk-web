# GTK's Official Website

We are soon going to replace the [current website](https://gtk.org) with this one: [Upcoming GTK Website](https://ravgeetdhillon.pages.gitlab.gnome.org/gtk-web)

## About

GTK.org is a official website for GTK Project. The site is developed with and maintained using [Jekyll][official-jekyll], a Static Site Generator developed with Ruby. The site uses following types of files for the content generation:
* HTML files with extension `.html`
* Markdown files with extension `.md`

The data used by the site is stored in the form of following files:
* YAML files with extension `.yml`
* JSON files with extension `.json`

## Project Structure

    ...
    ├── _data                               #contains site's data files
    │   ├── apps.yml                        #list of apps to show on index.html slider section
    │   ├── navigation.yml                  #links to be added to the site's header and footer sections
    │   ├── sample_codes.yml                #update this
    │   ├── stuff.yml                       #site's global variables
    │   └── usecases.yml                    #update this
    ├── _includes                           #contains site's include files
    │   ├── footer.html                     #the footer of the site
    │   └── header.html                     #the header of the site
    ├── _layouts                            #contains layout designs for site's pages
    │   └── documentation.html              #layout design for pages that belong to GTK documentation
    ├── _posts
    ├── assets                              #contains site's valuable entities
    │   ├── css                             #contains site's stylesheets
    │   │   ├── colorful.css                #stylesheet for syntax highlighting
    │   │   ├── index.css                   #stylesheet for user defined styles
    │   │   ├── markdown.css                #stylesheet for styling the markdown content
    │   │   ├── theme.css                   #stylesheet for website's theme. Generated from Bootstrap
    │   │   └── theme.css.map
    │   ├──img                              #contains site's images and illustrations
    │   ├── js                              #contains site's javascripts
    │   ├── scss                            #contains site's preprocessor stylesheets
    │   │   └── theme.scss
    ├── collections
    │   └── _docs
    ├── _config.yml                         #contains Jekyll settings for the site
    ├── .gitignore
    ├── .gitlab-ci.yml                      #for Gitlab Continuous Integration and Deployment
    ├── 404.html
    ├── CONTRIBUTING.md
    ├── docs.html
    ├── features.html
    ├── Gemfile                             #contains gem dependencies for the site.
    ├── Gemfile.lock
    ├── index.html
    ├── package-lock.json
    ├── package.json                        #contains node dependencies for the site.
    └── README.md

## Contributing

We always welcome people who want to contribute towards our project. For suitable information on how can you contribute to the website, on how to report bugs, on how to request new features or anything that can make the website a better experience for the end users, please read on [how to contribute][contributing].

## Develop the website locally

If you want to get the site up and running locally, here's the TLDR:

```
git clone https://gitlab.gnome.org/ravgeetdhillon/gtk-web.git
cd gtk-web
npm install
bundle install
```

## Dependencies

GTK.org relies on the dependencies as well. These dependencies are provided in the Ruby `Gemfile` or NPM's `package.json`. Following table shows the list of dependencies used by this project:

Package | Version | File
--- | --- | ---
bootstrap | `4.3.1` | [package.json][package.json]
@fortawesome/fontawesome-free | `5.8.2` | [package.json][package.json]
jquery | `3.4.1` | [package.json][package.json]
popper.js | `1.15.0` | [package.json][package.json]
slick-carousel | `1.8.1` | [package.json][package.json]
jekyll | `3.8.5` | [Gemfile][Gemfile]

## Maintainers

You can reach out to the following individuals if you have any doubt or suggestion regarding the GTK.org:

**Ravgeet Dhillon**
* You can contanct me via my [email](mailto:ravgeetdhillon@gmail.com).
* You can also find me on IRC. I am `ravgeetdhillon` on `irc.gnome.org` in the `#gtk` or
  `#gnome-hackers` channels.

**Emmanuele Bassi**
* You can contact me via my [email](mailto:ebassi@gnome.org).

## Code of Conduct

GTK is an open source project with a contributor community that spans across the globe. We want everyone in our community to feel safe and encourage the participation of people from all forms of backgrounds, regardless of experience level, age, gender, identity, race, religion, or nationality.
We expect all contributors to uphold the [Code of Conduct][code-of-conduct].

## License Information

GTK.org is licensed under the [Creative Commons BY-SA-4.0][license].

<!-- markdown variables -->
[contributing]: CONTRIBUTING.MD
[code-of-conduct]: CODE_OF_CONDUCT.MD
[official-jekyll]: https://jekyllrb.com
[package.json]: package.json
[Gemfile]: Gemfile
[license]: LICENSE.txt