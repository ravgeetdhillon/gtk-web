# GTK's Official Website

The source for the [GTK website](https://www.gtk.org)

## About

GTK.org is a official website for GTK Project. The site is developed with
and maintained using [Jekyll][official-jekyll], a Static Site Generator
developed with Ruby. The site uses following types of files for the content
generation:

-   HTML files with extension `.html`
-   Markdown files with extension `.md`

The data used by the site is stored in the form of following files:

-   YAML files with extension `.yml`
-   JSON files with extension `.json`

## Project Structure

    ...
    ├── _data                               #contains site's data files
    │   ├── apps.yml                        #list of apps to show on index.html slider section
    │   ├── navigation.yml                  #links to be added to the site's header and footer sections
    │   ├── sample_codes.yml                #codes for language bindings
    │   └── labels.json
    ├── _includes                           #contains site's include files
    │   ├── footer.html                     #the footer of the site
    │   ├── header.html                     #the meta data of the site
    │   └── navbar.html                     #the navbar of the site
    ├── _layouts                            #contains layout designs for site's pages
    │   └── documentation.html              #layout design for pages that belong to GTK documentation
    ├── .gitlab                             #contains gitlab template files for bugs and merge requests
    ├── assets                              #contains site's valuable entities
    │   ├── font                            #contains site's font: Red Hat Display
    │   ├── img                             #contains site's images and illustrations
    │   └── scss                            #contains site's preprocessor stylesheets
    │       ├── colorful.scss               #stylesheet for syntax highlighting
    │       ├── index.scss                  #stylesheet for user defined styles
    │       ├── markdown.scss               #stylesheet for styling the markdown content
    │       └── theme.scss                  #stylesheet for website's theme. Generated from Bootstrap
    ├── _pages                              #contains site's main pages
    ├── _docs                               #contains pages for GTK documentation
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
    ├── README.md
    ├── setuid.html			    #referenced in code, **cannot be moved**
    └── setup.sh                            #script for setting up the website

## Contributing

We always welcome people who want to contribute towards our project. For
suitable information on how can you contribute to the website, on how to
report bugs, on how to request new features or anything that can make the
website a better experience for the end users, please read on [how to
contribute][contributing].

## Setup the website locally

To get the site up and running locally, follow the below steps:

1. Install a full [Ruby development environment](https://jekyllrb.com/docs/installation/).
2. Create a local clone of the website:

```
git clone https://gitlab.gnome.org/Infrastructure/gtk-web.git
```

3. Change into the gtk-web directory

```
cd gtk-web
```

4. Perform the following commands to install dependencies and structure the website properly:

```
chmod +x setup.sh && bash setup.sh
```

5. Build the site and make it available on your local server

```
$ bundle exec jekyll serve
```

6. Browse to [http://localhost:4000](http://localhost:4000) to view the website.

## Dependencies

GTK.org relies on the dependencies as well. These dependencies are provided
in the Ruby `Gemfile` or NPM's `package.json`. Following table shows the
list of dependencies used by this project:

| Package                       | Version  | File                         | Source                                                |
| ----------------------------- | -------- | ---------------------------- | ----------------------------------------------------- |
| bootstrap                     | `4.5.2`  | [package.json][package.json] | [Github](https://github.com/twbs/bootstrap)           |
| @fortawesome/fontawesome-free | `5.14.0` | [package.json][package.json] | [Github](https://github.com/FortAwesome/Font-Awesome) |
| jquery                        | `3.5.1`  | [package.json][package.json] | [Github](https://github.com/jquery/jquery)            |
| popper.js                     | `1.16.1` | [package.json][package.json] | [Github](https://github.com/FezVrasta/popper.js/)     |
| slick-carousel                | `1.8.1`  | [package.json][package.json] | [Github](https://github.com/kenwheeler/slick/)        |
| moment                        | `2.27.0` | [package.json][package.json] | [Github](https://github.com/moment/moment/)           |
| node-sass                     | `4.14.1` | [package.json][package.json] | [Github](https://github.com/sass/node-sass/)          |
| jekyll                        | `4.0.1`  | [Gemfile][gemfile]           | [Github](https://github.com/jekyll/jekyll/)           |

Read about adding/updating/removing dependencies on [how to contribute](CONTRIBUTING.MD#addingupdatingremoving-dependencies).

## Pipeline

The pipeline used by the website is the top-level component of continuous
integration, delivery, and deployment.

The pipeline defined by the GTK.org uses the `Ruby2.5` image. The pipeline
consists of a script that runs before the site is tested/deployed. The
script that runs before the test/deployment of the website basically
installs all the `gem/npm dependencies`, fetches the API data regarding the
GTK from its [gitlab instance][gtk-gitlab] and then structurizes the website
before testing/deploying.

`test` stage is performed on all branches but `master`. `deploy` stage on
the other hand is performed only on `master` branch.

## Maintainers

You can reach out to the following individuals if you have any doubt or suggestion regarding the GTK.org:

**Ravgeet Dhillon**

-   You can contact me via my [email](mailto:ravgeetdhillon@gmail.com) or through my [website](https://ravgeetdhillon.github.io).
-   You can also find me on IRC. I am `ravgeetdhillon` on `irc.gnome.org` in the `#gtk` or
    `#gnome-hackers` channels.

**Emmanuele Bassi**

-   You can contact me via my [email](mailto:ebassi@gnome.org).

## Code of Conduct

GTK is an open source project with a contributor community that spans across
the globe. We want everyone in our community to feel safe and encourage the
participation of people from all forms of backgrounds, regardless of
experience level, age, gender, identity, race, religion, or nationality. We
expect all contributors to uphold the [Code of Conduct][code-of-conduct].

## License Information

GTK.org is licensed under the [Creative Commons BY-SA-4.0][license].

<!-- markdown variables -->

[contributing]: CONTRIBUTING.MD
[code-of-conduct]: CODE_OF_CONDUCT.MD
[official-jekyll]: https://jekyllrb.com
[package.json]: package.json
[gemfile]: Gemfile
[license]: LICENSE.txt
[gtk-gitlab]: https://gitlab.gnome.org/GNOME/gtk/
