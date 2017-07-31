<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function requestservice() {
        return view('pages.requestservice');
    }

    public function trackprogress() {
        return view('pages.trackprogress');
    }

    public function reportissue() {
        return view('pages.reportissue');
    }
}
