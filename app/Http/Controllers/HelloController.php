<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return ('Hello World');
    }

    public function hello()
    {
        return view('coba.coba');
    }

    public function tugas()
    {
        return view('tugas.getTable');
    }
    public function tugas2()
    {
        return view('tugas.getForm');
    }
}
