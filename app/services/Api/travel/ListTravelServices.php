<?php

namespace App\services\Api\travel;

use App\services\Api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListTravelServices{

    public function list($request,$id,$localisation){

        $url=(new UrlServices())->getUrl();

        $response=Http::post($url.'/api/listTravelWithDateAndClass/'.$id.'/'.$localisation,[
            'date'=>$request->date,
            'classe'=>$request->classe,
            'hours'=>$request->hours
        ]);

        return $response;
    }
    public function listTravelWithLocalisation($id,$localisation){
        $url=(new UrlServices())->getUrl();

        $response=Http::get($url.'/api/listTravelWithLocalisation/'.$id.'/'.$localisation);

        return $response;
    }
}
