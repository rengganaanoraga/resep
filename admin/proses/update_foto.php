<?php
include 'master/koneksi.php';

$id_resep = $_POST['id_resep'];
$kirim = $_POST['kirim'];

$upload = "foto/";
$file = $_FILES["foto"]["name"];
$tmp_name = $_FILES["foto"]["tmp_name"];
move_uploaded_file($tmp_name, $upload.$file);
echo $id_resep;
$sql = "UPDATE `tb_resep` SET `foto` = '$file' WHERE `id` = $id_resep";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script type='text/javascript'>
        alert('Update Berhasil');
    </script>";
    echo "<script type='text/javascript'>
                window.location.replace('?menu=resep')
        </script>";
    }else{
        ?><?php
    }
?>