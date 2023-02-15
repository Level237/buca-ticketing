<?php

namespace App\services\Api\travel;

use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListTravelServices{

    public function list($id){

        $url=(new UrlServices())->getUrl();

        $response=Http::get($url.'/api/listTravelByAgency/'.$id);

        return $response;
    }
}
