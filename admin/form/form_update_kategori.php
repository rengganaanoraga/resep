<p>Ubah Daftar Kategori</p>

<?php
  include 'master/koneksi.php';
  $id_kategori = $_GET['id'];
  $data = mysqli_query($koneksi,"select * from tb_kategori where id='$id_kategori'");
  while($d = mysqli_fetch_array($data)){
?>
<form method="POST" action="?menu=proses_ubah_kategori">
<div class="form-group">
  <input type="hidden" name="id_kategori" value="<?php echo $d['id']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr> Kategori</div>
          </div>
          <input type="text" name="kategori" class="form-control" value="<?php echo $d['nama'];?>" placeholder="Kategori" required="required"  />
        </div>
      </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=kategori" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
