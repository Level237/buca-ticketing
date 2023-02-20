<?php

namespace App\services\Api\kipart\passengers;
use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListPlaceServices{

    public function list($travel_id){

        $url=(new UrlServices())->getUrl();

        $response=Http::get($url.'/api/placeIsBusy/'.$travel_id);

        return $response;
    }
}
