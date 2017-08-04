<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

Route::get('requestserviceinfo', 'PageController@requestserviceinfo');

//Track Progress View Route
Route::get('trackprogress', 'PageController@trackprogress');

//Report an Issue View Route
Route::get('reportissue', 'PageController@reportissue');

//Request Service View Route
Route::get('show', 'CustomerQueryController@show');

Route::resource('requestService', 'CustomerQueryController');
