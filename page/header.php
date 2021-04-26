<?php
    session_start();
    include 'master/koneksi.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="nav ">

                <li class="nav-item">
                    <a href="?page=home" class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <?php
                        if (isset($_SESSION['nama_lengkap'])) {
                            ?>
                             <a href="master/aksi_logout.php" class="nav-link btn btn-primary" onclick="confirm('apa anda yakin?')" href="#" tabindex="-1" aria-disabled="true">Logout</a>
                            <?php
                        }else{
                            ?>
                            <a href="?page=login" class="nav-link btn btn-primary" href="#" tabindex="-1" aria-disabled="true">Login</a>
                            <?php
                        }
                    ?>
                </li>
            </ul>
            
        </div>
    </div>
</nav>