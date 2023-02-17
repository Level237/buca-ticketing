<?php

namespace App\services\Api\ticketing;

class UrlTicketingServices{

    public static $url="http://api-ticketing.mykipart.com";

    public static function getUrl(){
        return self::$url;
    }
}
