<?php

//Home page View Route
Route::get('/', function () {
    return view('welcome');
});

//Request Service View Route
Route::get('requestservice', function() {
    return view('requestservice');
});

//Track Progress View Route
Route::get('trackprogress', function() {
    return view('trackprogress');
});

//Report an Issue View Route
Route::get('reportissue', function() {
    return view('reportissue');
});


