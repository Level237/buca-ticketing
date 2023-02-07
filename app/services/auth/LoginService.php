<?php

namespace App\services\auth;

use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;

class LoginService{

    public function login($email,$password){

        $url = (new UrlServices())->getUrl();
        $response = Http::post($url . '/api/login/personnal/agent',[
            'email'=>$email,
            'password'=>$password,
        ]);

        return $response;
    }
}
