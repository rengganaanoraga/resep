<?php
include 'master/koneksi.php';

$id_resep = $_POST['id_resep'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$alat = $_POST['alat'];
$bahan = $_POST['bahan'];
$proses = $_POST['proses'];
$kirim = $_POST['kirim'];

$sql = "UPDATE `tb_resep` SET `judul` = '$judul', `alat` = '$alat', `bahan` = '$bahan', `proses` = '$proses', `id_kategori` = '$kategori' WHERE `tb_resep`.`id` = $id_resep
";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script type='text/javascript'>
        alert('Update Berhasil');
    </script>";
    echo "<script type='text/javascript'>
                window.location.replace('?menu=barang')
        </script>";
    }else{
        ?><?php
    }
?>