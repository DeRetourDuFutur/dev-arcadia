<!-- Navbar | Début -->
<nav class="navbar navbar-expand-xl bg-light navbar-light sticky-top">
  <div class="container-fluid">
    <a href="<?= BASE_URL . '/' ?>">
      <span class="logo-arc">ARCADIA</span>
      <span class="logo-img"><img src="assets/img/home/logo-arcadia.webp" alt="Logo Arcadia" /></span>
      <span class="logo-zoo"> ZOO<i class="fa-solid fa-paw fa-flip-horizontal text-primary pe-2"></i></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="pe-5 collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="<?= BASE_URL . '/' ?>" class="nav-link">Accueil</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/about' ?>" class="nav-link">A propos</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/savane' ?>" class="nav-link">Nos Animaux</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/services' ?>" class="nav-link">Nos services</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/label' ?>" class="nav-link">Eco Label</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/informations' ?>" class="nav-link">Informations</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar | Fin -->