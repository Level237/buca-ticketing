<?php

namespace App\Http\Controllers;


use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\travel\ListTravelServices;
use App\services\Api\ticketing\bordereau\ListBordereauService;


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
            if((isset($hours) || isset($classe) || isset($date)) && (isset($hours) && isset($classe) && isset($date))){
                $bordereau=(new ListBordereauService())->list($details['id'],$data->id);
                $datas=json_decode($bordereau->getBody());
                $d = [
                    'title' => 'How To Create PDF File Using DomPDF In Laravel 9 - Techsolutionstuff',
                    'details' => $details,
                    'datas' => $datas,
                    'hours' => $hours,
                    'classe'=>$classe,
            ];

            if($request->has('download'))
            {
                $pdf = PDF::loadView('index',$d);
                return $pdf->download('bordereau'.$request->date.'.pdf');
            }
                //return $datas;
                return view('agencies.bordereau.index',compact('details','datas','date','hours','classe'));
            }
            else{
                return to_route('bordereau.stepOne');
            }

        }else{
            return to_route('login');
        }

    }

    public function download(Request $request){

        return redirect()->back();
    }
}
