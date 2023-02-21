<?php

namespace App\Http\Controllers;

use App\services\Api\ticketing\bordereau\ListBordereauService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\travel\ListTravelServices;


class BordereauController extends Controller
{
    public function index(){
        $details=Session::get('details');
        if(isset($details)){


            //return $datas;
            return view('agencies.bordereau.index',compact('details'));
        }else{
            return to_route('login');
        }

    }

    public function stepOne(){
        $details=Session::get('details');
        if(isset($details)){
        return view('agencies.bordereau.step-one',compact('details'));
    }else{
        return to_route('login');
    }

    }

    public function stepTwo(Request $request){

        $details=Session::get('details');
        if(isset($details)){
                $travel=(new ListTravelServices())->list($request,$details['agency_id'],$details['localisation']);
                    $data=json_decode($travel->getBody());
            $date=$request->date;
            $classe=$request->classe;
            $hours=$request->hours;
            $bordereau=(new ListBordereauService())->list($details['id'],$data->id);
            $datas=json_decode($bordereau->getBody());
            //return $datas;
            return view('agencies.bordereau.index',compact('details','datas','date','hours','classe'));
        }else{
            return to_route('login');
        }

    }
}
