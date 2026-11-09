  <nav class="navbar navbar-expand-lg navbar-dark shadow-none sticky-top" style="background-color: #457B9D;">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">PMUBJ</a>
      <!-- Toggler untuk mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu Collapse -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?= base_url('#about') ?>">About</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('#faq') ?>">Faq</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('Pengaduan') ?>">Pengaduan</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>