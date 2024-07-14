<?php
require_once '../app/admin/gestion_navlink_admin.php';
session_start(); // Assurez-vous que session_start() est appelé au début si ce n'est pas déjà fait ailleurs.
?>

<!-- Navbar Admin | Début -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid justify-content-center">
    <div class="navbar-item text-light">
      <span>
        <?php echo $_SESSION['user_prenom'] . ' ' .  $_SESSION['user_nom']; ?> <i class="fa-solid fa-user-gear fa-lg ms-3 me-3 text-secondary" title="Vous êtes connecté(e) en tant que : <?php echo strtoupper($_SESSION['user_role']); ?>"></i> <?php echo strtoupper($_SESSION['user_role']); ?>
      </span>
      <span>
        <a href="<?php echo BASE_URL . '/dashboard'; ?>"><i class="fa-solid fa-sliders fa-lg ms-1 me-3 text-secondary" title="Retourner à l'accueil du Dashboard"></i></a>
      </span>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlink_admin" aria-controls="navlink_admin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navlink_admin" class="ms-4 collapse navbar-collapse flex-grow-0">
      <?php if ($_SESSION['user_role'] == 'admin') : ?>
        <ul class="navbar-nav">
          <!-- Récupérer les liens de navigation admin depuis la base -->
          <?php foreach ($navlinks_admin as $navlink_admin) : ?>
            <!-- Si le statut est ADMIN, afficher les liens de navigation admin -->
            <?php if ($navlink_admin['navlink_admin_a'] === 1) : ?>
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . htmlspecialchars($navlink_admin['navlink_admin_lien']); ?>" class="<?= htmlspecialchars($navlink_admin['navlink_admin_class']); ?>" title="<?= htmlspecialchars($navlink_admin['navlink_admin_title']); ?>"><?= htmlspecialchars($navlink_admin['navlink_admin_nom']); ?></a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!-- Navbar Admin | Fin -->