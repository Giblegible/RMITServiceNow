<?php

use Illuminate\Http\Request;
use App\CustomerQuery;

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

Route::get('adminRequestService', 'AdminQueryController@index');
Route::get('adminRequestService/{id}', 'AdminQueryController@show');
Route::post('adminRequestService', 'AdminQueryController@store');
Route::put('adminRequestService/{id}', 'AdminQueryController@update');
Route::delete('adminRequestService/{id}', 'AdminQueryController@destroy');