Packagist Stats
===============

Packagist Stats was created by, and is maintained by [Graham Campbell](https://github.com/GrahamCampbell), and is a simple command line tool to display aggregated download statistics for packagist packages. Feel free to check out the [change log](CHANGELOG.md), [releases](https://github.com/GrahamCampbell/Packagist-Stats/releases), [license](LICENSE.md), [api docs](http://docs.grahamjcampbell.co.uk), and [contribution guidelines](CONTRIBUTING.md).

![Packagist Stats](https://cloud.githubusercontent.com/assets/2829600/5329155/f680c64e-7d97-11e4-9900-fce3380d8a37.PNG)


<p align="center">
<a href="https://travis-ci.org/GrahamCampbell/Packagist-Stats"><img src="https://img.shields.io/travis/GrahamCampbell/Packagist-Stats/master.svg?style=flat-square" alt="Build Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Packagist-Stats/code-structure"><img src="https://img.shields.io/scrutinizer/coverage/g/GrahamCampbell/Packagist-Stats.svg?style=flat-square" alt="Coverage Status"></img></a>
<a href="https://scrutinizer-ci.com/g/GrahamCampbell/Packagist-Stats"><img src="https://img.shields.io/scrutinizer/g/GrahamCampbell/Packagist-Stats.svg?style=flat-square" alt="Quality Score"></img></a>
<a href="LICENSE.md"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></img></a>
<a href="https://github.com/GrahamCampbell/Packagist-Stats/releases"><img src="https://img.shields.io/github/release/GrahamCampbell/Packagist-Stats.svg?style=flat-square" alt="Latest Version"></img></a>
</p>


## Documentation

This project is relatively small, and it's usage is pretty simple.

Installation via composer:

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


## License

The MIT License (MIT)

Copyright (c) 2014 Graham Campbell

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
