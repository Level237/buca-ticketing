<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\services\Api\UrlServices;
use App\services\auth\LoginService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\services\Api\agent\DetailSubAgencyServices;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }

    public function login(Request $request){

        $response = (new LoginService())->login($request->email, $request->password);
        $url = (new UrlServices())->getUrl();
        $arrayDetailsSubAgency=[];

        if(isset($response['error'])){
            return back()->with('fail',"Email ou mot de passe invalide");
        }else{
        $access_token = json_decode((string) $response->getBody(), true)['access_token'];
        Session::put('tokenAgency', $access_token);
        Session::save();

        $detailSubAgency=(new DetailSubAgencyServices())->details();

        $d=json_decode($detailSubAgency->getBody());
            foreach($d as $datas){
                foreach($datas as $data){
                    array_push($arrayDetailsSubAgency,$data->id);
                    array_push($arrayDetailsSubAgency,$data->nom);
                    array_push($arrayDetailsSubAgency,$url."/".$data->logo);
                    array_push($arrayDetailsSubAgency,$data->localisation);
                }
            }
            Session::put('details', $arrayDetailsSubAgency);
            Session::save();
            return to_route('dashboard');
            //return $arrayDetailsSubAgency;
        }



    }

}
