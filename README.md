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
    │   ├── sample_codes.yml                #---update this
    │   ├── labels.json                     
    │   ├── members_all.json                
    │   ├── members.json                    
    │   └── usecases.yml                    #---update this
    ├── _includes                           #contains site's include files
    │   ├── footer.html                     #the footer of the site
    │   ├── header.html                     #the meta data of the site
    │   └── navbar.html                     #the navbar of the site
    ├── _layouts                            #contains layout designs for site's pages
    │   └── documentation.html              #layout design for pages that belong to GTK documentation
    ├── .gitlab                             #contains gitlab template files for bugs and merge requests
    ├── assets                              #contains site's valuable entities
    │   ├── css                             #contains site's stylesheets
    │   │   ├── colorful.css                #stylesheet for syntax highlighting
    │   │   ├── index.css                   #stylesheet for user defined styles
    │   │   ├── markdown.css                #stylesheet for styling the markdown content
    │   │   ├── theme.css                   #stylesheet for website's theme. Generated from Bootstrap
    │   │   └── theme.css.map
    │   ├── font                            #contains site's font: Red Hat Display
    │   ├── img                             #contains site's images and illustrations
    │   └── scss                            #contains site's preprocessor stylesheets
    │       └── theme.scss
    ├── collections                         #contains the site's collections
    │   ├── _pages                          #contains site's main pages
    │   └── _docs                           #contains pages for GTK documentation section
    ├── scripts                             #contains the site's shell scripts for gitlab ci
    ├── ├── compile-sass.sh                 #script to compile sass files to css
    ├── ├── get-api-data.sh                 #script to fetch gitlab api data regarding the gtk
    ├── └── structurize.sh                  #script to structure the website after the dependencies
    ├── _config.yml                         #contains Jekyll settings for the site
    ├── .gitignore
    ├── .gitlab-ci.yml                      #for Gitlab Continuous Integration and Deployment
    ├── 404.html
    ├── CODE_OF_CONDUCT.md
    ├── CONTRIBUTING.md
    ├── Gemfile                             #contains gem dependencies for the site.
    ├── Gemfile.lock
    ├── LICENSE.txt
    ├── package-lock.json
    ├── package.json                        #contains node dependencies for the site.
    └── README.md

## Contributing

We always welcome people who want to contribute towards our project. For suitable information on how can you contribute to the website, on how to report bugs, on how to request new features or anything that can make the website a better experience for the end users, please read on [how to contribute][contributing].

## Setup the website locally

To get the site up and running locally, follow the below steps:

1. Install a full [Ruby development environment](https://jekyllrb.com/docs/installation/).
2. Install Jekyll and [bundler](https://jekyllrb.com/docs/ruby-101/#bundler) [gems](https://jekyllrb.com/docs/ruby-101/#gems).
```shell
gem install bundler jekyll
```
3. Create a local clone of the website:
```git
git clone https://gitlab.gnome.org/ravgeetdhillon/gtk-web.git
```
4. Change into the gtk-web directory
```shell
cd gtk-web
```
5. Install the NPM and Gem dependencies by running the following commands:
```shell
npm install
bundle install
```
6. Perform the following commands to install and structure the website properly:
```shell
scripts/structurize.sh
scripts/compile-sass.sh
scripts/get-api-fetch.sh
```
7. Build the site and make it available on a local server
```shell
$ bundle exec jekyll serve
```
8. Browse to [http://localhost:4000](http://localhost:4000) to view the website.

## Dependencies

GTK.org relies on the dependencies as well. These dependencies are provided in the Ruby `Gemfile` or NPM's `package.json`. Following table shows the list of dependencies used by this project:

Package | Version | File | Source
--- | --- | --- | ---
bootstrap | `4.3.1` | [package.json][package.json] | [Github](https://github.com/twbs/bootstrap)
@fortawesome/fontawesome-free | `5.9.0` | [package.json][package.json] | [Github](https://github.com/FortAwesome/Font-Awesome)
jquery | `3.4.1` | [package.json][package.json] | [Github](https://github.com/jquery/jquery)
popper.js | `1.15.0` | [package.json][package.json] | [Github](https://github.com/FezVrasta/popper.js/)
slick-carousel | `1.8.1` | [package.json][package.json] | [Github](https://github.com/kenwheeler/slick/)
moment | `2.24.0` | [package.json][package.json] | [Github](https://github.com/moment/moment/)
node-sass | `4.12.0` | [package.json][package.json] | [Github](https://github.com/sass/node-sass/)
jekyll | `3.8.5` | [Gemfile][Gemfile] | [Github](https://github.com/jekyll/jekyll/)

Read about adding/updating/removing dependencies on [how to contribute](CONTRIBUTING.MD#addingupdatingremoving-dependencies).

## Pipeline

The pipeline used by the website is the top-level component of continuous integration, delivery, and deployment.

The pipeline defined by the GTK.org uses the `Ruby2.5` image. There are different jobs that are happening across a pipeline in different stages. The jobs define what to run and stages define when and how to run. If a pipeline completes successfully without any error, then the final site is built into the `public` directory and is available for download as an artifact.

GTK.org builds in four stages:

* installation
* structuring
* generation
* test
* deploy

Each stage has certain jobs associated with it. `installation`, `structuring` and `generation` are primary stages common to all the branches. `test` stage is performed on all branches except `master`. `deploy` stage on the other hand is performed only on `master` branch.

> If you think that there can be a better pipeline than the existing one, send us a merge request for the same.

## Maintainers

You can reach out to the following individuals if you have any doubt or suggestion regarding the GTK.org:

**Ravgeet Dhillon**
* You can contanct Ravgeet via my [email](mailto:ravgeetdhillon@gmail.com).
* You can also find me on IRC. I am `ravgeetdhillon` on `irc.gnome.org` in the `#gtk` or
  `#gnome-hackers` channels.

**Emmanuele Bassi**
* You can contact me Emmanuele my [email](mailto:ebassi@gnome.org).

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