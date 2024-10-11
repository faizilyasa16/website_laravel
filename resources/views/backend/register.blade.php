<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-icon/font/bootstrap-icons.css') }}">
</head>
<body data-bs-theme="dark">
    <h3 class="text-center" style="margin-top: 150px">{{ $title }}</h3>
    <img src="{{ asset('img/kucing.png') }}" alt="" width="150px" class="d-block mx-auto">
    
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
            <div class="input-group" style="width: 40%">
                <span class="input-group-text bg-danger rounded-start"><i class="bi-person"></i></span>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror rounded-end" placeholder="Masukkan Email" required>
                @error('email') 
                <span class="invalid-feedback" role="alert"> 
                    {{ $message }} 
                </span> 
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="input-group" style="width: 40%">
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
            <div class="input-group" style="width: 40%">
                <span class="input-group-text bg-warning rounded-start"><i class="bi-key"></i></span>
                <input type="type" name="hp" id="hp" class="form-control @error('hp') is-invalid @enderror rounded-end" placeholder="Masukkan No. HP" required>
                @error('hp') 
                <span class="invalid-feedback" role="alert"> 
                    {{ $message }} 
                </span> 
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-center my-4">
            <div class="input-group" style="width: 40%">
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
            <div class="input-group" style="width: 40%">
                <span class="input-group-text bg-info rounded-start"><i class="bi-key"></i></span>
                <input type="password" name="password_confirmation" id="ulang-password" class="form-control @error('password_confirmation') is-invalid @enderror rounded-end" placeholder="Ulangi Password" required>
                @error('password_confirmation') 
                <span class="invalid-feedback" role="alert"> 
                    {{ $message }} 
                </span> 
                @enderror
            </div>
        </div>
        <div class="mx-auto d-flex flex-column flex-md-row justify-content-md-center mt-4" style="width: 40%;">
            <a href="{{ route('backend.login') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary ms-auto">Register</button> 
        </div>
    </form>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
