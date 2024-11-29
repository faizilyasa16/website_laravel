<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Jika pengguna mencoba mengakses content1
    public function content1()
    {
        if (!Auth::check()) {
            return redirect()->route('backend.login')->with('error', 'Silakan login untuk melanjutkan.');
        }
        return view('backend.content1', [
            'title' => 'Content 1',
        ]);
    }

    public function content2()
    {
        if (!Auth::check()) {
            return redirect()->route('backend.login')->with('error', 'Silakan login untuk melanjutkan.');
        }
        return view('backend.content2', [
            'title' => 'Content 2',
        ]);
    }

    public function content3()
    {
        if (!Auth::check()) {
            return redirect()->route('backend.login')->with('error', 'Silakan login untuk melanjutkan.');
        }
        return view('backend.content3', [
            'title' => 'Content 3',
        ]);
    }

    public function content4()
    {
        if (!Auth::check()) {
            return redirect()->route('backend.login')->with('error', 'Silakan login untuk melanjutkan.');
        }
        return view('backend.content4', [
            'title' => 'Content 4',
        ]);
    }

    public function content5()
    {
        if (!Auth::check()) {
            return redirect()->route('backend.login')->with('error', 'Silakan login untuk melanjutkan.');
        }
        return view('backend.content5', [
            'title' => 'Content 5',
        ]);
    }
}
