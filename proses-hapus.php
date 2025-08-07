<?php
    $t_npm = $_GET["kirim"];

    include("koneksi.php");
    $perintah = "DELETE FROM tblmhs WHERE npm = '$t_npm'";
    $eksekusi = mysqli_query($konek, $perintah);
    $cek = mysqli_affected_rows($konek);

    //ini kalo hapus data berhasil
    if($cek >0){ 
        ?>
        <script>alert("Hapus Data Berhasil")</script>
        <meta http-equiv="refresh" content="0;URL=index.php" />
        <?php
    }
    //ini kalo hapus data gagal
    else{ 
        ?>
        <script>alert("Hapus Data Gagal")</script>
        <?php
    }
?>