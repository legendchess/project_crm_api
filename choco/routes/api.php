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

Route::get('/rates', 'RateController@index');
Route::post('/rates', 'RateController@store');
Route::post('/rates/check', 'RateController@check');
Route::post('/rates/update', 'RateController@update');
Route::post('/rates/calculate', 'RateController@calculate');




