<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\travel\ListTravelServices;


class TravelController extends Controller
{
    public function choice(){

        $details=Session::get('details');
        if(isset($details)){
            return view('agencies.tickets.step-one',compact('details'));
        }else{
            return to_route('login');
        }

    }

    public function list(Request $request){
        $details=Session::get('details');
        if(isset($details)){
            $listTravel=(new ListTravelServices())->list($request,$details['agency_id'],$details['localisation']);
            $listTravel=json_decode($listTravel->getBody());
            //return $listTravel;
            return view('agencies.travel.listTravel',compact('details','listTravel'));
        }else{
            return to_route('login');
        }
    }

    public function listTravelWithLocalisation(){
        $details=Session::get('details');
        if(isset($details)){
            $listTravel=(new ListTravelServices())->listTravelWithLocalisation($details['agency_id'],$details['localisation']);
            $listTravel=json_decode($listTravel->getBody());
            //return $listTravel;
            return view('agencies.travel.listTravel',compact('details','listTravel'));
        }else{
            return to_route('login');
        }
    }
}
