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
            <div class="card-body">
                <form action="{{ route('backend.content2.update', [$pekerja->id, $status]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" value="{{ $pekerja->nama }}" id="nama" name="nama" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="posisi_dikontrak" class="form-label">Posisi Dilamar</label>
                        <input type="text" value="{{ $pekerja->posisi_dikontrak }}" id="posisi_dikontrak" name="posisi_dikontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_mulai_kontrak" class="form-label">Tanggal Submit</label>
                        <input type="date" value="{{ $pekerja->tanggal_mulai_kontrak }}" id="tanggal_mulai_kontrak" name="tanggal_mulai_kontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ $pekerja->email }}" id="email" name="email" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="pt" class="form-label">PT</label>
                        <input type="text" value="{{ $pekerja->pt }}" id="pt" name="pt" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="lama_kontrak" class="form-label">Lama Kontrak (bulan)</label>
                        <input type="number" value="{{ $pekerja->lama_kontrak }}" id="lama_kontrak" name="lama_kontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="upah_kontrak" class="form-label">Upah Kontrak</label>
                        <input type="number" value="{{ $pekerja->upah_kontrak }}" id="upah_kontrak" name="upah_kontrak" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Kontrak</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="Kontrak">Kontrak</option>
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