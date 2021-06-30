<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[LoginController::class,'index']);
Route::get('add',[MainController::class,'add']);
Route::post('insert',[MainController::class,'insert']);
Route::get('edit/{id}',[MainController::class,'edit']);
Route::post('edit/{id}',[MainController::class,'update']);
Route::get('delete/{id}',[MainController::class,'delete']);
Route::get('home',[MainController::class,'index']);

Route::get('new_reg',[MainController::class,'new_reg']);

Route::post('create',[MainController::class,'create']);

Route::post('login',[LoginController::class,'login']);
//Route::post('edit/{id}',[MainController::class,'updatetwo']);
//Route::get('updatetwo/{id}',[MainController::class,'updatetwo']);
Route::get('logout', function () {
    Session::forget('email');
     return redirect('/');
 });

 Route::get('user_reg',[LoginController::class,'user_reg']);
 