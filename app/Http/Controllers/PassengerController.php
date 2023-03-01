<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\services\Api\ticketing\tickets\AddTicketServices;
use App\services\Api\ticketing\tickets\ListTicketServices;

class PassengerController extends Controller
{
    public function index(Request $request){

        $details=Session::get('details');
        if(isset($details)){
            $request->session()->put('travel_id',$request->travel_id);
            $request->session()->put('travel_price',$request->travel_price);
            $travel_id=$request->session()->get('travel_id');
            // $request->session()->put('departure',$request->departure);
            // $request->session()->put('arrival',$request->arrival);
            // $request->session()->put('date',$request->date);
            // $request->session()->put('classe',$request->classe);
            $arrival=$request->arrival;
            $departure=$request->departure;
            $date=$request->date;
            $classe=$request->classe;
            $hours=$request->hours;
            request()->fullUrlWithoutQuery('departure');
            $travel_id=Session::get('travel_id');
            $response=(new ListTicketServices())->list($travel_id);
            $datas=json_decode($response->getBody());
            //return $datas;
            return view('agencies.passengers.index',compact('details','arrival','date','classe','departure','hours','datas'));
        }else{
            return to_route('login');
        }

    }

    public function store(Request $request){


        $sub_agency_id=Session::get('details');
        if(isset($sub_agency_id)){
            $travel_id=Session::get('travel_id');
            $price=$request->session()->get('travel_price');
            $amountReimbursed=$request->amountReimbursed;
            if($request->amount < $price){
                return redirect()->back()->with('fail','le montant que vous recevez ne peut pas etre inferieur au prix du voyage');
            }else{
                $response=(new AddTicketServices())->addTicket($request,$travel_id,$sub_agency_id['id'],$price,$amountReimbursed);


                return redirect()->back()->with('success','Passager ajouté avec success');
            }

        }else{
            return to_route('login');
        }

    }

    public function passengersRecent(){


        $details=Session::get('details');

        if(isset($details)){
            $response=(new ListTicketServices())->ticketRecents();
            $datas=json_decode($response->getBody());
            return view('agencies.passengers.recent',compact('datas','details'));
        }else{
            return to_route('login');
        }

    }
}
