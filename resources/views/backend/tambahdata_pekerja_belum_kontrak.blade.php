<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Bootstrap/css/bootstrap.min.css') }}">
</head>
<body data-bs-theme="dark">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Pekerja yang Belum memiliki Kontrak</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backend.content2.store2') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="posisi_keahlian" class="form-label">Posisi Keahlian</label>
                        <input type="text" name="posisi_keahlian" id="posisi_keahlian" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="cv" class="form-label">CV</label>
                        <input type="file" name="cv" id="cv" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="Belum Kontrak">Belum Kontrak</option>
                        </select>
                    </div>
    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('backend.content2') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
