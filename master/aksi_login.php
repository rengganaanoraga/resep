<?php
    include 'koneksi.php';

    session_start();
    $email = $_POST['email'];
    $password = md5("Padasd0890".md5($_POST['password']));
    $submit = $_POST['button_login'];

    $sql = "SELECT * FROM `tb_user` WHERE `email` LIKE '$email' AND `level_user` = 2";
    if (isset($submit)) {
        $execute = mysqli_query($koneksi, $sql);
        if ($execute) {
            $userData = mysqli_fetch_array($execute);
            if ($userData['email'] == $email && $userData['password'] == $password) {
                $_SESSION['id'] = $userData['id'];
                $_SESSION['nama_lengkap'] = $userData['nama_lengkap'];
                ?>
                <script>
                    alert("Login Succes!");
                    window.location.replace('../?page=home');
                </script>
                <?php
            }else{
                echo '<script type="text/javascript">
                alert("email atau password salah");
                window.location.replace("../?page=home");
                </script>';
            }
        }else{
           echo  mysqli_error($koneksi);
        }

    }
?>