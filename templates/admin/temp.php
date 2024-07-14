<?php require_once '../app/admin/gestion_navlink_admin.php'; ?>

<!-- Navbar Admin | Début -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid justify-content-center">
    <div class="navbar-item text-light">
      <span>
        <?php echo $_SESSION['prenom'] . ' ' .  $_SESSION['nom'] ?> <i class="fa-solid fa-user-gear fa-lg ms-3 me-3 text-secondary" title="Vous êtes connecté(e) en tant que : <?php echo strtoupper($_SESSION['access']); ?>"></i> <?php echo strtoupper($_SESSION['access']); ?>
      </span>
      <span>
        <a href="<?php echo BASE_URL . '/dashboard' ?>"><i class="fa-solid fa-sliders fa-lg ms-1 me-3 text-secondary" title="Retourner à l'accueil du Dashboard"></i></a>
      </span>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navlink_admin" aria-controls="navlink_admin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navlink_admin" class="ms-4 collapse navbar-collapse flex-grow-0">
      <?php if ($_SESSION['access'] == 'admin') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($navlinks_admin as $navlink_admin) : ?>
          <!-- Si le statut est ADMIN, afficher les liens de navigation admin -->
          <?php if ($navlink_admin['admin'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item-vertical">
                <i class="fa-solid fa-stop fa-sm ps-2 mb-1 text-secondary"></i>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $navlink_admin['navlink_admin_lien'] ?>" class="<?= htmlspecialchars($navlink_admin['navlink_admin_class']); ?>" title="<?= htmlspecialchars($navlink_admin['navlink_admin_title']); ?>"><?= htmlspecialchars($navlink_admin['nom']); ?> <i class="<?= htmlspecialchars($navlink_admin['navlink_admin_ico']); ?>"></i></a>
              </li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if ($_SESSION['access'] == 'employee') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($navlinks_admin as $navlink_admin) : ?>
          <!-- Si le statut est EMPLOYEE, afficher les liens de navigation employee -->
          <?php if ($navlink_admin['employee'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $navlink_admin['navlink_admin_lien'] ?>" class="<?= htmlspecialchars($navlink_admin['navlink_admin_class']); ?>" title="<?= htmlspecialchars($navlink_admin['navlink_admin_title']); ?>"><?= htmlspecialchars($navlink_admin['nom']); ?> <i class="<?= htmlspecialchars($navlink_admin['navlink_admin_ico']); ?>"></i></a>
              </li>
              <li class="nav-item-vertical">
                <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
              </li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if ($_SESSION['access'] == 'veto') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($navlinks_admin as $navlink_admin) : ?>
          <!-- Si le statut est VETO, afficher les liens de navigation customer -->
          <?php if ($navlink_admin['veto'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $navlink_admin['navlink_admin_lien'] ?>" class="<?= htmlspecialchars($navlink_admin['navlink_admin_class']); ?>" title="<?= htmlspecialchars($navlink_admin['navlink_admin_title']); ?>"><?= htmlspecialchars($navlink_admin['nom']); ?> <i class="<?= htmlspecialchars($navlink_admin['navlink_admin_ico']); ?>"></i></a>
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