<?php

use Stevebauman\Location\Facades\Location;

if (!function_exists('countryByIp')) {
    function countryByIp($ip)
    {
        $loc = Location::get($ip);
        $countryCode = $loc->countryCode ?? 'AM';

        return $countryCode;
    }
}
