<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){

        $details=Session::get('details');
        return view('agencies.dashboard',compact('details'));
    }
}
