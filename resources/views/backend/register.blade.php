<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
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
                    <h3 class="text-center text-white">{{ $title }}</h3>
                    
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible w-25 mx-auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                    
                        <div class="d-flex justify-content-center my-4">
                            <div class="input-group w-100">
                                <span class="input-group-text bg-danger rounded-start"><i class="bi-envelope"></i></span>
                                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror rounded-end" placeholder="Masukkan Email" required>
                                @error('email') 
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }} 
                                </span> 
                                @enderror
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center my-4">
                            <div class="input-group w-100">
                                <span class="input-group-text bg-success rounded-start"><i class="bi-person"></i></span>
                                <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror rounded-end" placeholder="Masukkan Username" required>
                                @error('username') 
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }} 
                                </span> 
                                @enderror
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-center my-4">
                            <div class="input-group w-100">
                                <span class="input-group-text bg-warning rounded-start"><i class="bi-phone"></i></span>
                                <input type="type" name="hp" id="hp" class="form-control @error('hp') is-invalid @enderror rounded-end" placeholder="Masukkan No. HP" required>
                                @error('hp') 
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }} 
                                </span> 
                                @enderror
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center my-4">
                            <div class="input-group w-100">
                                <span class="input-group-text bg-warning rounded-start"><i class="bi-key"></i></span>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror rounded-end" placeholder="Masukkan Password" required>
                                @error('password') 
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }} 
                                </span> 
                                @enderror
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center my-4">
                            <div class="input-group w-100">
                                <span class="input-group-text bg-info rounded-start"><i class="bi-key"></i></span>
                                <input type="password" name="password_confirmation" id="ulang-password" class="form-control @error('password_confirmation') is-invalid @enderror rounded-end" placeholder="Ulangi Password" required>
                                @error('password_confirmation') 
                                <span class="invalid-feedback" role="alert"> 
                                    {{ $message }} 
                                </span> 
                                @enderror
                            </div>
                        </div>
                        <div class="mx-auto d-flex flex-column flex-md-row justify-content-md-center mt-4 ">
                            <button type="submit" class="btn btn-primary ms-auto w-100">Register</button> 
                        </div>
                    </form>

            </div>
            <div class="col-md-6 login-right order-md-2 d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="text-white mb-4">
                    Sudah Punya Akun? Yuk! login sekarang
                </h1>
                <a href="{{ route('backend.login') }}" class="btn btn-secondary w-50">Kembali</a>
            </div>
    </section>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
