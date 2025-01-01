<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h3>Laporan Data Pendaftar</h3>
    <p>Periode: {{ $request->tanggal_awal }} - {{ $request->tanggal_akhir }}</p>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Posisi Dilamar</th>
                <th>Email</th>
                <th>Domisili</th>
                <th>Tanggal Submit</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftar as $key => $product)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->posisi_dilamar }}</td>
                <td>{{ $product->email }}</td>
                <td>{{ $product->alamat_ktp }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
