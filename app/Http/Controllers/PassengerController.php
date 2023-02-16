<?php

namespace App\Http\Controllers;

use App\services\Api\ticketing\tickets\AddTicketServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PassengerController extends Controller
{
    public function index(Request $request){

        $details=Session::get('details');
        $request->session()->put('travel_id',$request->travel_id);
        return view('agencies.passengers.index',compact('details'));
    }

    public function store(Request $request){

        $travel_id=Session::get('travel_id');
        $sub_agency_id=Session::get('details');
        $response=(new AddTicketServices())->addTicket($request,$travel_id,$sub_agency_id['id']);

        return to_route('passenger.index')->with('success','Passager ajouté avec success');
    }
}
