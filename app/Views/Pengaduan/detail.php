<?=$this->extend('layout/page_layout'); ?>
<?=$this->section('content'); ?>
<div class="container">
<div class="row">
  <div class="col"> 
    <h2>Detail Pengaduan</h2>
    <?php if (isset($pengaduan) && is_array($pengaduan)): ?>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="/img/<?= esc($pengaduan['foto']); ?>" class="img-fluid rounded-start" alt="Pengaduan submission by <?= esc($pengaduan['nama_mahasiswa']); ?> with the title <?= esc($pengaduan['nama_pengaduan']); ?> in a formal setting. The environment appears official and the mood is serious.">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b><?= esc($pengaduan['nama_pengaduan']); ?></b></h5>
              <p class="card-text"><?= esc($pengaduan['slug']); ?></p>
              <p class="card-text"><small class="text-body-secondary">Diajukan oleh: <?= esc($pengaduan['nama_mahasiswa']); ?> <br>(NIM: <?= esc($pengaduan['nim']); ?>)</small></p>
              <a href="" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-danger">Hapus</a>
              <br>
                <a href="/Pengaduan" class="btn btn-secondary mt-3">Kembali ke Daftar Pengaduan</a>
            </div>
        </div>
    </div>
    <?php else: ?>
      <div class="alert alert-danger mt-3">Data pengaduan tidak ditemukan.</div>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>