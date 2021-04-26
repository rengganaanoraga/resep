<?php
include "master/koneksi.php";

if(isset($_POST['kirim'])){
    $nm = $_POST ['nama'];
    $email = $_POST ['email'];
    $pass = md5("Padasd0890".md5($_POST ['password']));

    $query = "INSERT INTO tb_user values(NULL,'$nm','$email','$pass','2')";
    $hasil=mysqli_query($koneksi,$query);
    echo "<script type='text/javascript'>
    window.location.replace('?menu=list_user')
    </script>";
}
?>