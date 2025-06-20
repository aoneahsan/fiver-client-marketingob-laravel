<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Auth Routes
Route::post('login','Auth\LoginController@loginApi');
Route::post('register','Auth\RegisterController@registerApi');
Route::post('logout','Auth\LoginController@logoutApi');
Route::post('userData','Api\ApiUserController@getUserData');