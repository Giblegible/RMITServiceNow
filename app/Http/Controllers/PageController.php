<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function requestserviceinfo() {
        return view('pages.requestserviceinfo');
    }

    public function trackprogress() {
        return view('pages.trackprogress');
    }

    public function reportissue() {
        return view('pages.reportissue');
    }
}
