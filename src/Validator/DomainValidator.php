<?php

declare(strict_types=1);

namespace PhpWhois\Validator;

/**
 * Validates domain name.
 */
class DomainValidator
{
    /**
     * Validates domain name.
     *
     * @param string $domain Domain name
     */
    public function validate(string $domain): bool
    {
        // Convert domain name to IDNA ASCII form.
        $asciiDomain = idn_to_ascii($domain);

        if (false === $asciiDomain) {
            return false;
        }

        // Remove possible HTTP/S.
        if (stripos($asciiDomain, 'http://') === 0) {
            $asciiDomain = substr($asciiDomain, 7);
        } elseif (stripos($asciiDomain, 'https://') === 0) {
            $asciiDomain = substr($asciiDomain, 8);
        }

        // Remove possible www part.
        if(stripos($asciiDomain, 'www.') === 0) {
            $asciiDomain = substr($asciiDomain, 4);
        }

        // Check filtered domain name pattern against the regex.
        if (!preg_match("/^([-a-z0-9]{2,63})\.([a-z]{2,63})$/", $asciiDomain)) {
            return false;
        }

        // Ending FILTER_VALIDATE_URL validation.
        return false !== filter_var('http://' . $asciiDomain, \FILTER_VALIDATE_URL);
    }
}
