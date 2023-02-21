<?php

namespace App\services\Api\kipart\bus;

use App\services\Api\ticketing\UrlTicketingServices;
use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListBusServices{

    public function list(){

        $url=(new UrlTicketingServices)->getUrl();

        $response=Http::get($url.'/api/all/bus');

        return $response;
    }
}
