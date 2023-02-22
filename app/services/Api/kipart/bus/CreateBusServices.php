<?php

namespace App\services\Api\kipart\bus;
use App\services\Api\ticketing\UrlTicketingServices;
use Illuminate\Support\Facades\Http;

class CreateBusServices{

    public function add($request){

        $url=(new UrlTicketingServices())->getUrl();

        $response=Http::post($url.'/api/bus/create',[
            'immatriculation'=>$request->immatriculation,
            'number_of_places'=>$request->number_of_places
        ]);

        return $response;
    }
}
