<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

//Track Progress View Route
Route::get('trackprogress', 'PageController@trackprogress');

//Report an Issue View Route
Route::get('reportissue', 'PageController@reportissue');

//Request Service View Route
Route::resource('pages/requestService', 'CustomerQueryController');
