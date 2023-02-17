<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\ticketing\tickets\AddTicketServices;
use App\services\Api\ticketing\tickets\ListTicketServices;

class PassengerController extends Controller
{
    public function index(Request $request){

        $details=Session::get('details');
        $request->session()->put('travel_id',$request->travel_id);
        $travel_id=$request->session()->get('travel_id');
        // $request->session()->put('departure',$request->departure);
        // $request->session()->put('arrival',$request->arrival);
        // $request->session()->put('date',$request->date);
        // $request->session()->put('classe',$request->classe);
        $arrival=$request->arrival;
        $departure=$request->departure;
        $date=$request->date;
        $classe=$request->classe;
        $hours=$request->hours;
        request()->fullUrlWithoutQuery('departure');
        $travel_id=Session::get('travel_id');
        $response=(new ListTicketServices())->list($travel_id);
        $datas=json_decode($response->getBody());
        //return $datas;
        return view('agencies.passengers.index',compact('details','arrival','date','classe','departure','hours','datas'));
    }

    public function store(Request $request){

        $travel_id=Session::get('travel_id');
        $sub_agency_id=Session::get('details');
        $response=(new AddTicketServices())->addTicket($request,$travel_id,$sub_agency_id['id']);


        return redirect()->back()->with('success','Passager ajouté avec success');
    }

    public function passengersRecent(){

        $response=(new ListTicketServices())->ticketRecents();
        $datas=json_decode($response->getBody());
        $details=Session::get('details');
        return view('agencies.passengers.recent',compact('datas','details'));
    }
}
