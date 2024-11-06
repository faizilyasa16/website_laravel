<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeFrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function lowongan()
    {
        return view('frontend.lowongan');
    }
    public function lowongan1()
    {
        return view('frontend.lowongan1');
    }
    public function lowongan2()
    {
        return view('frontend.lowongan2');
    }
    public function lowongan3()
    {
        return view('frontend.lowongan3');
    }
    public function lowongan4()
    {
        return view('frontend.lowongan4');
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
}
