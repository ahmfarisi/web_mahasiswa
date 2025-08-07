<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>
<body>
    <div class="container">

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Kampus Inovasi</h1>
        </div>    

        <p class="h3 mt-2">Ubah Data Mahasiswa</p>

        <a href="index.php" type="button" class="btn btn-dark">Kembali</a>

        <?php
        $t_npm = $_GET["kirim"];

        include("koneksi.php");
        $perintah = "SELECT * FROM tblmhs WHERE npm='$t_npm'";
        $eksekusi = mysqli_query($konek, $perintah);
        $ambil = mysqli_fetch_array($eksekusi)
        ?>

        <form action="proses-ubah.php" method="POST">

            <div class="mb-3 mt-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" value="<?php echo $ambil["npm"]; ?>" class="form-control" id="npm" placeholder="Nomor Pengenal Mahasiswa" name="npm" readonly>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" value="<?php echo $ambil["nama"]; ?>" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="jns_kel" class="form-label">Jenis Kelamin:</label>

                <?php
                $t_jns_kel = $ambil["jns_kel"];

                if($t_jns_kel == "LK"){
                    $pilih_lk = "checked";
                    $pilih_pr = "";
                }
                elseif($t_jns_kel == "PR"){
                    $pilih_lk = "";
                    $pilih_pr = "checked";
                }
                ?>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="LK" name="jns_kel" value="LK" <?php echo $pilih_lk ?> >Laki-Laki
                    <label class="form-check-label" for="LK"></label>
                </div>

                <div class="form-check">
                    <input type="radio" class="form-check-input" id="PR" name="jns_kel" value="PR" <?php echo $pilih_pr ?> >Perempuan
                    <label class="form-check-label" for="PR"></label>
                </div>                
            </div>

            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi:</label>

                <?php
                $t_prodi = $ambil["prodi"];

                if($t_prodi == "Manajemen Informatika"){
                    $pilih_mi = "selected";
                    $pilih_si = "";
                    $pilih_if = "";
                }
                elseif($t_prodi == "Sistem Informasi"){
                    $pilih_mi = "";
                    $pilih_si = "selected";
                    $pilih_if = "";
                }
                elseif($t_prodi == "Informatika"){
                    $pilih_mi = "";
                    $pilih_si = "";
                    $pilih_if = "selected";
                }
                ?>

                <select class="form-select" name="prodi">
                    <option value="Manajemen Informatika" <?php echo $pilih_mi ?> >Manajemen Informatika</option>
                    <option value="Sistem Informasi" <?php echo $pilih_si ?> >Sistem Informasi</option>
                    <option value="Informatika" <?php echo $pilih_if ?> >Informatika</option>
                </select>                
            </div>

            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>

    </div>

</body>
</html>