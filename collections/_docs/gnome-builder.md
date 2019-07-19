---
permalink: /docs/dev-tools/:name/
---
# GNOME Builder

![GNOME Builder](/assets/img/docs/doc-builder.png)

GNOME Builder is a toolsmith for GNOME-based applications. It is a tool to help you write and contribute to great GNOME-based applications.

Visit the [official site for GNOME Builder](https://wiki.gnome.org/Apps/Builder).

***

## Features

### Global search

* Search for files, classes, and functions with lightning fast fuzzy search.
* Explore APIs used by your project with auto-completion for C/C++, Python, Rust, and Vala. For languages without native support, ctags integration is provided.
* Never lose your place in large code bases thanks to Builder's source code map.

## Getting Builder
Builder is available for download through most popular distributions' software centers. Source code can be obtained from Builder's git repository. Builder can also be installed and run via [Flatpak](https://wiki.gnome.org/Projects/SandboxedApps):

```
$ flatpak install --from https://flathub.org/repo/appstream/org.gnome.Builder.flatpakref
$ flatpak run org.gnome.Builder
```

## Getting in Touch
Questions regarding use and development of Builder are welcome though Builder's [IRC channel](irc://irc.gnome.org/%23gnome-builder) (`#gnome-builder` at `irc.gnome.org`).

## Filing a bug
If you found a problem or have a feature suggestion, feel free to [file a bug at GNOME's bug tracker](https://gitlab.gnome.org/GNOME/gnome-builder/issues).