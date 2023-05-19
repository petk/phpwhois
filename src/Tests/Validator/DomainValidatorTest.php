<?php

declare(strict_types=1);

namespace PhpWhois\Tests\Validator;

use PHPUnit\Framework\Attributes\DataProvider;
use PhpWhois\Tests\PhpWhoisTestCase;
use PhpWhois\Validator\DomainValidator;

class DomainValidatorTest extends PhpWhoisTestCase
{
    #[DataProvider('domainProvider')]
    public function testValidate($domain, $isValid): void
    {
        $validator = new DomainValidator();

        $this->assertSame($isValid, $validator->validate($domain));
    }

    public static function domainProvider(): array
    {
        return [
            ['google.com', true],
            ['goo gle.com', false],
            ['php.net', true],
            ['google.e', false],
            ['šport.si', true],
            ['http://www.google.com', true],
            ['abcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabc.com', true],
            ['abcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabc.abcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabc', true],
            ['abcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabc.abcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabcdefdasdfasdfabca', false],
            ['camping.ziemys.net', false],
            ['.example.com', false],
            ['example.com.', false],
            ['MM.si', true]
        ];
    }
}
