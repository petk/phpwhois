<?php
require('../vendor/autoload.php');

use PhpWhois\Whois;

$whois = new Whois('google.com');

echo '<pre>';
echo $whois->lookup();
echo '</pre>';
