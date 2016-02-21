Packagist Stats
===============

Packagist Stats was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and is a simple command line tool to display aggregated download statistics for packagist packages. Feel free to check out the [releases](https://github.com/GrahamCampbell/Packagist-Stats/releases), [license](LICENSE.md), and [contribution guidelines](CONTRIBUTING.md).

![Packagist Stats](https://cloud.githubusercontent.com/assets/2829600/5329155/f680c64e-7d97-11e4-9900-fce3380d8a37.PNG)

<p align="center">
<a href="https://styleci.io/repos/27651218"><img src="https://styleci.io/repos/27651218/shield" alt="StyleCI Status"></img></a>
<a href="https://travis-ci.org/GrahamCampbell/Packagist-Stats"><img src="https://img.shields.io/travis/GrahamCampbell/Packagist-Stats/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Packagist-Stats/code-structure"><img src="https://img.shields.io/scrutinizer/coverage/g/GrahamCampbell/Packagist-Stats.svg?style=flat-square" alt="Coverage Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Packagist-Stats"><img src="https://img.shields.io/scrutinizer/g/GrahamCampbell/Packagist-Stats.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/GrahamCampbell/Packagist-Stats/releases"><img src="https://img.shields.io/github/release/GrahamCampbell/Packagist-Stats.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## Documentation

This project is relatively small, and it's usage is pretty simple. [PHP](https://php.net) 7.0+ is required.

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer global require graham-campbell/packagist-stats
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


## Security

If you discover a security vulnerability within this package, please send an e-mail to Graham Campbell at graham@alt-three.com. All security vulnerabilities will be promptly addressed.


## License

Packagist Stats is licensed under [The MIT License (MIT)](LICENSE).
