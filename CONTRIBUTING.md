---
permalink: /contributing
---

# Contributing to GTK.org

GTK.org welcomes everyone to contribute to the GTK.org. We really appreciate the efforts of people who help us in keeping the website updated. GTK.org is visted everyday by large number of developers and end users, so even your small contribution can make a huge impact on the community.

## Read this first

We suggest you to take a moment to review this document in order to make the contribution process easy and effective for everyone involved.

In order to maintain a uniformity across the website, we have made a certain set of rules and templates that you should follow in order to provide us with useful contributions. Following these guidelines will help to communicate that you respect the time of the developers managing and developing the website. In return, they should reciprocate that respect in addressing your issue, assessing changes, and helping you finalize your pull requests.

As for everything else in the project, the contributions to GTK.org are governed by our [Code of Conduct][code-of-conduct].

## What can you contribute

GTK.org is an open source project and we love to receive contributions from our community — you! You can contribute to the GTK.org in any way you want, that has the potential to make GTK.org a better website. Some common ways to contribute are listed below:
* Improving documentation
* Bug Tracking
* Feature Requests
* Design Refactoring
* Images and Illustrations
* New Content
* Blog Posts
* Usecase Studies

### Adding Documentation pages

Documentation pages are those which are listed under the `/docs/*` URL pattern.

To add a new documentation page, follow the steps below:
1. Add a new `.md` file with the following naming convention:
  * `<doc-page-name>.md` where `<doc-page-name>` is the name of the page. (Name should be assigned according to how it will appear in the URL)
2. In this new Markdown file, add the following front matter along with the file's content:
```
permalink: /path/to/:name
# specifies the URL path of the file which will be appended to the site's url
```
3. Add the information about the new file to [\_data/stuff.yml](_data/stuff.yml).
4. Send a merge request using one of the merge request template.

> If want a more detailed explanation about how to do the thing, you can check this [blog post](https://ravgeetdhillon.github.io/blog/adding-pages-to-jekyll-site/) by [Ravgeet Dhillon](https://gitlab.gnome.org/ravgeetdhillon/) on how to add documentation pages to the GTK website.

### Images and Illustrations

All the images and illustrations are present in the [assets/img][image-directory] directory. The following naming convention should be used when new images or illustrations are to be added:

`<role>-<name>.<ext>`

where
* `<role>` is the context for which the image is used in the website. For example if the image is going to be used in documentation pages, the `<role>` would be doc
* `<name>` is the name of the image. (Make sure that you provide a unique name for the image)
* `<ext>` is the extension of the image. Valid extensions are `.jpg`, `.jpeg`, `.svg`, `.png` and others. (Make sure that the images/illustrations you provide are optimized for size and quality)

> A valid image name for an image to be used as a wallpaper or just a display image is: `wall-computer.png` or `wallpaper-computer.png`

### Links and Paths

All the links and paths are relative to the website URL. Donot give absolute URLs for lniks, images, scripts or any other resources that use the `path` attribute. Use of absolute URL is only appreciable when refering to am external resource.

### Adding/Updating/Removing Dependencies

1. Create a local clone of the website:
```
$ git clone https://gitlab.gnome.org/Infrastructure/gtk-web.git
```
2. Change into the gtk-web directory:
```
$ cd gtk-web
```
3. Based on what you want to do, proceed further as given below:
  * #### Adding Dependency
  To add a new dependency, run the following command:
  ```
  $ npm install <package-name> --save
  ```
  * #### Updating Dependency
  To add update a particular dependency, run the following command:
  ```
  $ npm update <package-name> --save
  ```
  To add update all the dependencies, run the following command:
  ```
  $ npm update --save
  ```
  * #### Removing Dependency
  To remove a new dependency, run the following command:
  ```
  $ npm uninstall <package-name> --save
  ```

## How to submit a contribution

#### For listing bugs
1. Open an issue and provide us with appropriate information using our [Issue Template]().
2. (Optional) If you can solve the issue filed by you, read below on how to submit a pull request.

#### For feature requests
If you find yourself wishing for a something that doesn't exist in GTK.org, you are probably not alone. Open an issue which describes the feature you would like to see, how it would affect the community, and how it should work.

#### For sending Pull Requests
1. Create your own fork of the code.
2. Do the changes in your fork.
3. Send us a pull request with appropriate information using our Pull Request Template.

## Community
You can chat with the core team on IRC. The core is available to discuss about the things that can make the website better.

<!-- markdown variables -->
[code-of-conduct]: CODE_OF_CONDUCT.MD/
[image-directory]: assets/img/
