<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

//Track Progress View Route
Route::get('trackProgress/credentialsCheck', 'PageController@trackprogress');

Route::get('/{findEmail}', 'CustomerQueryController@getUserQueries');

//Admin Page
Route::get('pages/admin/auth', 'PageController@adminPage');

Route::get('/{searchID}', 'AdminQueryController@filter');

//Request Service View Route - Customer
Route::resource('pages/requestService', 'CustomerQueryController');

//Request Service View Route - Admin
Route::resource('pages/admin/adminRequestService', 'AdminQueryController');
