<?php

namespace App\services\Api\ticketing\tickets;
use App\services\Api\ticketing\UrlTicketingServices;
use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ListTicketServices{

    public function list($id){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/list/ticketsOfTravel/'.$id);

        return $response;
    }

    public function allTickets(){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/list/ticket');

        return $response;

    }

    public function ticketRecents(){

        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/list/tickets/recents');

        return $response;

    }
}
