<?php
include 'master/koneksi.php';

$id = $_GET['id_resep'];

mysqli_query($koneksi,"delete from tb_resep where id='$id'");
	
echo "<script type='text/javascript'>
alert('Delete Berhasil');
</script>";
        echo "<script type='text/javascript'>
                window.location.replace('?menu=resep')
        </script>";
?>