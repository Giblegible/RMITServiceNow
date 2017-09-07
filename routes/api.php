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

Route::get('userQueries', 'CustomerQueryController@index');
Route::get('userQueries/{id}', 'CustomerQueryController@show');
Route::post('userQueries', 'CustomerQueryController@store');
Route::put('userQueries/{id}', 'CustomerQueryController@update');
Route::delete('userQueries/{id}', 'CustomerQueryController@destroy');