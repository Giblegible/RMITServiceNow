<?php


Route::get('/', 'PageController@home');

Route::get('home', 'PageController@home');

//Request Service View Route
Route::get('requestservice', 'PageController@requestservice');

//Track Progress View Route
Route::get('trackprogress', 'PageController@trackprogress');

//Report an Issue View Route
Route::get('reportissue', 'PageController@reportissue');


