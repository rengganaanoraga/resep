<?php 
include 'master/koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nm_kategori = $_POST['kategori'];

mysqli_query($koneksi,"update tb_kategori set nama='$nm_kategori' where id='$id_kategori'");

echo "<script type='text/javascript'>
            alert('Update Berhasil');
        </script>";
echo "<script type='text/javascript'>
			window.location.replace('?menu=kategori')
	</script>";
 
?>