<?php
include 'master/koneksi.php';
$judul = $_POST['judul'];
$alat = $_POST['alat'];
$bahan = $_POST['bahan'];
$proses = $_POST['proses'];
$kategori = $_POST['kategori'];
$kirim = $_POST['kirim'];

if ($kirim) {
    $upload = "foto/";
    $file = $_FILES["foto"]["name"];
    $tmp_name = $_FILES["foto"]["tmp_name"];
    move_uploaded_file($tmp_name, $upload.$file);
    $sql = "INSERT INTO `tb_resep`  VALUES (NULL, '$judul', '$alat', '$bahan', '$proses', '$kategori', '$file')";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script type='text/javascript'>
            alert('Insert Berhasil');
        </script>";
        echo "<script type='text/javascript'>
                window.location.replace('?menu=resep')
        </script>";
    }
}

?>