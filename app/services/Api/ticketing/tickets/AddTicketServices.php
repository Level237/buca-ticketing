<?php

namespace App\services\Api\ticketing\tickets;
use App\services\Api\ticketing\UrlTicketingServices;
use Illuminate\Support\Facades\Http;

class AddTicketServices{

    public function addTicket($request,$id,$sub_agency_id){

        $url=(new UrlTicketingServices())->getUrl();

        $response=Http::post($url.'api/add/passenger/'.$id.'/'.$sub_agency_id,[
            'name'=>$request->name,
            'type'=>$request->type,
            'cni'=>$request->cni,
            'telephone'=>$request->telephone,
        ]);

        return $response;
    }
}
