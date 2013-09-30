<?php

/*
 * This file is part of the PHPWhois package.
 *
 * (c) Peter Kokot <peterkokot@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpWhois;

use PhpWhois\Server;
use PhpWhois\Validator;

/**
 * Whois
 * @author Peter Kokot <peterkokot@gmail.com>
 */
class Whois
{
    const VERSION = "1.0-dev";

    public $domain;

    public $tld;

    public $ip = null;

    private $server;

    /**
     * Constructor.
     *
     * @param $domain string Domain name
     */
    public function __construct($domain)
    {
        $this->domain = $this->clean($domain);
        $validator = new Validator();

        // check if domain is ip
        if($validator->validateIp($this->domain)) {
            $this->ip = $this->domain;
        } elseif($validator->validateDomain($this->domain)) {
            $domainParts = explode(".", $this->domain);
            $this->tld = strtolower(array_pop($domainParts));
        } else {
            die('Domain seems to be invalid.');
        }
    }

    /**
     * Cleans domain name of empty spaces, www and http.
     *
     * @param $domain string Domain name
     *
     * @return string
     */
    public function clean($domain)
    {
        $domain = trim($domain);
        if(substr(strtolower($domain), 0, 7) == "http://") $domain = substr($domain, 7);
        if(substr(strtolower($domain), 0, 4) == "www.") $domain = substr($domain, 4);

        return $domain;
    }

    public function getData()
    {
        if($this->ip) {
            $result = $this->lookupIp($this->ip);
        } else {
            $result = $this->lookupDomain($this->domain);
        }
        return $result;
    }

    /**
     * Domain lookup
     */
    public function lookupDomain($domain)
    {
        $serverObj = new Server();
        $server = $serverObj->getServerByTld($this->tld);
        if(!$server) {
            return "Error: No appropriate Whois server found for $domain domain!";
        }
        $result = $this->queryServer($server, $domain);
        if(!$result) {
            return "Error: No results retrieved from $server server for $domain domain!";
        } else {
            while(strpos($result, "Whois Server:") !== FALSE){
                preg_match("/Whois Server: (.*)/", $result, $matches);
                $secondary = $matches[1];
                if($secondary) {
                    $result = $this->queryServer($secondary, $domain);
                    $server = $secondary;
                }
            }
        }
        return "$domain domain lookup results from $server server:\n\n" . $result;
    }

    public function lookupIp($ip)
    {
        $results = array();

        $continentServer = new Server();
        foreach($continentServer->getContinentServers() as $server) {
            $result = $this->queryServer($server, $ip);
                if($result && !in_array($result, $results)) {
                    $results[$server]= $result;
                }
        }
        $res = "RESULTS FOUND: " . count($results);
        foreach($results as $server=>$result) {
            $res .= "Lookup results for " . $ip . " from " . $server . " server: " . $result;
        }
        return $res;
    }

    public function queryServer($server, $domain)
    {
        $port = 43;
        $timeout = 10;
        $fp = @fsockopen($server, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
        //  if($server == "whois.verisign-grs.com") $domain = "=".$domain; // whois.verisign-grs.com requires the equals sign ("=") or it returns any result containing the searched string.
        fputs($fp, $domain . "\r\n");
        $out = "";
        while(!feof($fp)){
            $out .= fgets($fp);
        }
        fclose($fp);

        $res = "";
        if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
            $rows = explode("\n", $out);
            foreach($rows as $row) {
                $row = trim($row);
                if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
                    $res .= $row."\n";
                }
            }
        }
        return $res;
    }
}
