<?php

declare(strict_types=1);

namespace PhpWhois\Tests;

use PhpWhois\Whois;

class DomainTest extends PhpWhoisTestCase
{
    public function testThrowException(): void
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Domain seems to be invalid.');

        $whois = new Whois('camping.ziemys.net');
        $whois->lookup();
    }
}
