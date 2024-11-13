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
                <h3>Edit Data Perusahaan Terafiliasi</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backend.content4.update', [$perusahaan->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="perusahaan" class="form-label">Perusahaan</label>
                        <input type="text" id="perusahaan" name="perusahaan" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="jumlah_staff_bekerja_sama" class="form-label">Jumlah Staff Bekerja Sama</label>
                        <input type="text" id="jumlah_staff_bekerja_sama" name="jumlah_staff_bekerja_sama" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_terdaftar" class="form-label">Tanggal Terdaftar</label>
                        <input type="date" id="tanggal_terdaftar" name="tanggal_terdaftar" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                        <input type="date" id="tanggal_berakhir" name="tanggal_berakhir" class="form-control" required>
                    </div>

    
                    <div class="mb-3">
                        <label for="email_perusahaan" class="form-label">Email Perusahaan</label>
                        <input type="email" id="email_perusahaan" name="email_perusahaan" class="form-control" required>
                    </div>

    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Kontrak</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="Terdaftar">Terdaftar</option>
                            <option value="Berakhir">Berakhir</option>
                        </select>
                    </div>
    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('backend.content4') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>