<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\travel\ListTravelServices;


class TravelController extends Controller
{
    public function list(){

        $details=Session::get('details');
        $listTravel=(new ListTravelServices())->list($details['agency_id']);
        $listTravel=json_decode($listTravel->getBody());
        //return $listTravel;
        $details=Session::get('details');
        return view('agencies.travel.listTravel',compact('details','listTravel'));
    }
}
