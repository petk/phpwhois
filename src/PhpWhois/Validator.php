<?php
/*
 * This file is part of the PhpWhois package.
 *
 * (c) Peter Kokot <peterkokot@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpWhois;

/**
 * Validator.
 */
class Validator
{
    /**
     * Validates domain name.
     *
     * @param string $domain Domain name
     */
    public function validateDomain($domain)
    {
        if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
            return false;
        }
        return $domain;
    }

    /**
     * Validates if string is IP.
     *
     * @param string $ip IP or domain name
     *
     * @return boolean|string $ip IP or domain name
     */
    public function validateIp($ip)
    {
        $ipnums = explode(".", $ip);
        if(count($ipnums) != 4) {
            return false;
        }
        foreach($ipnums as $ipnum) {
            if(!is_numeric($ipnum) || ($ipnum > 255)) {
                return false;
            }
        }
        return $ip;
    }
}
