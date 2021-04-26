<?php
include 'master/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tb_kategori where id='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=kategori')
	</script>";
?>