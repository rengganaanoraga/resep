<?php
    include 'koneksi.php';

    @$nama = $_POST['nama'];
    @$email = $_POST['email'];
    @$password = md5("Padasd0890".md5($_POST['password']));
    @$password2 = md5("Padasd0890".md5($_POST['konfirmasi_password']));
    @$submit = $_POST['button_register'];

    $sql = "INSERT INTO `tb_user` VALUES (NULL, '$nama', '$email', '$password', '2')";

    if ($password == $password2) {
        if (isset($submit)) {
        
            if (mysqli_query($koneksi, $sql)) {
                echo "
                <script>
                    alert('Register Berhasil');
                    window.location = '../?page=login';
                </script>
                ";
            }else{
               echo  mysqli_error($koneksi);
            }
    
        }
    }else{
        echo "
                <script>
                    alert('Konfirmasi Password Salah');
                    window.location = '../?page=register';
                </script>
                ";
    }
?>