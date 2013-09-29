# PHPwhois

[![Build Status](https://secure.travis-ci.org/maastermedia/phpwhois.png?branch=master)](http://travis-ci.org/maastermedia/phpwhois)

**Warning**: This library is in development phase and is not stable for real usage yet.

PHP whois library inspired by PHPWhois.org library, updated for more recent version of PHP and with more domains lookups.

## Installation

```bash
php composer.phar require maastermedia/phpwhois
```

Basic usage:

```php
<?php
// index.php
require('vendor/autoload.php');

$whois = new Phpwhois();
```

## Documentation

Documentation for using phpwhois can be found in [doc folder](doc).

## License

This library is licensed under the [MIT License](LICENSE).
