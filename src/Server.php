<?php

declare(strict_types=1);

namespace PhpWhois;

/**
 * Server class
 */
class Server
{
    /**
     * Available country TLDs or Whois servers for domain lookups.
     * source http://www.iana.org/domains/root/db/ and http://www.whois365.com/en/listtld/
     *
     * @var array $servers Array of whois servers for domain lookup.
     */
    private array $servers = [
        "ac" => "whois.nic.ac", // Ascension Island
        "academy" => "whois.donuts.co",
        "accountants" => "whois.donuts.co",
        "active" => "whois.afilias-srs.net",
        "actor" => "whois.unitedtld.com",
        // ad - Andorra - no whois server assigned
        "ae" => "whois.nic.ae", // United Arab Emirates
        "aero"=>"whois.aero",
        "af" => "whois.nic.af", // Afghanistan
        "ag" => "whois.nic.ag", // Antigua And Barbuda
        "agency" => "whois.donuts.co",
        "airforce" => "whois.unitedtld.com",
        "archi" => "whois.ksregistry.net",
        "army" => "whois.rightside.co",
        "associates" => "whois.donuts.co",
        "attorney" => "whois.rightside.co",
        "auction" => "whois.donuts.co",
        "audio" => "whois.uniregistry.net",
        "autos" => "whois.afilias-srs.net",
        "aw" => "whois.nic.aw",
        "ai" => "whois.ai", // Anguilla
        "al" => "whois.ripe.net", // Albania
        "am" => "whois.amnic.net",  // Armenia
        // an - Netherlands Antilles - no whois server assigned
        // ao - Angola - no whois server assigned
        // aq - Antarctica (New Zealand) - no whois server assigned
        // ar - Argentina - no whois server assigned
        "arpa" => "whois.iana.org",
        "as" => "whois.nic.as", // American Samoa
        "asia" => "whois.nic.asia",
        "at" => "whois.nic.at", // Austria
        "au" => "whois.aunic.net", // Australia
        // aw - Aruba - no whois server assigned
        "ax" => "whois.ax", // Aland Islands
        "az" => "whois.ripe.net", // Azerbaijan
        // ba - Bosnia And Herzegovina - no whois server assigned
        "bar" => "whois.nic.bar",
        "bargains" => "whois.donuts.co",
        "bayern" => "whois-dub.mm-registry.com",
        "bb" => "http://domains.org.bb/regsearch/getdetails.cfm?DND={domain}.bb", // Barbados
        // bd - Bangladesh - no whois server assigned
        "be" => "whois.dns.be", // Belgium
        "beer" => "whois-dub.mm-registry.com",
        "berlin" => "whois.nic.berlin",
        "best" => "whois.nic.best",
        "bj" => "whois.nic.bj", // Benin
        "bh" => "whois.nic.bh",
        "bi" => "whois.nic.bi", // Burundi
        "bid" => "whois.nic.bid",
        "bike" => "whois.donuts.co",
        "bio" => "whois.ksregistry.net",
        "biz" => "whois.biz",
        "bg" => "whois.register.bg", // Bulgaria
        "black" => "whois.afilias.net",
        "blackfriday" => "whois.uniregistry.net",
        "blue" => "whois.afilias.net",
        // bm - Bermuda - no whois server assigned
        "bmw" => "whois.ksregistry.net",
        "bn" => "whois.bn", // Brunei Darussalam
        "bo" => "whois.nic.bo", // Bolivia
        "boutique" => "whois.donuts.co",
        "br" => "whois.registro.br", // Brazil
        "brussels" => "whois.nic.brussels",
        "bt" => "whois.netnames.net", // Bhutan
        "build" => "whois.nic.build",
        "builders" => "whois.donuts.co",
        "buzz" => "whois.nic.buzz",
        // bv - Bouvet Island (Norway) - no whois server assigned
        "bw" => "whois.nic.net.bw", // Botswana
        "by" => "whois.cctld.by", // Belarus
        "bz" => "whois.belizenic.bz", // Belize
        "bzh" => "whois-bzh.nic.fr",
        "ca" => "whois.cira.ca", // Canada
        "cat" => "whois.cat", // Spain
        "cc" => "whois.nic.cc", // Cocos (Keeling) Islands
        "cd" => "whois.nic.cd", // Congo, The Democratic Republic Of The
        // cf - Central African Republic - no whois server assigned
        "ch" => "whois.nic.ch", // Switzerland
        "ci" => "whois.nic.ci", // Cote d'Ivoire
        "ck" => "whois.nic.ck", // Cook Islands
        "cl" => "whois.nic.cl", // Chile
        // cm - Cameroon - no whois server assigned
        "cn" => "whois.cnnic.net.cn", // China
        "co" => "whois.nic.co", // Colombia
        "com" => "whois.verisign-grs.com",
        "coop" => "whois.nic.coop",
        // cr - Costa Rica - no whois server assigned
        // cu - Cuba - no whois server assigned
        // cv - Cape Verde - no whois server assigned
        // cw - Curacao - no whois server assigned
        "cx" => "whois.nic.cx", // Christmas Island
        // cy - Cyprus - no whois server assigned
        "cz" => "whois.nic.cz", // Czech Republic
        "dance" => "whois.unitedtld.com",
        "dating" => "whois.donuts.co",
        "de" => "whois.denic.de", // Germany
        "deals" => "whois.donuts.co",
        "degree" => "whois.rightside.co",
        "democrat" => "whois.unitedtld.com",
        "dental" => "whois.donuts.co",
        "dentist" => "whois.rightside.co",
        "desi" => "whois.ksregistry.net",
        // dj - Djibouti - no whois server assigned
        "diamonds" => "whois.donuts.co",
        "digital" => "whois.donuts.co",
        "direct" => "whois.donuts.co",
        "directory" => "whois.donuts.co",
        "discount" => "whois.donuts.co",
        "dk" => "whois.dk-hostmaster.dk", // Denmark
        "dm" => "whois.nic.dm", // Dominica
        // do - Dominican Republic - no whois server assigned
        "domains" => "whois.donuts.co",
        "durban" => "durban-whois.registry.net.za",
        "dz" => "whois.nic.dz", // Algeria
        "ec" => "whois.nic.ec", // Ecuador
        "edu" => "whois.educause.edu",
        "ee" => "whois.eenet.ee", // Estonia
        "eg" => "whois.ripe.net", // Egypt
        // er - Eritrea - no whois server assigned
        "es" => "whois.nic.es", // Spain
        // et - Ethiopia - no whois server assigned
        "eu" => "whois.eu",
        "education" => "whois.donuts.co",
        "email" => "whois.donuts.co",
        "engineer" => "whois.rightside.co",
        "engineering" => "whois.donuts.co",
        "enterprises" => "whois.donuts.co",
        "equipment" => "whois.donuts.co",
        "estate" => "whois.donuts.co",
        "eus" => "whois.eus.coreregistry.net",
        "events" => "whois.donuts.co",
        "exchange" => "whois.donuts.co",
        "expert" => "whois.donuts.co",
        "exposed" => "whois.donuts.co",
        "fail" => "whois.donuts.co",
        "farm" => "whois.donuts.co",
        "feedback" => "whois.centralnic.com",
        "fi" => "whois.ficora.fi", // Finland
        "finance" => "whois.donuts.co",
        "financial" => "whois.donuts.co",
        "fish" => "whois.donuts.co",
        "fishing" => "whois-dub.mm-registry.com",
        "fitness" => "whois.donuts.co",
        "fj" => "whois.usp.ac.fj", // Fiji
        // fk - Falkland Islands - no whois server assigned
        "flights" => "whois.donuts.co",
        "florist" => "whois.donuts.co",
        "fm" => "http://www.dot.fm/query_whois.cfm?domain={domain}&tld=fm", // Micronesia, Federated States Of
        "fo" => "whois.nic.fo", // Faroe Islands
        "foo" => "domain-registry-whois.l.google.com",
        "foundation" => "whois.donuts.co",
        "fr" => "whois.nic.fr", // France
        "frogans" => "whois-frogans.nic.fr",
        "fund" => "whois.donuts.co",
        "furniture" => "whois.donuts.co",
        "futbol" => "whois.unitedtld.com",
        // ga - Gabon - no whois server assigned
        "gal" => "whois.gal.coreregistry.net",
        "gallery" => "whois.donuts.co",
        "gd" => "whois.nic.gd", // Grenada
        // ge - Georgia - no whois server assigned
        "gent" => "whois.nic.gent",
        // gf - French Guiana - no whois server assigned
        // gh - Ghana - no whois server assigned
        "gi" => "whois2.afilias-grs.net", // Gibraltar
        "gift" => "whois.uniregistry.net",
        "gives" => "whois.rightside.co",
        "gg" => "whois.gg", // Guernsey
        "gl" => "whois.nic.gl", // Greenland (Denmark)
        "glass" => "whois.donuts.co",
        "global" => "whois.afilias-srs.net",
        "globo" => "whois.gtlds.nic.br",
        "gop" => "whois-cl01.mm-registry.com",
        "gov" => "whois.nic.gov",
        "gr" => "",
        // gm - Gambia - no whois server assigned
        // gn - Guinea - no whois server assigned
        // gr - Greece - no whois server assigned
        "graphics" => "whois.donuts.co",
        "gratis" => "whois.donuts.co",
        "green" => "whois.afilias.net",
        "gripe" => "whois.donuts.co",
        "gt" => "http://www.gt/Inscripcion/whois.php?domain={domain}.gt", // Guatemala
        "guide" => "whois.donuts.co",
        "guitars" => "whois.uniregistry.net",
        "guru" => "whois.donuts.co",
        "gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
        // gu - Guam - no whois server assigned
        // gw - Guinea-bissau - no whois server assigned
        "gy" => "whois.registry.gy", // Guyana
        "hamburg" => "whois.nic.hamburg",
        "haus" => "whois.unitedtld.com",
        "hiphop" => "whois.uniregistry.net",
        "hiv" => "whois.afilias-srs.net",
        "hk" => "whois.hkirc.hk", // Hong Kong
        // hm - Heard and McDonald Islands (Australia) - no whois server assigned
        "hn" => "whois.nic.hn", // Honduras
        "holdings" => "whois.donuts.co",
        "holiday" => "whois.donuts.co",
        "homes" => "whois.afilias-srs.net",
        "horse" => "whois-dub.mm-registry.com",
        "host" => "whois.centralnic.com",
        "house" => "whois.donuts.co",
        "hr" => "whois.dns.hr", // Croatia
        "ht" => "whois.nic.ht", // Haiti
        "hu" => "whois.nic.hu", // Hungary
        "id" => "whois.pandi.or.id",
        "immobilien" => "whois.unitedtld.com",
        "industries" => "whois.donuts.co",
        "ink" => "whois.centralnic.com",
        "institute" => "whois.donuts.co",
        "insure" => "whois.donuts.co",
        "international" => "whois.donuts.co",
        "investments" => "whois.donuts.co",
        // id - Indonesia - no whois server assigned
        "ie" => "whois.domainregistry.ie", // Ireland
        "il" => "whois.isoc.org.il", // Israel
        "im" => "whois.nic.im", // Isle of Man
        "in" => "whois.inregistry.net", // India
        "info" => "whois.afilias.net",
        "int" => "whois.iana.org",
        "io" => "whois.nic.io", // British Indian Ocean Territory
        "iq" => "whois.cmc.iq", // Iraq
        "ir" => "whois.nic.ir", // Iran, Islamic Republic Of
        "is" => "whois.isnic.is", // Iceland
        "it" => "whois.nic.it", // Italy
        "je" => "whois.je", // Jersey
        "jetzt" => "whois.nic.jetzt",
        // jm - Jamaica - no whois server assigned
        // jo - Jordan - no whois server assigned
        "jobs" => "jobswhois.verisign-grs.com",
        "joburg" => "joburg-whois.registry.net.za",
        "jp" => "whois.jprs.jp", // Japan
        "juegos" => "whois.uniregistry.net",
        "kaufen" => "whois.unitedtld.com",
        // kh - Cambodia - no whois server assigned
        "ki" => "whois.nic.ki", // Kiribati
        "kim" => "whois.afilias.net",
        "kitchen" => "whois.donuts.co",
        "kiwi" => "whois.dot-kiwi.com",
        "kg" => "www.domain.kg", // Kyrgyzstan
        // km - Comoros - no whois server assigned
        // kn - Saint Kitts And Nevis - no whois server assigned
        "koeln" => "whois-fe1.pdt.koeln.tango.knipp.de",
        // kp - Korea, Democratic People's Republic Of - no whois server assigned
        "kr" => "whois.kr", // Korea, Republic Of
        "krd" => "whois.aridnrs.net.au",
        "kred" => "whois.nic.kred",
        "ke" => "whois.kenic.or.ke", // Kenya
        // kw - Kuwait - no whois server assigned
        // ky - Cayman Islands - no whois server assigned
        "kz" => "whois.nic.kz", // Kazakhstan
        "la" => "whois.nic.la", // Lao People's Democratic Republic
        "lacaixa" => "whois.nic.lacaixa",
        "land" => "whois.donuts.co",
        "lawyer" => "whois.rightside.co",
        // lb - Lebanon - no whois server assigned
        // lc - Saint Lucia - no whois server assigned
        "li" => "whois.nic.li", // Liechtenstein
        "lease" => "whois.donuts.co",
        "lgbt" => "whois.afilias.net",
        "life" => "whois.donuts.co",
        "lighting" => "whois.donuts.co",
        "limited" => "whois.donuts.co",
        "limo" => "whois.donuts.co",
        "link" => "whois.uniregistry.net",
        // lk - Sri Lanka - no whois server assigned
        "loans" => "whois.donuts.co",
        "london" => "whois-lon.mm-registry.com",
        "lotto" => "whois.afilias.net",
        "lt" => "whois.domreg.lt", // Lithuania
        "lu" => "whois.dns.lu", // Luxembourg
        "luxe" => "whois-dub.mm-registry.com",
        "luxury" => "whois.nic.luxury",
        "lv" => "whois.nic.lv", // Latvia
        "ly" => "whois.nic.ly", // Libya
        "ma" => "whois.iam.net.ma", // Morocco
        "maison" => "whois.donuts.co",
        "management" => "whois.donuts.co",
        "mango" => "whois.mango.coreregistry.net",
        "market" => "whois.rightside.co",
        "marketing" => "whois.donuts.co",
        // mc - Monaco - no whois server assigned
        "md" => "whois.nic.md", // Moldova
        "me" => "whois.nic.me", // Montenegro
        "media" => "whois.donuts.co",
        "meet" => "whois.afilias.net",
        "melbourne" => "whois.aridnrs.net.au",
        "menu" => "whois.nic.menu",
        "mg" => "whois.nic.mg", // Madagascar
        // mh - Marshall Islands - no whois server assigned
        "miami" => "whois-dub.mm-registry.com",
        "mil" => "whois.nic.mil",
        "mini" => "whois.ksregistry.net",
        "mk" => "whois.marnet.mk", // Macedonia, The Former Yugoslav Republic Of
        "ml" => "whois.dot.ml", // Mali
        // mm - Myanmar - no whois server assigned
        "mn" => "whois.nic.mn", // Mongolia
        "mo" => "whois.monic.mo", // Macao
        "mobi" => "whois.dotmobiregistry.net",
        "moda" => "whois.unitedtld.com",
        "monash" => "whois.nic.monash",
        "mortgage" => "whois.rightside.co",
        "moscow" => "whois.nic.moscow",
        "motorcycles" => "whois.afilias-srs.net",
        "mp" => "whois.nic.mp", // Northern Mariana Islands
        // mq - Martinique (France) - no whois server assigned
        // mr - Mauritania - no whois server assigned
        "ms" => "whois.nic.ms", // Montserrat
        "mt" => "http://www.um.edu.mt/cgi-bin/nic/whois?domain={domain}.mt", // Malta
        "mu" => "whois.nic.mu", // Mauritius
        "museum" => "whois.museum",
        // mv - Maldives - no whois server assigned
        // mw - Malawi - no whois server assigned
        "mx" => "whois.mx", // Mexico
        "my" => "whois.domainregistry.my", // Malaysia
        // mz - Mozambique - no whois server assigned
        "na" => "whois.na-nic.com.na", // Namibia
        "nagoya" => "whois.gmoregistry.net",
        "name" => "whois.nic.name",
        "navy" => "whois.rightside.co",
        "nc" => "whois.nc", // New Caledonia
        // ne - Niger - no whois server assigned
        "net" => "whois.verisign-grs.net",
        "nf" => "whois.nic.nf", // Norfolk Island
        "ng" => "whois.nic.net.ng", // Nigeria
        "ngo" => "whois.publicinterestregistry.net",
        // ni - Nicaragua - no whois server assigned
        "ninja" => "whois.unitedtld.com",
        "nl" => "whois.domain-registry.nl", // Netherlands
        "no" => "whois.norid.no", // Norway
        // np - Nepal - no whois server assigned
        // nr - Nauru - no whois server assigned
        "nra" => "whois.afilias-srs.net",
        "nrw" => "whois-fe1.pdt.nrw.tango.knipp.de",
        "nu" => "whois.nic.nu", // Niue
        "nyc" => "whois.nic.nyc",
        "nz" => "whois.srs.net.nz", // New Zealand
        "om" => "whois.registry.om", // Oman
        "okinawa" => "whois.gmoregistry.ne",
        "onl" => "whois.afilias-srs.net",
        "org" => "whois.pir.org",
        "organic" => "whois.afilias.net",
        "ovh" => "whois-ovh.nic.fr",
        // pa - Panama - no whois server assigned
        "paris" => "whois-paris.nic.fr",
        "partners" => "whois.donuts.co",
        "parts" => "whois.donuts.co",
        "pe" => "kero.yachay.pe", // Peru
        "pf" => "whois.registry.pf", // French Polynesia
        // pg - Papua New Guinea - no whois server assigned
        // ph - Philippines - no whois server assigned
        "photo" => "whois.uniregistry.net",
        "photography" => "whois.donuts.co",
        "photos" => "whois.donuts.co",
        "physio" => "whois.nic.physio",
        "pics" => "whois.uniregistry.net",
        "pictures" => "whois.donuts.co",
        "pink" => "whois.afilias.net",
        // pk - Pakistan - no whois server assigned
        "pl" => "whois.dns.pl", // Poland
        "place" => "whois.donuts.co",
        "plumbing" => "whois.donuts.co",
        "pm" => "whois.nic.pm", // Saint Pierre and Miquelon (France)
        // pn - Pitcairn (New Zealand) - no whois server assigned
        "post" => "whois.dotpostregistry.net",
        "pr" => "whois.nic.pr", // Puerto Rico
        "press" => "whois.centralnic.com",
        "productions" => "whois.donuts.co",
        "properties" => "whois.donuts.co",
        "pro" => "whois.dotproregistry.net",
        // ps - Palestine, State of - no whois server assigned
        "pt" => "whois.dns.pt", // Portugal
        "pub" => "whois.unitedtld.com",
        "pw" => "whois.nic.pw", // Palau
        // py - Paraguay - no whois server assigned
        "qa" => "whois.registry.qa", // Qatar
        "qpon" => "whois.nic.qpon",
        "quebec" => "whois.quebec.rs.corenic.net",
        "re" => "whois.nic.re", // Reunion (France)
        "recipes" => "whois.donuts.co",
        "red" => "whois.afilias.net",
        "rehab" => "whois.rightside.co",
        "reise" => "whois.nic.reise",
        "reisen" => "whois.donuts.co",
        "rentals" => "whois.donuts.co",
        "repair" => "whois.donuts.co",
        "report" => "whois.donuts.co",
        "republican" => "whois.rightside.co",
        "rest" => "whois.centralnic.com",
        "reviews" => "whois.unitedtld.com",
        "rich" => "whois.afilias-srs.net",
        "rio" => "whois.gtlds.nic.br",
        "ro" => "whois.rotld.ro", // Romania
        "rocks" => "whois.unitedtld.com",
        "rodeo" => "whois-dub.mm-registry.com",
        "rs" => "whois.rnids.rs", // Serbia
        "ru" => "whois.tcinet.ru", // Russian Federation
        "ruhr" => "whois.nic.ruhr",
        // rw - Rwanda - no whois server assigned
        "sa" => "whois.nic.net.sa", // Saudi Arabia
        "saarland" => "whois.ksregistry.net",
        "sb" => "whois.nic.net.sb", // Solomon Islands
        "sc" => "whois2.afilias-grs.net", // Seychelles
        "scb" => "whois.nic.scb",
        "schmidt" => "whois.nic.schmidt",
        "schule" => "whois.donuts.co",
        "scot" => "whois.scot.coreregistry.net",
        // sd - Sudan - no whois server assigned
        "se" => "whois.iis.se", // Sweden
        "services" => "whois.donuts.co",
        "sexy" => "whois.uniregistry.net",
        "shiksha" => "whois.afilias.net",
        "shoes" => "whois.donuts.co",
        "singles" => "whois.donuts.co",
        "sg" => "whois.sgnic.sg", // Singapore
        "sh" => "whois.nic.sh", // Saint Helena
        "si" => "whois.arnes.si", // Slovenia
        "sk" => "whois.sk-nic.sk", // Slovakia
        // sl - Sierra Leone - no whois server assigned
        "sm" => "whois.nic.sm", // San Marino
        "sn" => "whois.nic.sn", // Senegal
        "so" => "whois.nic.so", // Somalia
        "social" => "whois.unitedtld.com",
        "software" => "whois.rightside.co",
        "sohu" => "whois.gtld.knet.cn",
        "solar" => "whois.donuts.co",
        "solutions" => "whois.donuts.co",
        "soy" => "domain-registry-whois.l.google.com",
        "space" => "whois.nic.space",
        "spiegel" => "whois.ksregistry.net",
        // sr - Suriname - no whois server assigned
        "st" => "whois.nic.st", // Sao Tome And Principe
        "su" => "whois.tcinet.ru", // Russian Federation
        "supplies" => "whois.donuts.co",
        "supply" => "whois.donuts.co",
        "support" => "whois.donuts.co",
        "surf" => "whois-dub.mm-registry.com",
        "surgery" => "whois.donuts.co",
        // sv - El Salvador - no whois server assigned
        "sx" => "whois.sx", // Sint Maarten (dutch Part)
        "sy" => "whois.tld.sy", // Syrian Arab Republic
        "systems" => "whois.donuts.co",
        // sz - Swaziland - no whois server assigned
        "tattoo" => "whois.uniregistry.net",
        "tax" => "whois.donuts.co",
        "tc" => "whois.meridiantld.net", // Turks And Caicos Islands
        // td - Chad - no whois server assigned
        "technology" => "whois.donuts.co",
        "tel" => "whois.nic.tel",
        "tf" => "whois.nic.tf", // French Southern Territories
        "tienda" => "whois.donuts.co",
        "tips" => "whois.donuts.co",
        "tirol" => "whois.nic.tirol",
        // tg - Togo - no whois server assigned
        "th" => "whois.thnic.co.th", // Thailand
        "tj" => "whois.nic.tj", // Tajikistan
        "tk" => "whois.dot.tk", // Tokelau
        "tl" => "whois.nic.tl", // Timor-leste
        "tm" => "whois.nic.tm", // Turkmenistan
        "tn" => "whois.ati.tn", // Tunisia
        "to" => "whois.tonic.to", // Tonga
        "today" => "whois.donuts.co",
        "tokyo" => "whois.nic.tokyo",
        "tools" => "whois.donuts.co",
        "town" => "whois.donuts.co",
        "toys" => "whois.donuts.co",
        "tp" => "whois.nic.tl", // Timor-leste
        "tr" => "whois.nic.tr", // Turkey
        "trade" => "whois.nic.trade",
        "training" => "whois.donuts.co",
        "travel" => "whois.nic.travel",
        // tt - Trinidad And Tobago - no whois server assigned
        "tv" => "tvwhois.verisign-grs.com", // Tuvalu
        "tw" => "whois.twnic.net.tw", // Taiwan
        "tz" => "whois.tznic.or.tz", // Tanzania, United Republic Of
        "ua" => "whois.ua", // Ukraine
        "ug" => "whois.co.ug", // Uganda
        "uk" => "whois.nic.uk", // United Kingdom
        "university" => "whois.donuts.co",
        "uno" => "whois.nic.uno",
        "us" => "whois.nic.us", // United States
        "uy" => "whois.nic.org.uy", // Uruguay
        "uz" => "whois.cctld.uz", // Uzbekistan
        // va - Holy See (vatican City State) - no whois server assigned
        "vacations" => "whois.donuts.co",
        "vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
        "ve" => "whois.nic.ve", // Venezuela
        "vegas" => "whois.afilias-srs.net",
        "ventures" => "whois.donuts.co",
        "versicherung" => "whois.nic.versicherung",
        "vet" => "whois.rightside.co",
        "viajes" => "whois.donuts.co",
        "villas" => "whois.donuts.co",
        "vision" => "whois.donuts.co",
        "vg" => "whois.adamsnames.tc", // Virgin Islands, British
        "vlaanderen" => "whois.nic.vlaanderen",
        "vodka" => "whois-dub.mm-registry.com",
        "vote" => "whois.afilias.net",
        "voting" => "whois.voting.tld-box.at",
        "voto" => "whois.afilias.net",
        "voyage" => "whois.donuts.co",
        "vu" => "vunic.vu",
        // vi - Virgin Islands, US - no whois server assigned
        // vn - Viet Nam - no whois server assigned
        // vu - Vanuatu - no whois server assigned
        "wang" => "whois.gtld.knet.cn",
        "watch" => "whois.donuts.co",
        "webcam" => "whois.nic.webcam",
        "website" => "whois.nic.website",
        "wed" => "whois.nic.wed",
        "wf" => "whois.nic.wf", // Wallis and Futuna
        "wien" => "whois.nic.wien",
        "wiki" => "whois.nic.wiki",
        "works" => "whois.donuts.co",
        "ws" => "whois.website.ws", // Samoa
        "wtc" => "whois.nic.wtc",
        "wtf" => "whois.donuts.co",
        "xxx" => "whois.nic.xxx",
        "xyz" => "whois.nic.xyz",
        "yachts" => "whois.afilias-srs.net",
        // ye - Yemen - no whois server assigned
        "yt" => "whois.nic.yt", // Mayotte
        "yu" => "whois.ripe.net",
        "zip" => "domain-registry-whois.l.google.com",
        "zm" => "whois.nic.zm",
        "zone" => "whois.donuts.co",
    ];

    /**
     * @var array $continentServers Array of servers for IP lookup.
     */
    private array $continentServers = [
        //"whois.afrinic.net", // Africa - returns timeout error :-(
        "whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
        "whois.apnic.net", // Asia/Pacific only
        "whois.arin.net", // North America only
        "whois.ripe.net", // Europe, Middle East and Central Asia only
    ];

    /**
     * Gets a server name for domain lookup by domain tld.
     *
     * @param string $tld
     *
     * @return string Server name for domain lookup.
     */
    public function getServerByTld(string $tld): string
    {
        return $this->servers[$tld];
    }

    /**
     * Gets an array of Continent servers for IP lookup.
     *
     * @return array Continent servers for IP lookup.
     */
    public function getContinentServers(): array
    {
        return $this->continentServers;
    }
}
