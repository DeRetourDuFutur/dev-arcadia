<?php
require_once '../app/admin/gestion_navbar_admin.php';
?>

<!-- Navbar Admin | Début -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid justify-content-center">
    <div class="navbar-item text-light">
      <span>
        <?php echo $_SESSION['prenom'] . ' ' .  $_SESSION['nom'] ?> <i class="fa-solid fa-user-gear fa-lg ms-3 me-3 text-secondary" title="Vous êtes connecté(e) en tant que : <?php echo strtoupper($_SESSION['user_role']); ?>"></i> <?php echo strtoupper($_SESSION['user_role']); ?>
      </span>
      <span>
        <a href="<?= BASE_URL . '/dashboard' ?>"><i class="fa-solid fa-sliders fa-lg ms-1 me-3 text-secondary" title="Retourner à l'accueil du Dashboard"></i></a>
      </span>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNavAdmin" class="ms-4 collapse navbar-collapse flex-grow-0">
      <?php if ($_SESSION['user_role'] == 'admin') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($dalinks as $link) : ?>
          <!-- Si le statut est ADMIN, afficher les liens de navigation admin -->
          <?php if ($link['admin'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item-vertical">
                <i class="fa-solid fa-stop fa-sm ps-2 mb-1 text-secondary"></i>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $link['lien'] ?>" class="<?= htmlspecialchars($link['class']); ?>" title="<?= htmlspecialchars($link['title']); ?>"><?= htmlspecialchars($link['nom']); ?> <i class="<?= htmlspecialchars($link['ico']); ?>"></i></a>
              </li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if ($_SESSION['user_role'] == 'employee') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($dalinks as $link) : ?>
          <!-- Si le statut est EMPLOYEE, afficher les liens de navigation employee -->
          <?php if ($link['employee'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $link['lien'] ?>" class="<?= htmlspecialchars($link['class']); ?>" title="<?= htmlspecialchars($link['title']); ?>"><?= htmlspecialchars($link['nom']); ?> <i class="<?= htmlspecialchars($link['ico']); ?>"></i></a>
              </li>
              <li class="nav-item-vertical">
                <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
              </li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if ($_SESSION['user_role'] == 'veto') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($dalinks as $link) : ?>
          <!-- Si le statut est VETO, afficher les liens de navigation customer -->
          <?php if ($link['veto'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $link['lien'] ?>" class="<?= htmlspecialchars($link['class']); ?>" title="<?= htmlspecialchars($link['title']); ?>"><?= htmlspecialchars($link['nom']); ?> <i class="<?= htmlspecialchars($link['ico']); ?>"></i></a>
              </li>
              <li class="nav-item-vertical">
                <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
              </li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!-- Navbar Admin | Fin -->