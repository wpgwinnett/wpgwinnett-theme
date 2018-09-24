# WordPress Gwinnett theme

[WordPress Gwinnett](https://wpgwinnett.com) is an official WordPress meetup chapter, and this is the theme used to power our website.

We're using [Mythic](https://github.com/justintadlock/mythic) as a starter, because its

> primary goal is to offer a modern development experience for WordPress theme authors while sticking as close to possible to WordPress standards as we can.

## Requirements

There are a few requirements for using this theme or contributing:

* PHP 5.6+ (preferably 7+).
* [Git](https://git-scm.com/) for version control.
* [Composer](https://getcomposer.org/) for managing PHP dependencies.
* [Node 8+](https://nodejs.org).
* [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/en/) (your choice) for managing JS dependencies.

You should feel reasonably comfortable using the command line. The theme tries to keep this as simple as possible, but some command line knowledge is necessary in modern development.

## Installation

1. Fork this repo and clone to your `wp-content/themes` folder
2. Open the command line utility on your computer, and in the theme folder you just cloned (e.g. `wpgwinnett-theme`), run the following to pull in the dependencies:
    ```bash
    > composer install
    > npm install
    ```
3. Activate the theme

## Copyright and License

The WordPress Gwinnett theme is licensed under the [GNU GPL](https://www.gnu.org/licenses/gpl-2.0.html), version 2 or later.

&copy; 2018, WordPress Gwinnett contributors.
