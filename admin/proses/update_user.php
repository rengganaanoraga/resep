<?php 
include 'master/koneksi.php';

$id_user = $_POST['id'];
$nm = $_POST['nama'];
$email = $_POST['email'];

if (mysqli_query($koneksi,"UPDATE tb_user SET nama_lengkap = '$nm', email = '$email' WHERE id_user = '$id_user'")) {
	
}
 

 
?>

<?php 
include 'master/koneksi.php';

$id = $_POST['id'];
$nm = $_POST['nama'];
$email = $_POST['email'];

if (mysqli_query($koneksi,"UPDATE tb_user SET nama_lengkap = '$nm', email = '$email' WHERE id = '$id'")) {

	echo "<script type='text/javascript'>
	alert('Update Berhasil');
</script>";
echo "<script type='text/javascript'>
			window.location.replace('?menu=list_user')
	</script>";
}else{
	echo "<script type='text/javascript'>
	alert('po');
</script>";
echo "<script type='text/javascript'>
			window.location.replace('?menu=list_user')
	</script>";
}

 
 
?>