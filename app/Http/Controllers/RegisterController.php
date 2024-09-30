<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function register()
    {
        return view('backend.register', [
            'title' => 'Register Page',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255', // Ganti 'name' menjadi 'nama'
            'email' => 'required|string|email|max:255|unique:user',
            'hp' => 'required|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Simpan data ke database
        User::create([
            'username' => $request->username, // Ganti 'name' menjadi 'nama'
            'email' => $request->email,
            'hp' => $request->hp,
            'password' => Hash::make($request->password),
        ]);
    
        // Redirect atau beri respon
        return redirect()->route('backend.login')->with('success', 'Registration successful!');
    }
}
