<?php

namespace PhpWhois\Tests;

class DomainTest extends TestCase
{
    /**
     * @test
     * @expectedException        Exception
     * @expectedExceptionMessage Domain seems to be invalid.
     */
    public function it_should_throw_exception_when_wrong_domain_is_given()
    {
        $whois = new \PhpWhois\Whois('camping.ziemys.net');
        $whois->lookup();
    }
}