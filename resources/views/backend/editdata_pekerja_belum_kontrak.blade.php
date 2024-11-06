<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Pekerja Yang Memiliki Kontrak</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
</head>
<body data-bs-theme="dark">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Edit Data Pekerja yang Sudah memiliki Kontrak</h3>
            </div>
            @if ($errors->any()) 
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('backend.content2.update2', [$pekerja->id, $status]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="posisi_keahlian" class="form-label">Posisi Dilamar</label>
                        <input type="text" id="posisi_keahlian" name="posisi_keahlian" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_masuk" class="form-label">Tanggal Submit</label>
                        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="cv" class="form-label">CV</label>
                        <input type="file" id="cv" name="cv" class="form-control">
                    </div>
    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Kontrak</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="Belum Kontrak">Belum Kontrak</option>
                        </select>
                    </div>
    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('backend.content2') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>