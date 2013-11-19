<?php
require('../vendor/autoload.php');

use PhpWhois\Whois;

$whois = new Whois('google.com');

echo $whois->lookup();
