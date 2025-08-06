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

        <p class="h3 mt-2">Daftar Mahasiswa</p>

        <a href="tambah.php" type="button" class="btn btn-primary">Tambah</a>

        <table class="table">
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Program Studi</th>
                <th>Aksi</th>
            </tr>

            <?php
            include("koneksi.php");
            $perintah = "SELECT * FROM tblmhs";
            $eksekusi = mysqli_query($konek, $perintah);
            $i = 1;

            while($ambil = mysqli_fetch_array($eksekusi)){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $ambil["npm"]; ?></td>
                    <td><?php echo $ambil["nama"]; ?></td>
                    <td><?php echo $ambil["jns_kel"]; ?></td>
                    <td><?php echo $ambil["prodi"]; ?></td>
                    <td>
                        <a href="ubah.php?kirim=<?php echo $ambil["npm"]; ?>" type="button" class="btn btn-primary btn-sm">Ubah</a>
                        <a href="proses-hapus.php?kirim=<?php echo $ambil["npm"]; ?>" type="button" class="btn btn-primary btn-sm">Hapus</a>
                    </td> 
                </tr>
                <?php
                $i++;
            }
            ?>
            
        </table>

    </div>

</body>
</html>