<?php

namespace App\services\Api\agent;
use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailSubAgencyServices{

    public function details(){

        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/details/AgencyBySubAgent');

        return $response;
    }
}