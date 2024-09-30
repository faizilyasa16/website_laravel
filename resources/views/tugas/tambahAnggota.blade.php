<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css\Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <h3 class="text-center">{{ $judul }}</h3>
    <form action="{{ route('anggota.store') }}" method="post">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        @csrf
        <label for="NAMA" class="form-label">Nama<br>
        <input type="text" name="nama" id="NAMA"></label><br>

        <label for="HP" class="form-label">HP</label><br>
        <input type="text" name="hp" id="HP"></label>
        <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('anggota.index') }}">
                <button class="btn btn-primary">KEMBALI</button>
            </a>
    </form>

    <script src="css\Bootstrap/js/bootstrap.min.css"></script>
</body>
</html>