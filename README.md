Packagist Stats
===============

Packagist Stats was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and is a simple command line tool to display aggregated download statistics for packagist packages. Feel free to check out the [releases](https://github.com/GrahamCampbell/Packagist-Stats/releases), [security policy](https://github.com/GrahamCampbell/Packagist-Stats/security/policy), [license](LICENSE), [code of conduct](.github/CODE_OF_CONDUCT.md), and [contribution guidelines](.github/CONTRIBUTING.md).

![Banner](https://user-images.githubusercontent.com/2829600/71477093-0f3c7780-27e0-11ea-9d3e-4fb0af34bb07.png)

<p align="center">
<a href="https://github.com/GrahamCampbell/Packagist-Stats/actions?query=workflow%3ATests"><img src="https://img.shields.io/github/workflow/status/GrahamCampbell/Packagist-Stats/Tests?label=Tests&style=flat-square" alt="Build Status"></img></a>
<a href="https://github.styleci.io/repos/27651218"><img src="https://github.styleci.io/repos/27651218/shield" alt="StyleCI Status"></img></a>
<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/GrahamCampbell/Packagist-Stats/releases"><img src="https://img.shields.io/github/release/GrahamCampbell/Packagist-Stats?style=flat-square" alt="Latest Version"></img></a>
</p>


## Usage

This project is relatively small, and it's usage is pretty simple. [PHP](https://www.php.net/) 7.2-8.1 is required.

To get the latest version, simply require the project using [Composer](https://getcomposer.org/) or download the phar from the [releases](https://github.com/GrahamCampbell/Packagist-Stats/releases) page:

```bash
$ composer global require "graham-campbell/packagist-stats:^5.3"
```

Show the stats for all packages under the `graham-campbell` vendor:

```bash
$ stats show graham-campbell
```

Show the stats for the `graham-campbell/packagist-stats` package:

```bash
$ stats show graham-campbell/packagist-stats
```

You may also pass as many vendor names or package names as you like, at once:

```bash
$ stats show graham-campbell phpunit mockery/mockery
```


## Building

The following documentation is for contributors to this package only.

To build the `phar` file, run:

```bash
$ make composer-install
$ make box-compiler
```


## Security

If you discover a security vulnerability within this package, please send an email to security@tidelift.com. All security vulnerabilities will be promptly addressed. You may view our full security policy [here](https://github.com/GrahamCampbell/Packagist-Stats/security/policy).


## License

Packagist Stats is licensed under [The MIT License (MIT)](LICENSE).
