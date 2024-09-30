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
    <a href="{{ route('anggota.create') }}">
        <button class="btn btn-primary my-3" style="margin-left: 150px">TAMBAH</button>
    </a>

    <table class="table table-bordered w-75 mx-auto text-center">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @foreach ($index as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->hp }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $row->id) }}">
                        <button class="btn btn-warning">EDIT</button>
                    </a>
                    <form action="{{ route('anggota.destroy', $row->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">HAPUS</button>
                    </form>
                </td>
            </tr>
            
        @endforeach
    </table>
    <script src="css\Bootstrap/js/bootstrap.min.css"></script>
</body>
</html>