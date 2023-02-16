<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PassengerController extends Controller
{
    public function index(Request $request){

        $details=Session::get('details');
        $request->session()->put('travel_id',$request->travel_id);
        return view('agencies.passengers.index',compact('details'));
    }
}
