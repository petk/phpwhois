# PhpWhois installation

You can install the PhpWhois library with composer (recommended way):

```bash
php composer.phar require maastermedia/phpwhois
```

or by downloading it from GitHub directly.

## Autoloading

You can load PhpWhois library by using composer's autoloader:

```php
<?php
// index.php
require('vendor/autoload.php');

use PhpWhois\Whois;

$whois = new Whois('yourdomain.tld');
```

or use Symfony2 ClassLoader component.
