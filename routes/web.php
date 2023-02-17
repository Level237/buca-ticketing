<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\BordereauController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\PassengerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('HomePage');
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('list/tickets',[TicketController::class,'index'])->name('tickets.index');
Route::get('passengers/recents',[PassengerController::class,'passengersRecent'])->name('passengers.recents');
Route::get('bordereau',[BordereauController::class,'index'])->name('bordereau');
Route::get('tickets/step-one/listTravels',[TravelController::class,'list'])->name('travel.index');
Route::get('tickets/step-two/create-one-passenger',[PassengerController::class,'index'])->name('passenger.index');
Route::get('list/ticketsOfAgency',[TicketController::class,'list']);
Route::post('tickets/create',[PassengerController::class,'store'])->name('passenger.create');
Route::post('logout',[LogoutController::class,'logout'])->name('logout');
