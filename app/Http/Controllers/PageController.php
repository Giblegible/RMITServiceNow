<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function adminPage() {
        return view('pages.admin.auth');
    }

    public function trackprogress() {
        return view('pages.trackProgress.credentialsCheck');
    }
}
