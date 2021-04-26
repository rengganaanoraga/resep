<?php
include "master/koneksi.php";

if(isset($_POST['kirim'])){
    $nm_kategori = $_POST ['kategori'];

	$query = "INSERT INTO tb_kategori values(NULL,'$nm_kategori')";
    $hasil=mysqli_query($koneksi,$query);
    echo "<script type='text/javascript'>
            alert('Update Berhasil');
        </script>";
    echo "<script type='text/javascript'>
    window.location.replace('?menu=kategori')
    </script>";
}
?>