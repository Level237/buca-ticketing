<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\auth\LoginController;

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

Route::get('/d', function () {
    return view('welcome');
});

Route::get('/',[LoginController::class,'login'])->name('login');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('list/tickets',[TicketController::class,'index'])->name('tickets.index');
