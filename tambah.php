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

        <a href="index.php" type="button" class="btn btn-primary">Kembali</a>

        <form action="proses-tambah.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" class="form-control" id="npm" placeholder="Nomor Pengenal Mahasiswa" name="npm">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>
</html>