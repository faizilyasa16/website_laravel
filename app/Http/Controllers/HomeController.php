<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function homeBackEnd()
    {
        // kalo maksain login 
        if (Auth::check()) {
            return view('backend.content1',[
                'title' => 'Home Page',
            ]);
        } else {
            return redirect()->route('backend.login');
        }


    }
    

}
