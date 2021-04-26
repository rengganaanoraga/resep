<?php
include 'master/koneksi.php';
$id_resep = $_GET['id_resep'];
$data = mysqli_query($koneksi,"SELECT b.id, b.judul, b.alat, b.bahan,  k.nama, b.id_kategori, b.proses FROM tb_resep b inner join tb_kategori k on b.id_kategori = k.id AND b.id = $id_resep ");
while($d = mysqli_fetch_array($data)){
?>
<p>Ubah Daftar Resep</p>


<form method="POST" action="?menu=proses_ubah_resep" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <input type="hidden" name="id_resep" value="<?php echo $d['id']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Judul</div>
          </div>
          <input type="text" name="judul" class="form-control" value="<?php echo $d['judul'];?>" placeholder="Kategori" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">Kategori</div>
          </div>
          <select name="kategori" class="form-control">
          <option value="<?php echo $d['id_kategori'];?>" hidden><?php echo $d['nama'];?></option>
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
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>alat</div>
          </div>
          <textarea class="form-control" id="alat" name="alat" rows="10" placeholder="Deskripsi resep" value="<?php echo $d['alat'];?>"><?php echo $d['alat'];?></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>bahan</div>
          </div>
          <textarea class="form-control" id="bahan" name="bahan" rows="10" placeholder="Deskripsi resep" value="<?php echo $d['bahan'];?>"><?php echo $d['bahan'];?></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>proses</div>
          </div>
          <textarea class="form-control" id="proses" name="proses" rows="10" placeholder="Deskripsi resep" value="<?php echo $d['proses'];?>"><?php echo $d['proses'];?></textarea>
        </div>
      </div>
      <div class="form-group d-flex">
            <div class="col-md-6">
              <input type="file" name="foto">
            </div>
            <div class="col-md-6"style="max-height: 100px; max-width: 100px;">
              <img src="foto/logo.jpg" class="w-100"  alt="">
            </div>
      </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=resep" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>

