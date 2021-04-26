<?php
include 'master/koneksi.php';

$id_resep = $_GET['id_resep'];
?>
<p>Ubah Foto Resep</p>


<form method="POST" action="?menu=proses_ubah_foto" style="margin-bottom: 50px;" enctype="multipart/form-data">
  
  <div class="form-group">
    <input type="file" name="foto">
    <input type="text" value="<?echo $id_resep;?>" hidden name="id_resep">
  </div> 
  <input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
  <a href="?menu=resep" class="btn btn-danger ">
    <span class="icon text-white-50">
    </span>
    <span class="text">Kembali</span>
  </a>
</form>
