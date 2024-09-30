@extends('backend.layout')
@section('content')
<h3 class="text-center">{{ $title }}</h3>
<p>Selamat Datang di halaman {{ $title }} wahai <b>{{ Auth::user()->username }}</b> pada aplikasi Toko Nunez dengan hak akses yang anda
miliki sebagai <b>@if( Auth::user()->role == 1 ) 
                Super Admin 
                @elseif(Auth::user() -> role == 0 ) 
                Admin
                @else
                User
                @endif</b> Ini adalah halaman utama</p>
@endsection

