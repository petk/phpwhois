<?php

declare(strict_types=1);

namespace PhpWhois\Validator;

/**
 * Validates IP IPv4 and IPv6 address.
 */
class IpValidator
{
    /**
     * Validates if string is IP address.
     */
    public function validate(string $ip): bool
    {
        return false !== filter_var($ip, \FILTER_VALIDATE_IP, \FILTER_FLAG_IPV4 | \FILTER_FLAG_IPV6);
    }
}
