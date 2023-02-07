<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\services\auth\LoginService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){

        return view('auth.login');
    }

    public function login(Request $request){

        $response = (new LoginService())->login($request->email, $request->password);

        if(isset($response['error'])){
            return back()->with('fail',"Email ou mot de passe invalide");
        }else{
        $access_token = json_decode((string) $response->getBody(), true)['access_token'];
        Session::put('tokenAgency', $access_token);
        Session::save();

            return to_route('dashboard');
        }

        return ;

    }

}
