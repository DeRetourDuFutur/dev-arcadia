<!-- Navbar | Début -->
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase fw-bold" href="<?= BASE_URL . '/' ?>">
       <!-- <div>ZOO</div> -->
    <!-- <img class="img-fluid me-3" src="assets/ico/animals.png" alt="Arcadia" /> -->
    <span class="btn-logo-arc btn-logo-arc-primary-color text-center pt-2">ARCADIA</span><span><img class="img-fluid" src="assets/img/home/logo.jpg" alt="Arcadia" /></span><span class="btn-logo-par btn-logo-par-primary-color text-center pt-2"> ZOO<i class="fa-solid fa-paw fa-flip-horizontal text-primary pe-2"></i></span>
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
          <a href="<?= BASE_URL . '/animaux' ?>" class="nav-link">Nos Animaux</a>
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