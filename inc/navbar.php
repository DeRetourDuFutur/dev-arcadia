<!-- Navbar | Début -->
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-uppercase fw-bold" href="<?= BASE_URL . '/' ?>">
      <img class="img-fluid me-3" src="assets/ico/animals.png" alt="Arcadia" /><span class="p-1 rounded-3 text-light text-logo">Zoo</span><span> ARCADIA</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="<?= BASE_URL . '/' ?>" class="nav-link">Accueil</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/services' ?>" class="nav-link">Nos Services</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/animaux' ?>" class="nav-link">Nos Animaux</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/informations' ?>" class="nav-link">Informations</a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/jeux' ?>" class="nav-link">Jeux</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar | Fin -->