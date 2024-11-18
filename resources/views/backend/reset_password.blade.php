<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
    <style>
        body {
            background: linear-gradient(to bottom, #1a1a60, #ff7f00);
        }   
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
<body>
    <div class="login-section">
        <div class="container w-50 mt-5">
            <h1 class="text-center text-white mb-3">Elit<span class="text-warning fw-bold">Ra</span></h1>
            <div class="row login-left">
                <div class="col-md-12">
                    <h2 class="text-center text-white">Forgot Password</h2>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
        
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3 text-white">
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
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div style="width: 100%; height: 2px; background-color: #ddd;"></div>
                        </div>
                        <div class="mb-3">
                            <a class="text-start" href="{{ route('backend.login') }}">Sudah Punya Akun?</a>
                        </div>
                        <div class="mx-auto d-flex flex-column flex-md-row justify-content-md-center mt-4 ">
                            <button type="submit" class="btn btn-primary ms-auto w-100">Send Password Reset Link</button> 
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('css/Bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
