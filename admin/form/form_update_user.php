<p>Tambah Daftar User</p>
<?php
  include 'master/koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($koneksi,"select * from tb_user where id='$id'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_user">
<div class="form-group">
  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Nama</div>
    </div>
    <input type="text" name="nama" class="form-control" value="<?php echo $d['nama_lengkap']; ?>" placeholder="Nama" required="required"  />
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text"><abbr title="wajib diisi"></abbr>Email</div>
    </div>
    <input type="text" name="email" class="form-control" value="<?php echo $d['email']; ?>" placeholder="Email" required="required"  />
  </div>
</div>
<?php
    }
?>

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=list_user" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
