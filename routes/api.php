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

/*ADMIN - Request Service API Routes
Index - Display ALL queries
Show - Display single query
Filter - Display ALL queries for specified user
Update - Update query for specified case
*/
Route::get('adminRequestService', 'AdminQueryController@index');
Route::get('adminRequestService/{id}', 'AdminQueryController@show');
Route::get('adminRequestService/filter/{customer_id}', 'AdminQueryController@filter');
Route::put('adminRequestService/{id}', 'AdminQueryController@update');

/*ADMIN - Comments Route
Store - Add comment to specified case
*/
Route::post('comment', 'CommentController@store');