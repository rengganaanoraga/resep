<?php
    session_start();
    include 'koneksi.php';
    if (!isset($_SESSION['id'])) {
        echo "
        <script>
            alert('login terlebih dahulu')
            window.location = '../?page=login';
        </script>
        ";
    }
    @$komentar = $_POST['komentar'];
    @$id_user = $_POST['id_user'];
    @$id_resep = $_POST['id_resep'];
    @$submit = $_POST['submit'];

    $sql = "INSERT INTO `tb_komentar`  
    VALUES (NULL, '$komentar', '$id_resep', NOW(), '$id_user')";

        if (isset($submit)) {
        
            if (mysqli_query($koneksi, $sql)) {
                echo "
                <script>
                    window.location = '../?page=home';
                </script>
                ";
            }else{
               echo  mysqli_error($koneksi);
            }
    
        }
 
?>