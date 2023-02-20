<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\ticketing\tickets\AddTicketServices;
use App\services\Api\ticketing\tickets\ListTicketServices;
use App\services\Api\travel\ListTravelServices;
class TicketController extends Controller
{
    public function index(){
        $details=Session::get('details');
        if(isset($details)){
            $travel_id=Session::get('travel_id');
            $response=(new ListTicketServices())->allTickets();
            $datas=json_decode($response->getBody());
            //return $datas;
            return view('agencies.tickets.index',compact('details','datas'));
        }else{
            return to_route('login');
        }

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

    public function addPassenger(Request $request){

        $details=Session::get('details');
        if(isset($details)){
            $details=Session::get('details');
            if(isset($details)){

                $travel=(new ListTravelServices())->list($request,$details['agency_id'],$details['localisation']);
                $data=json_decode($travel->getBody());
                $request->session()->put('travel_id', $data->id);
                $response=(new ListTicketServices())->list($data->id);
            $datas=json_decode($response->getBody());
                //return $datas;
                return view('agencies.tickets.step-two',compact('details','data','datas'));
            }else{
                return to_route('login');
            }
        }
    }
}
