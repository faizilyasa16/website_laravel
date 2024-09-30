<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css\Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\Bootstrap-icon/font/bootstrap-icons.css">
</head>
<body>
    <body data-bs-theme="dark">

        <div class="position-absolute" style="width: 40%; height: 2px; top: 30%; left: 50%; background-color: #0d6efd; transform: translate(-50%, -50%);"></div>
    
        <h3 class="text-center" style="margin-top: 300px">{{ $title }}</h3>
        <img src="img/kucing.png" alt="" width="150px" class="d-block mx-auto">
        @if(session()->has('error')) 
        <div class="alert alert-danger alert-dismissible w-25 mx-auto" role="alert"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
            <strong>{{ session('error') }}</strong> 
        </div> 
        @endif <!-- errorEnd --> 
        <div class="mx-auto bg-secondary d-flex align-items-center justify-content-center rounded" style="height: 100px ; width: 40%;">
            <b class="text-dark text-center">Masukkan email anda yang mau anda reset</p>
        </div>
        <form action="{{ route('backend.login') }}" method="post"> 
            @csrf
            <div class="d-flex justify-content-center my-4">
                <div class="input-group " style="width: 40%">
                    <span class="input-group-text bg-success rounded-start"><i class="bi-person"></i></span>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror rounded-end" placeholder="Masukkan Email">
                    @error('email')
                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        
            <div class="mx-auto d-flex flex-column flex-md-row justify-content-md-center mt-4" style="width: 40%;">
                <a href="{{ route('backend.login') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto">Submit</button> 
            </div>
    
        </form>
        <div class="d-flex justify-content-center" style="margin-top: 30px;">
            <div style="width: 40%; height: 2px; background-color: #0d6efd;"></div>
        </div>
        
    
            <script src="css\Bootstrap/js/bootstrap.min.js"></script>
        </body>
    </html>