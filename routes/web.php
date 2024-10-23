<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\pendaftarController;
use App\Http\Controllers\PerusahaanController;
use App\Models\Pendaftar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/baru', function () {
    return view('hello');
});

Route::get('helloworld', [HelloController::class, 'index']);
Route::get('coba', [HelloController::class, 'hello']);
Route::get('tugas', [HelloController::class, 'tugas']);
Route::get('tugas2', [HelloController::class, 'tugas2']);
Route::resource('anggota', AnggotaController::class);


Route::get('home', [HomeController::class, 'homeBackEnd'])->name('home');

Route::get('login', [LoginController::class, 'loginBackEnd'])->name('backend.login');
Route::post('login', [LoginController::class, 'authenticateBackEnd'])->name('backend.login');
Route::post('logout', [LoginController::class, 'logoutBackEnd'])->name('backend.logout');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::get('reset_password', [LoginController::class, 'reset_password'])->name('reset_password');

Route::get('/content', function () {
    return view('backend.content1');
});
Route::get('/content2', [TableController::class, 'index'])->name('backend.content2');
Route::delete('/content2/{id}', [TableController::class, 'destroy'])->name('backend.content2.destroy');


Route::get('/content3', [pendaftarController::class, 'index'])->name('backend.content3');
Route::delete('/content3/{id}', [pendaftarController::class, 'destroy'])->name('backend.content3.destroy');

Route::get('/content4', [PerusahaanController::class, 'index'])->name('backend.content3');
Route::delete('/content4/{id}', [PerusahaanController::class, 'destroy'])->name('backend.content3.destroy');