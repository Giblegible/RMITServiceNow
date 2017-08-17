<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

Route::get('/{searchID}', 'AdminQueryController@filter');
Route::get('trackProgress/credentialsCheck/{findEmail}', 'CustomerQueryController@getUserQueries');

//Track Progress View Route
Route::get('trackProgress/credentialsCheck', 'PageController@trackprogress');

//Admin Page
Route::get('pages/admin/auth', 'PageController@adminPage');

//Request Service View Route - Customer
Route::resource('pages/requestService', 'CustomerQueryController');

//Request Service View Route - Admin
Route::resource('pages/admin/adminRequestService', 'AdminQueryController');
