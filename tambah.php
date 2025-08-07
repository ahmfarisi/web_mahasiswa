<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <div class="container">

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Kampus Inovasi</h1>
        </div>    

        <p class="h3 mt-2">Tambah Data Mahasiswa</p>

        <a href="index.php" type="button" class="btn btn-dark">Kembali</a>

        <form action="proses-tambah.php" method="POST">

            <div class="mb-3 mt-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" class="form-control" id="npm" placeholder="Nomor Pengenal Mahasiswa" name="npm" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="jns_kel" class="form-label">Jenis Kelamin:</label>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="LK" name="jns_kel" value="LK" checked>Laki-Laki
                    <label class="form-check-label" for="LK"></label>
                </div>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="PR" name="jns_kel" value="PR">Perempuan
                    <label class="form-check-label" for="PR"></label>
                </div>                
            </div>

            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi:</label>
                <select class="form-select" name="prodi">
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                </select>                
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>

</body>
</html>