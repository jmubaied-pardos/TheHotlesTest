<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth:api','admin:api'])->group(function () {
    Route::post('hotels', 'HotelController@store');
    Route::put('hotels/{id}', 'HotelController@update');
    Route::delete('hotels/{id}', 'HotelController@delete');
});

Route::middleware(['auth:api'])->group(function (){
    Route::get('hotels/{hotel}', 'HotelController@show');
    Route::get('hotels', 'HotelController@index');
});

Route::post('login', 'LoginController@doLogin');
Route::get('logout', 'LoginController@doLogout');

