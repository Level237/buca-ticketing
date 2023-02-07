<?php

namespace App\services\api;

class UrlServices{

    public static $url="http://kipart.stillforce.tech";

    public static function getUrl(){
        return self::$url;
    }
}
