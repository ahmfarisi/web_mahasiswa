<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container">

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Kampus Inovasi</h1>
        </div>    

    </div>

    <hr>
    <h3>Daftar Mahasiswa</h3>
    <a href="tambah.php">Tambah</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <tr>
           <td>1</td>
           <td>123456789</td>
           <td>Ahmad Farisi</td>
           <td>LK</td>
           <td>Manajemen Informatika</td>
            <td>
                <a href="ubah.php">Ubah</a>
                <a href="proses-hapus.php">Hapus</a>
            </td> 
        </tr>
        <tr>
           <td>2</td>
           <td>987654321</td>
           <td>Nabila Yasmin</td>
           <td>PR</td>
           <td>Sistem Informasi</td>
           <td>
                <a href="ubah.php">Ubah</a>
                <a href="proses-hapus.php">Hapus</a>
            </td> 
        </tr>
    </table>
</body>
</html>