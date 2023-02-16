<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\ticketing\tickets\AddTicketServices;
use App\services\Api\ticketing\tickets\ListTicketServices;

class TicketController extends Controller
{
    public function index(){

        return view('agencies.tickets.index');
    }

    public function store(Request $request,$travel_id){

        //$response=(new AddTicketServices())->addTicket();
    }

    public function list(){
        $travel_id=Session::get('travel_id');
        $response=(new ListTicketServices())->list(3);
        $datas=json_decode($response->getBody());
        return $response;
    }
}
