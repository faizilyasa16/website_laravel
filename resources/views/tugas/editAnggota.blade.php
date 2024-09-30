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
    
    <form action="{{ route('anggota.update', $anggota->id) }}" method="post">
        @method('put')
        @csrf
        <label for="NAMA" class="form-label">Nama<br>
        <input type="text" name="nama" id="NAMA" value="{{ $anggota->nama }}"></label><br>

        <label for="HP" class="form-label">HP</label><br>
        <input type="text" name="hp" id="HP" value="{{ $anggota->hp }}"></label>

        <br>
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('anggota.index') }}">
                <button type="button" class="btn btn-danger">Batal</button">
            </a>
    </form>

    <SCript src="css\Bootstrap/js/bootstrap.min.css"></SCript>
</body>
</html>