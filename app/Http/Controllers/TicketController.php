<?php

namespace App\Http\Controllers;

use App\services\Api\ticketing\tickets\AddTicketServices;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){

        return view('agencies.tickets.index');
    }

    public function store(Request $request,$travel_id){

        $response=(new AddTicketServices())->addTicket()
    }
}
