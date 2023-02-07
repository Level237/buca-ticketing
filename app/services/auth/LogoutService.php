<?php

namespace App\services\auth;

use App\services\Api\UrlServices;
class LogoutService{

    public function logout(){

        $url = (new UrlServices())->getUrl();
    }
}
