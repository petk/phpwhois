<?php

declare(strict_types=1);

namespace PhpWhois\Tests\Validator;

use PHPUnit\Framework\Attributes\DataProvider;
use PhpWhois\Tests\PhpWhoisTestCase;
use PhpWhois\Validator\IpValidator;

class IpValidatorTest extends PhpWhoisTestCase
{
    #[DataProvider('ipProvider')]
    public function testValidate($ip, $isValid): void
    {
        $validator = new IpValidator();

        $this->assertSame($isValid, $validator->validate($ip));
    }

    public static function ipProvider(): array
    {
        return [
            ['127.0.0.1', true],
            ['::1', true],
            ['2001:4860:4860::8844', true],
            ['test.test.test.test', false],
        ];
    }
}
