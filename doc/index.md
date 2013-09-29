# PHP Whois library documentation

## Installation

You can install the PhpWhois library by composer (recommended way):

```bash
php composer.phar maastermedia/phpwhois
```

or by downloading it from GitHub directly.

## Load library

You can load Phpwhois library by using composer's autoloader:

```php
<?php
// index.php
require('vendor/autoload.php');

$whois = new Phpwhois();
```

or use Symfony2 ClassLoader component.
