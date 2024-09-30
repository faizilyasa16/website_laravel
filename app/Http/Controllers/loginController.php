<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;



class LoginController extends Controller
{
    public function loginBackEnd()
    {
        return view('backend.login', [
            'title' => 'Login Page',
        ]);
    }

    public function authenticateBackEnd(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        Log::info('Attempting to log in user: ' . $request->username);
    
        // Coba autentikasi pengguna
        if (Auth::attempt($credentials)) {
            Log::info('Login successful for user: ' . $request->username);
            
            // Jika akun aktif
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
    
        Log::warning('Login failed for user: ' . $request->username);
        return back()->with('error', 'Login Failed!'
            . ' Please check your username and password and try again.');
    }

    public function reset_password()
    {
        return view('backend.reset_password', [
            'title' => 'Reset Password Page',
        ]);
    }

    public function logoutBackEnd()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('backend.login'); // Pastikan ada rute 'backend.login'
    }
}
