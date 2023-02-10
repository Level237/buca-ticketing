<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\services\auth\LogoutService;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request){

        $logout=(new LogoutService())->logout($request);

        return $logout;
    }
}
