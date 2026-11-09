<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Pengaduan Mahasiswa Universitas Bhayangkara Jakarta Raya">

  <!-- Boostrap CSS -->
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 <!-- My CSS -->
  <link rel="stylesheet" href="/css/style.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
  <title>PMUBJ | Pengaduan Mahasiswa Universitas Bhayangkara Jakarta Raya</title>
</head>

<body>
  <?= $this->include('layout/navbar') ?>
  <?= $this->renderSection('content'); ?>
  <?= $this->include('layout/footer'); ?>

  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>

</html>