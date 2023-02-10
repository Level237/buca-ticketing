<?php

namespace App\services\auth;

use Illuminate\Http\Request;
use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;

class LogoutService{

    public function logout(Request $request){

        $url = (new UrlServices())->getUrl();
        $response=Http::post($url.'/logout/agt/private');
        $request->session()->forget('tokenAgency');
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }
}
