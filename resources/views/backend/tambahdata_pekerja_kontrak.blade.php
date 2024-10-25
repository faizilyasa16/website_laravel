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
                <h3>Tambah Pekerja yang Sudah memiliki Kontrak</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backend.content2.store2') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="posisi_dikontrak" class="form-label">Posisi Dilamar</label>
                        <input type="text" id="posisi_dikontrak" name="posisi_dikontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_mulai_kontrak" class="form-label">Tanggal Submit</label>
                        <input type="date" id="tanggal_mulai_kontrak" name="tanggal_mulai_kontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="pt" class="form-label">PT</label>
                        <input type="text" id="pt" name="pt" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="lama_kontrak" class="form-label">Lama Kontrak (bulan)</label>
                        <input type="number" id="lama_kontrak" name="lama_kontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="upah_kontrak" class="form-label">Upah Kontrak</label>
                        <input type="number" id="upah_kontrak" name="upah_kontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Kontrak</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="Kontrak">Kontrak</option>
                            <option value="belum">Belum Kontrak</option>
                            <option value="pendaftar">Pendaftar</option>
                        </select>
                    </div>
    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('backend.content2') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah Pekerja</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>