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
    <h3>Laporan Data Perusahaan</h3>
    <p>Periode: {{ $request->tanggal_awal }} - {{ $request->tanggal_akhir }}</p>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Jumlah Staff</th>
                <th>Tanggal Terdaftar</th>
                <th>Tanggal Berakhir</th>
                <th>Email Perusahaan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perusahaan as $key => $company)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $company->perusahaan }}</td>
                <td>{{ $company->jumlah_staff_bekerja_sama }}</td>
                <td>{{ $company->tanggal_terdaftar }}</td>
                <td>{{ $company->tanggal_berakhir }}</td>
                <td>{{ $company->email_perusahaan }}</td>
                <td>{{ $company->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
