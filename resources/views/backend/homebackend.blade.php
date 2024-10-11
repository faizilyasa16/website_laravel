@extends('backend.layout')
@section('content')
<div class="d-inline-block position-absolute top-50 start-50 translate-middle">
<h1 class="text-center" style="font-size: 5em;">Selamat Datang {{ Auth::user()->username }}.</h1>
</div>
@endsection

