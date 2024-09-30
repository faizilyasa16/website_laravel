<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="css\Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\Bootstrap-icon/font/bootstrap-icons.css">
</head>
<body data-bs-theme="dark">

    <div class="position-absolute" style="width: 40%; height: 2px; top: 30%; left: 50%; background-color: #0d6efd; transform: translate(-50%, -50%);"></div>

    <h3 class="text-center" style="margin-top: 300px">{{ $title }}</h3>
    <img src="img/kucing.png" alt="" width="150px" class="d-block mx-auto">
    <div class="col">
        @if(session()->has('error')) 
        <div class="alert alert-danger alert-dismissible mx-auto" style="width: 40%" role="alert"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
            <strong>{{ session('error') }}</strong> 
        </div> 
        @endif <!-- errorEnd --> 
    </div>
    <form action="{{ route('backend.login') }}" method="post"> 
        @csrf
        <div class="d-flex justify-content-center my-4">
            <div class="input-group " style="width: 40%">
                <span class="input-group-text bg-success rounded-start"><i class="bi-person"></i></span>
                <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror rounded-end" placeholder="Masukkan Username">
                @error('username')
                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="d-flex justify-content-center my-3">
            <div class="input-group " style="width: 40%">
                <span class="input-group-text bg-warning rounded-start"><i class="bi-key"></i></span>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror rounded-end" placeholder="Masukkan Password">
                @error('password') 
                <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div class="mx-auto d-flex flex-column flex-md-row justify-content-md-center mt-4" style="width: 40%;">
            <a href="{{ route('reset_password') }}" class="btn btn-info me-2">Lupa Password</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
            <button type="submit" class="btn btn-primary ms-auto">Login</button> 
        </div>

    </form>
    <div class="d-flex justify-content-center" style="margin-top: 30px;">
        <div style="width: 40%; height: 2px; background-color: #0d6efd;"></div>
    </div>
    

        <script src="css\Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>