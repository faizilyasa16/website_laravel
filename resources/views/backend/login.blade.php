<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Bootstrap-icon/font/bootstrap-icons.css">
    <style>
        .bg-primary-dark {
            background-color: #1C2655;
        }

        .bg-primary-dark-bit {
            background-color: #222C65;

        }

        .login-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-left {
            background-color: #222C65;
            padding: 30px;
            border-radius: 8px;
        }

        .login-right {
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body class="bg-primary-dark">
    <section class="login-section">
        <div class="container">
            <div class="row login-left">
                <div class="col-md-6 order-md-1">
                    <h1 class="text-center text-white mb-3">Elit<span class="text-warning fw-bold">Ra</span></h1>
                    <h3 class="text-center text-white mb-3">{{ $title }}</h3>
                    <div class="col">
                        @if(session()->has('error')) 
                        <div class="alert alert-danger alert-dismissible mx-auto" style="width: 100%" role="alert"> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                            <strong>{{ session('error') }}</strong> 
                        </div> 
                        @endif 
                    </div>

                    <form action="{{ route('backend.login') }}" method="post"> 
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-success rounded-start"><i class="bi-person"></i></span>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror rounded-end" placeholder="Masukkan Username">
                            @error('username')
                            <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-warning rounded-start"><i class="bi-key"></i></span>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror rounded-end" placeholder="Masukkan Password">
                            @error('password') 
                            <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-center mb-3">
                            <div style="width: 100%; height: 2px; background-color: #ddd;"></div>
                        </div>
                        <div class="mb-3 text-end">
                            <a href="{{ route('reset_password') }}">Lupa Password?</a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary w-100">Login</button> 
                        </div>
                    </form>
                    
                </div>
                <div class="col-md-6 login-right order-md-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <h1 class="text-white mb-4">
                        Belum Buat Akun? Yuk!
                        <br>
                        BUAT AKUNMU SEKARANG JUGA!!!
                    </h1>
                    <a href="{{ route('register') }}" class="btn btn-secondary w-50">Register</a>
                </div>
                
            </div>
        </div>
    </section>

    <script src="css/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
