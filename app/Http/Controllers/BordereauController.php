<?php

namespace App\Http\Controllers;

use App\services\Api\ticketing\bordereau\ListBordereauService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BordereauController extends Controller
{
    public function index(){
        $details=Session::get('details');
        if(isset($details)){
            $response=(new ListBordereauService())->list($details['id']);
            $datas=json_decode($response->getBody());
            //return $datas;
            return view('agencies.bordereau.index',compact('details','datas'));
        }else{
            return to_route('login');
        }

    }
}
