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
    <h1 class="text-center">Daftar Pendaftaran Kursus Bahasa Inggris</h1>
    <table class="table table-bordered w-75 mx-auto text-center">
        <thead>
            <tr>
                <td scope="col">Nama Siswa</td>
                <td >:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenjang</td>
                <td>:</td>
                <td>               
                <select name="jenjang" id="jenjang">
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                    <option value="sma">SMA</option>
                    <option value="s1">S1</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="text" class="form-control"></td>
            </tr>

            <tr>
                <td colspan="3"><button class="btn btn-primary">Submit</button>
                <button class="btn btn-danger">Batal</button></td>
            </tr>
        </tbody>
    </table>
    <script src="css\Bootstrap/js/bootstrap.min.css"></script>
</body>
</html>