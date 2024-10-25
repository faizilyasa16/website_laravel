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
                <h3>Tambah Data Perusahaan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('backend.content4.store') }}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                        <label for="perusahaan" class="form-label">Nama Perusahaan</label>
                        <input type="text" name="perusahaan" id="perusahaan" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="jumlah_staff_bekerja_sama" class="form-label">Jumlah Staff Bekerja Sama</label>
                        <input type="number" name="jumlah_staff_bekerja_sama" id="jumlah_staff_bekerja_sama" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_terdaftar" class="form-label">Tanggal Terdaftar</label>
                        <input type="date" name="tanggal_terdaftar" id="tanggal_terdaftar" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                        <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="email_perusahaan" class="form-label">Email Perusahaan</label>
                        <input type="email" name="email_perusahaan" id="email_perusahaan" class="form-control" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status Perusahaan</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="Terdaftar">Terdaftar</option>
                            <option value="Berakhir">Berakhir</option>
                        </select>
                    </div>
    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('backend.content4') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>