<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
    </style></head>
<body>

        
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
            
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                    
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
                                        <span class="input-group-text bg-warning rounded-start"><i class="bi-key"></i></span>
                                        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror rounded-end" placeholder="Masukkan Password Ulang" required>
                                        @error('password_confirmation') 
                                        <span class="invalid-feedback" role="alert"> 
                                            {{ $message }} 
                                        </span> 
                                        @enderror
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <div style="width: 100%; height: 2px; background-color: #ddd;"></div>
                                </div>
        
                                <div class="mx-auto d-flex flex-column flex-md-row justify-content-md-center mt-4 ">
                                    <button type="submit" class="btn btn-primary ms-auto w-100">Reset Password</button> 
                                </div>
                            </form>
                    </div>
                </div>
    
            </div>
        </div>
</body>
</html>
