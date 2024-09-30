<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeBackEnd()
    {
        return view('backend.homebackend',[
            'title' => 'Home Page',
        ]);
    }
}
