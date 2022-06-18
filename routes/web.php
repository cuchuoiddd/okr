<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('test',function (){
    $message = 'ngon ngay';
    $type = 'alert-danger';
//   return view('test',compact('message','type'));
   return view('test')->with(['type'=>'alert-danger','message'=>'ngon ngay']);
});