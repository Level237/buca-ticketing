<?php

namespace App\Http\Controllers;

use App\services\Api\kipart\bus\CreateBusServices;
use App\services\Api\kipart\bus\ListBusServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BusController extends Controller
{
    public function list(){
        $details=Session::get('details');
        if(isset($details)){
            $response=(new ListBusServices())->list();
            $datas=json_decode($response->getBody());
            //return $datas;

            return view('agencies.bus.index',compact('details','datas'));
        }else{
            return to_route('login');
        }

    }

    public function store(Request $request){
            $response=(new CreateBusServices())->add($request);
            //return $response;
            return redirect()->back()->with('success','Bus ajouté avec success');
    }
}
