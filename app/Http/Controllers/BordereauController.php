<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BordereauController extends Controller
{
    public function index(){

        return view('agencies.bordereau.index');
    }
}
