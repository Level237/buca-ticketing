<?php

namespace App\services\Api\ticketing\bordereau;

use App\services\Api\ticketing\UrlTicketingServices;
use Illuminate\Support\Facades\Http;
class ListBordereauService{

    public function list($id,$travel_id){

        $url=(new UrlTicketingServices())->getUrl();

        $response=Http::get($url.'/api/all/bordereau/'.$id.'/'.$travel_id);

        return $response;
    }
}
