<?php
require_once '../app/admin/gestion_navbar.php';
?>
<!-- Navbar | Début -->

<nav class="navbar navbar-expand-xl bg-light navbar-light sticky-top <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>pt-5<?php endif; ?>">
  <div class="container-fluid mt-3">
    <?php require_once '../templates/inc/logos.php';  ?>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="ps-3 pe-5 py-2 collapse navbar-collapse justify-content-end" id="navbarNav">
      <!-- Récupérer les liens de navigation depuis la base -->
      <ul class="navbar-nav">
        <?php foreach ($navlinks as $navlink) : ?>
          <li class="nav-item">
            <a href="<?= BASE_URL . '/' . $navlink['lien'] ?>" class="<?= htmlspecialchars($navlink['class']); ?>" title="<?= htmlspecialchars($navlink['title']); ?>"><?= htmlspecialchars($navlink['nom']); ?> <i class="<?= htmlspecialchars($navlink['ico']); ?>" style="--fa-rotate-angle: 45deg;"></i></a>
          </li>
        <?php endforeach; ?>
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