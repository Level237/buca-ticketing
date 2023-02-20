<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){

        $details=Session::get('details');
        if(isset($details)){
            return view('agencies.dashboard',compact('details'));
        }else{
            return to_route('login');
        }

    }
}
