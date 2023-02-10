<?php

namespace App\services\Api;

class UrlServices{

    public static $url="http://api.mykipart.com";

    public static function getUrl(){
        return self::$url;
    }
}
