<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\ticketing\tickets\AddTicketServices;
use App\services\Api\ticketing\tickets\ListTicketServices;

class TicketController extends Controller
{
    public function index(){
        $details=Session::get('details');
        $travel_id=Session::get('travel_id');
        $response=(new ListTicketServices())->allTickets();
        $datas=json_decode($response->getBody());
        //return $datas;
        return view('agencies.tickets.index',compact('details','datas'));
    }

    public function store(Request $request,$travel_id){

        //$response=(new AddTicketServices())->addTicket();
    }

    public function list(){
        $travel_id=Session::get('travel_id');
        $response=(new ListTicketServices())->allTickets();
        $datas=json_decode($response->getBody());
        return $response;
    }
}
