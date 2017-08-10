<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

//Track Progress View Route
Route::get('trackprogress', 'PageController@trackprogress');

//Report an Issue View Route
Route::get('reportissue', 'PageController@reportissue');

//Admin Page
Route::get('pages/admin/auth', 'PageController@adminPage');

//Request Service View Route - Customer
Route::resource('pages/requestService', 'CustomerQueryController');

//Request Service View Route - Admin
Route::resource('pages/admin/adminRequestService', 'AdminQueryController');
