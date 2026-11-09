<?= $this->extend('layout/page_layout.php'); ?>
<?= $this->section('content'); ?>

<!-- Hero Section -->
<section id="home" class="py-5 min-vh-100 align-items-center" style="background-color: #457B9D;">
  <div class="container-fluid mt-5 px-5" style="padding-top: 100px;">
    <h1 class="fw-bold text-center text-white" style="font-size: 72px;" data-aos="fade-up">Sampaikan Keluhan<br>Raih Solusi</h1>
  </div>
</section>


<!-- About Section -->
<section id="about" class="bg-light py-5 min-vh-100">
  <div class="container-fluid mt-5 px-5">
    <h1 class="text-center mb-5 fw-bold" data-aos="fade-up">Pengaduan Mahasiswa</h1>
    <div class="row g-4" data-aos="fade-up">

      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow rounded">
          <img src="https://bit.ly/4leQxCr" class="card-img-top" alt="Komputer Tidak Berfungsi">
          <div class="card-body">
            <h5 class="card-title fw-bold">Komputer Tidak Berfungsi</h5>
            <p class="card-text">
              Ada komputer di laboratorium tidak dapat digunakan karena rusak atau tidak menyala sama sekali. Ini sangat mengganggu kegiatan praktikum dan tugas kelompok yang membutuhkan penggunaan komputer.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow rounded">
          <img src="https://bit.ly/46suLXa" class="card-img-top" alt="Pengisian KRS">
          <div class="card-body">
            <h5 class="card-title fw-bold">Pengisian KRS</h5>
            <p class="card-text">
              Sistem pengisian KRS online sering mengalami gangguan dan error, sehingga saya harus mengulang proses pengisian beberapa kali. Hal ini sangat mengganggu dan memakan waktu.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow rounded">
          <img src="https://bit.ly/3G9yJJO" class="card-img-top" alt="Koneksi Internet Lambat">
          <div class="card-body">
            <h5 class="card-title fw-bold">Koneksi Internet Lambat</h5>
            <p class="card-text">
              Koneksi internet di laboratorium sangat lambat, terutama pada jam-jam sibuk. Ini menyebabkan kesulitan dalam mengakses bahan kuliah online dan mengunduh perangkat lunak untuk praktikum.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FAQ Section -->
<section id="faq" class="min-vh-100 d-flex align-items-center text-white" style="background-color: #457B9D;">
  <div class="container">
    <h1 class="text-center mb-4 fw-bold" data-aos="fade-up">FAQ</h1>
    <div class="accordion accordion-flush" data-aos="fade-up" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Apa itu PMUBJ?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">PMUBJ adalah platform online yang memungkinkan mahasiswa untuk menyampaikan keluhan, saran, atau masalah yang mereka hadapi terkait lingkungan kampus, fasilitas, akademik, dan aspek lain dari kehidupan kampus</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Siapa yang dapat menggunakan PMUBJ?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Semua mahasiswa aktif di kampus kami dapat menggunakan website ini untuk mengajukan pengaduan atau memberikan saran.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Bagaimana cara mengajukan pengaduan?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Semua mahasiswa aktif di kampus kami dapat menggunakan website ini untuk mengajukan pengaduan atau memberikan saran.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>