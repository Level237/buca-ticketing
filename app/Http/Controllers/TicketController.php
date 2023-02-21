<?php

namespace App\Http\Controllers;

use App\services\Api\kipart\passengers\ListPlaceServices;
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
                if(isset($data)){
                    $request->session()->put('travel_id', $data->id);
                $request->session()->put('travel_price', $data->price);
                $response=(new ListTicketServices())->list($data->id);
                $travel_id=Session::get('travel_id');

                $list=(new ListPlaceServices())->list($travel_id);
                $list=json_decode($list->getBody());
                $datas=json_decode($response->getBody());
                //return $datas;
                //return $list;
                return view('agencies.tickets.step-two',compact('details','data','datas','list'));
                }else{
                    return to_route('ticket.date-of-travel');
                }

            }else{
                return to_route('login');
            }
        }
    }
}
