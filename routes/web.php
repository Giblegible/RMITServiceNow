<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

//Track Progress
//Post the email that the user wants to view current queries for.
Route::post('pages/trackProgress/userQueries', ['uses' => 'CustomerQueryController@getUserQueries']);
Route::get('trackProgress/credentialsCheck', ['middleware' => 'auth', 'uses' => 'PageController@trackprogress']);

//Admin Page
Route::get('pages/admin/auth', 'PageController@adminPage');

//Request Service View Route - Customer
Route::resource('pages/requestService', 'CustomerQueryController');

//Request Service View Route - Admin
//Post the email that ITS staff want to see queries for.
Route::post('pages/admin/adminRequestService/index', ['uses' => 'AdminQueryController@filter']);
Route::resource('pages/admin/adminRequestService', 'AdminQueryController');

Auth::routes();

