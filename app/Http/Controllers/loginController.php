<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use App\Models\User;


class LoginController extends Controller
{
    public function loginBackEnd()
    {
        return view('backend.login', [
            'title' => 'Login',
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
        return back()->with('error', 'Login Failed! Please check your username and password and try again.');
    }

// Menampilkan form reset password
    public function reset_password()
    {
        return view('backend.reset_password', [
            'title' => 'Reset Password Page', // Judul halaman
        ]);
    }
    // Fungsi untuk menampilkan halaman reset password
    public function showResetForm($token)
    {
        return view('backend.reset-password-form', [
            'title' => 'Reset Password Page',
            'token' => $token, // Make sure the token is passed correctly to the view
        ]);
    }


    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        // Kirim link reset password ke email
        $status = Password::sendResetLink($request->only('email'));
    
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', 'Link reset password sudah dikirim ke email Anda.');
        } else {
            return back()->withErrors(['email' => 'Gagal mengirim link reset password.']);
        }
    }
        
    public function resetPassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8', // Validasi password dan konfirmasi
        ]);
    
        // Reset password menggunakan token yang diterima
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($request->password), // Enkripsi password baru
                ])->save();
            }
        );
    
        // Menangani hasil reset password
        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('backend.login')->with('status', 'Password has been reset successfully!'); // Mengarahkan ke login
        } else {
            return back()->withErrors(['email' => [__($status)]]); // Kembali jika ada error
        }
    }

    public function logoutBackEnd()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('backend.login'); // Pastikan ada rute 'backend.login'
    }
}
