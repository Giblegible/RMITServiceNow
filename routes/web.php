<?php

//Home page View Route
Route::get('/', function () {
    return View::make('pages.home');
});

Route::get('home', function () {
    return View::make('pages.home');
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


