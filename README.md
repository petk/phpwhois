# PhpWhois

![Test workflow](https://github.com/petk/phpwhois/actions/workflows/tests.yaml/badge.svg)

## About

**Warning**: This library is in development phase and is not stable for real
usage yet.

PhpWhois library is inspired by PHPWhois.org library and others, but aims to be
updated for more recent version of PHP and with more domain servers.

## Requirements

PhpWhois library requires PHP 8.1.

## Documentation

### Installation

You can install the PhpWhois library with Composer (recommended way):

```bash
composer require petk/phpwhois
```

### Autoloading

You can load PhpWhois library by using Composer's autoloader:

```php
<?php
// index.php
require('vendor/autoload.php');

use PhpWhois\Whois;

$whois = new Whois('yourdomain.tld');
echo $whois->lookup();
```

## License

This library is licensed under the [MIT License](LICENSE).
