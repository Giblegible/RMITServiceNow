<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

//Track Progress
//Post the email that the user wants to view current queries for.
Route::get('pages/trackProgress/userQueries', ['uses' => 'CustomerQueryController@getUserQueries']);

//Admin Page
Route::get('pages/admin/auth', 'PageController@adminPage');

//Request Service View Route - Customer
Route::resource('pages/requestService', 'CustomerQueryController');

Auth::routes();

