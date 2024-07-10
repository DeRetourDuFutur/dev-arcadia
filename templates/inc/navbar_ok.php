<!-- Navbar | Début -->
<nav class="navbar navbar-expand-xl bg-light navbar-light sticky-top <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>pt-5<?php endif; ?>">
  <div class="container-fluid mt-3">
    <div class="ms-5">
      <a href="<?= BASE_URL . '/' ?>" title="Retourner sur l'accueil du site Arcadia">
        <span class="logo-arc mt-3">ARCADIA</span>
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>
          <span class="logo-img pt-3"><img src="<?= BASE_URL ?>/public/assets/img/admin/logo_admin.jpg" alt="Logo Admin Arcadia" /></span>
          <span class="logo-zoo mt-2">ADMIN<i class="fa-solid fa-screwdriver-wrench fa-lg text-danger ps-3 pe-2"></i></span>
        <?php else : ?>
          <span class="logo-img mt-2"><img src="<?= BASE_URL ?>/public/assets/img/home/logo-arcadia.webp" alt="Logo Arcadia" /></span>
          <span class="logo-zoo mt-2"> ZOO<i class="fa-solid fa-paw fa-flip-horizontal text-danger pe-2"></i></span>
        <?php endif; ?>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="pe-5 collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a href="<?= BASE_URL . '/' ?>" class="nav-link" title="Retourner sur l'accueil du site Arcadia">Accueil <i class="fa-solid fa-archway fa-xl ms-1 text-primary"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/animaux' ?>" class="btn btn-outline-success" title="Découvrir tous les animaux d'Arcadia à travers nos 3 domaines (Savane, Jungle et Marais)">Nos Animaux <i class="fa-solid fa-paw fa-rotate-by fa-lg ms-1 text-secondary" style="--fa-rotate-angle: 45deg;"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/services' ?>" class="nav-link" title="Découvrir tous les services que nous vous proposons à Arcadia">Nos services <i class="fa-solid fa-wand-sparkles fa-xl ms-1 text-primary"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/informations' ?>" class="nav-link" title="Retrouvez ici toutes les informations utiles pour préparer votre prochaine visite à Arcadia">Informations <i class="fa-brands fa-elementor fa-xl ms-1 text-primary"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/label' ?>" class="nav-link" title="Nous vous expliquons tout sur notre engagement écologique">Eco Label <i class="fa-brands fa-pagelines fa-xl ms-1 text-primary"></i></a>
        </li>
        <li class="nav-item">
          <a href="<?= BASE_URL . '/contact' ?>" class="nav-link" title="Vous pouvez nous contacter via ce formulaire pour nous faire part de vos suggestions et remarques">Contact <i class="fa-solid fa-envelope fa-xl ms-1 text-primary"></i></a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>
            <a href="<?= BASE_URL . '/logout' ?>" title="Déconnexion de l'interface d'administration Arcadia"><i class="fa-solid fa-user-xmark fa-xl ms-1 mt-3 text-secondary"></i></a>
          <?php else : ?>
            <a href="<?= BASE_URL . '/login' ?>" title="Espace réservé aux utilisateurs autorisés uniquement"><i class="fa-solid fa-user-lock fa-xl ms-1 mt-3 text-primary"></i></a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar | Fin -->