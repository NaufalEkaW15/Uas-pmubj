<?= $this->extend('layout/page_layout.php'); ?>
<?= $this->section('content'); ?> <br>
<div class="container">
  <div class="row">
    <div class="col">
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <h1 class="mt-2">Daftar Pengaduan</h1>
      <a href="/Pengaduan/create" class="btn btn-primary mb-3">Buat Pengaduan</a>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Pengaduan</th>
      <th scope="col">Tanggal Pengaduan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php if (isset($pengaduan) && !empty($pengaduan)) : ?>
    <?php foreach ($pengaduan as $p) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $p['foto']; ?>" alt="foto" class="format"></td>
      <td><?= $p['nama_mahasiswa']; ?></td>
      <td><?= $p['nim']; ?></td>
      <td><?= $p['nama_pengaduan']; ?></td>
      <td><?= $p['tanggal_pengaduan']; ?></td>
      <td>
        <a href="/Pengaduan/<?= ($p['slug']); ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php else : ?>
      <tr>
        <td colspan="7" class="text-center">Tidak ada data pengaduan.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
    </div>
  </div>
</div><br>
<?= $this->endSection(); ?>
