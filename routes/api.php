<?php

use Illuminate\Http\Request;
use App\MarketInfo;

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


Route::post('markets', 'Api\MarketPrediction@create');

Route::get('markets', 'Api\MarketPrediction@index');

Route::post('headlines', 'Api\NewsInfoController@create');
