<?php

//Home page View Route
Route::get('/', function () {
    return View::make('pages.welcome');
});

Route::get('welcome', function () {
    return View::make('pages.welcome');
});

//Request Service View Route
Route::get('requestservice', function() {
    return View::make('pages.requestservice');
});

//Track Progress View Route
Route::get('trackprogress', function() {
    return View::make('pages.trackprogress');
});

//Report an Issue View Route
Route::get('reportissue', function() {
    return View::make('pages.reportissue');
});


