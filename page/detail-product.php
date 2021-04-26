<?php
    $id = $_GET['id'];
?>
<div class="container">
    <!-- image and prepare -->
    <?php
        $query = "select * from tb_resep where id = $id";
        $executeQuery = mysqli_query($koneksi, $query);
        while($data = mysqli_fetch_assoc($executeQuery)){
            ?>
            <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12" style="max-height: 500px; overflow: hidden;">
                    <img src="admin/foto/<?echo $data['foto']?>" class="img-fluid w-100" alt="">
                </div>
                <div class="col-12">
                    <h3 class="product-title">
                        <?php echo $data['judul']?>
                    </h3>
                </div>
                <div class="col-md-6">
                    <h4>Alat:</h4>
                    <p>
                    <?php echo $data['alat']?>
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Bahan:</h4>
                    <p>
                        <?php echo $data['bahan']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /image and prepare -->
    <div class="row">
        <div class="col">
            <h4>Cara Memasak:</h4>
            
            <p>
                <?php echo $data['bahan']?>
            </p>
        </div>
    </div>
    
            <?php
        }
    ?>
    <div class="row">
       <div class="col">
            <h4>Komentar</h4>
            <form action="master/aksi_komentar.php" method="post">
                <input type="text" name="id_user" value="<?php echo $_SESSION['id']?>" id="" hidden>
                <input type="text" name="id_resep" value="<?php echo $id?>" id="" hidden>
                <div class="mb-2">
                    <label for="my-textarea">Isi Komentar </label>
                    <textarea id="my-textarea" class="form-control" name="komentar" rows="3"></textarea>
                </div>
                <div class="mb-2">
                    <input type="submit" name="submit" class="btn btn-primary"  value="kirim">
                </div>
            </form>
           <?php
            $q = "SELECT b.id, b.komentar, b.date, u.nama_lengkap FROM tb_komentar b inner join tb_user u on b.id_user = u.id where b.id_resep = $id ";
            $executeQuery = mysqli_query($koneksi, $q);
        while($data = mysqli_fetch_assoc($executeQuery)){
            ?>
            <div class="comment-container">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title d-flex">
                            <?php echo $data['nama_lengkap']?>
                            
                        </h3>
                        <span class="date ml-auto" style="font-size: 20px;">
                        <?php echo $data['date']?>
                        </span>
                        <p class="card-title">
                        <?php echo $data['komentar']?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
           ?>
       </div>
    </div>
</div>