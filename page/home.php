
<div class="side-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="side-menu-title">Pilih Kategori</h2>
                
                <form action="" method="post">
                <div class="mb-3">
                    <select name="kategori" class="form-control">
                        <option value="">Pilih Kategori</option>
                        <?php 
                            $katQuery = "SELECT * FROM tb_kategori ";
                            $executeKat = mysqli_query($koneksi, $katQuery);
                            while ($kategori=mysqli_fetch_array($executeKat)) {
                        ?>
                            <option value="<?=$kategori['id']?>"><?=$kategori['nama']?></option> 
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-outline-primary" value="Cari" >
                </div>

                </form>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col">
                        <h2>Resep</h2>
                    </div>
                    
                </div>
                <div class="row">
                   
                    <?php
                     
                        $batas = 9;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;  

                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                       if ($k = @$_POST['kategori']) {
                        $barQuer = "SELECT distinct b.id, b.judul, b.alat, b.bahan,  k.nama, b.proses,  b.foto FROM tb_resep b inner join tb_kategori k on b.id_kategori = k.id  where b.id_kategori = $k limit $halaman_awal, $batas";        
                        $barQuery = "SELECT distinct b.id, b.judul, b.alat, b.bahan,  k.nama, b.proses,  b.foto FROM tb_resep b inner join tb_kategori k on b.id_kategori = k.id where b.id_kategori = $k";
                        $executeBar = mysqli_query($koneksi, $barQuery);

                        $data = mysqli_query($koneksi,$barQuery);
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $executeBar = mysqli_query($koneksi, $barQuer);
                       }else{
                        $barQuer = "SELECT b.id, b.judul, b.alat, b.bahan,  k.nama, b.proses,  b.foto FROM tb_resep b inner join tb_kategori k on b.id_kategori = k.id  limit $halaman_awal, $batas";        
                        $barQuery = "SELECT b.id, b.judul, b.alat, b.bahan,  k.nama, b.proses,  b.foto FROM tb_resep b inner join tb_kategori k on b.id_kategori = k.id ";
                        $executeBar = mysqli_query($koneksi, $barQuery);

                        $data = mysqli_query($koneksi,$barQuery);
                        $jumlah_data = mysqli_num_rows($data);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $executeBar = mysqli_query($koneksi, $barQuer);
                       }

                        
                        
                        while($data = mysqli_fetch_assoc($executeBar)){
                            ?>
                        
                    <div class="col-md-6 col-lg-4 col-6 py-2">
                        <div class="card-img-top" style="max-height: 120px; overflow: hidden;">
                            <img src="admin/foto/<?echo $data['foto']?>" alt="" class="w-100">
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $data['judul']?></h5>
                                <p class="card-text"><?php echo $data['nama']?></p>
                                <a href="?page=detail-product&&id=<?php echo $data['id']?>" class="btn btn-primary">Detail resep</a>
                            </div>
                        </div>
                    </div>
                            <?php
                        }
                    ?>
                     <ul class="pagination justify-content-center">
                                <li class="page-item">
                                  <a class="page-link" <?php if($halaman > 1){ echo "href='?menu=barang&&halaman=$previous'"; } ?>>Previous</a>
                                </li>
                                <?php 
                                for($x=1;$x<=$total_halaman;$x++){
                                  ?> 
                                  <li class="page-item"><a class="page-link" href="?menu=barang&&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                  <?php
                                }
                                ?>              
                                <li class="page-item">
                                  <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?menu=barang&&halaman=$next'"; } ?>>Next</a>
                                </li>
                              </ul>
                </div>
            </div>
        </div>
    </div>
</div>