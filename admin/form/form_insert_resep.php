<?php
include 'master/koneksi.php';
?>
<p>Tambah Daftar Resep</p>


<form method="POST" action="?menu=proses_tambah_resep" style="margin-bottom: 50px;" enctype="multipart/form-data">
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><abbr title="wajib diisi"></abbr> judul</div>
      </div>
      <input type="text" name="judul" class="form-control" value="" placeholder="judul" required="required"  />
    </div>
  </div>
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><abbr title="wajib diisi"></abbr>Alat</div>
      </div>
      <textarea class="form-control" id="alat" name="alat" rows="10" placeholder="alat"></textarea>
    </div>
  </div> 
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><abbr title="wajib diisi"></abbr>Bahan</div>
      </div>
      <textarea class="form-control" id="alat" name="bahan" rows="10" placeholder="bahan"></textarea>
    </div>
  </div> 
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text"><abbr title="wajib diisi"></abbr>Proses</div>
      </div>
      <textarea class="form-control" id="alat" name="proses" rows="10" placeholder="proses"></textarea>
    </div>
  </div> 
 
  <div class="form-group">
    <select name="kategori" class="form-control">
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
  <div class="form-group">
    <input type="file" name="foto">
  </div> 
  <input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
  <a href="?menu=resep" class="btn btn-danger ">
    <span class="icon text-white-50">
    </span>
    <span class="text">Kembali</span>
  </a>
</form>
