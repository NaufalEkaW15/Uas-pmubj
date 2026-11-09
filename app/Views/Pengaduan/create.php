<?= $this->extend('layout/page_layout.php'); ?>
<?= $this->section('content'); ?> 

<div class="container">
<div class="row">
  <div class="col">
    <h2 class="my-3">Form Tambah Pengaduan</h2>
    <form action="/Pengaduan/save" method="post"  >
      <?= csrf_field(); ?>
      </div>
      <div class="form-group row">
        <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa" autofocus>
        </div>
      </div><br>
      <div class="form-group row">
        <label for="nim" class="col-sm-2 col-form-label">NIM:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
        </div>
      </div><br>
      <div class="form-group row">
        <label for="nama_pengaduan" class="col-sm-2 col-form-label">Nama Pengaduan:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama_pengaduan" name="nama_pengaduan" placeholder="Masukkan Nama Pengaduan">
        </div>
      </div><br>
     <div class="form-group row">
        <label for="tanggal_pengaduan" class="col-sm-2 col-form-label">Tanggal Pengaduan:</label>
        <div class="col-sm-10">
          <input type="datetime-local" class="form-control" id="tanggal_pengaduan" name="tanggal_pengaduan" value="<?= date('Y-m-d\TH:i'); ?>">
        </div>
      </div><br>
      <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary btn-block w-100">Kirim Pengaduan</button>
        </div>
      </div>
    </form>
</div>
</div><br>

<?= $this->endSection(); ?>
