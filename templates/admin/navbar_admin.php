<?php require_once '../app/admin/gestion_navbar_admin.php'; ?>

<!-- Navbar Admin | Début -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid justify-content-center">
    <div class="navbar-item text-light">
      <span>
        <?php echo $_SESSION['prenom'] . ' ' .  $_SESSION['nom'] ?> <i class="fa-solid fa-user-gear fa-lg ms-3 me-3 text-secondary" title="Vous êtes connecté(e) en tant que : <?php echo strtoupper($_SESSION['access']); ?>"></i> <?php echo strtoupper($_SESSION['access']); ?>
      </span>
      <span>
        <a href="<?= BASE_URL . '/dashboard' ?>"><i class="fa-solid fa-sliders fa-lg ms-1 me-3 text-secondary" title="Retourner à l'accueil du Dashboard"></i></a>
      </span>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAdmin" aria-controls="navbarNavAdmin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNavAdmin" class="collapse navbar-collapse flex-grow-0">
      <?php if ($_SESSION['access'] == 'admin') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($dalinks as $link) : ?>
          <!-- Si le statut est ADMIN, afficher les liens de navigation admin -->
          <?php if ($link['admin'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $link['lien'] ?>" class="<?= htmlspecialchars($link['class']); ?>" title="<?= htmlspecialchars($link['title']); ?>"><?= htmlspecialchars($link['nom']); ?> <i class="<?= htmlspecialchars($link['ico']); ?>" style="--fa-rotate-angle: 45deg;"></i></a>
              </li>
              <li class="nav-item-vertical">
                <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
              </li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <?php if ($_SESSION['access'] == 'employee') : ?>
        <!-- Récupérer les liens de navigation admin depuis la base -->
        <?php foreach ($dalinks as $link) : ?>
          <!-- Si le statut est EMPLOYEE, afficher les liens de navigation employee -->
          <?php if ($link['employee'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $link['lien'] ?>" class="<?= htmlspecialchars($link['class']); ?>" title="<?= htmlspecialchars($link['title']); ?>"><?= htmlspecialchars($link['nom']); ?> <i class="<?= htmlspecialchars($link['ico']); ?>" style="--fa-rotate-angle: 45deg;"></i></a>
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
        <?php foreach ($dalinks as $link) : ?>
          <!-- Si le statut est VETO, afficher les liens de navigation customer -->
          <?php if ($link['veto'] === 1) : ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="<?= BASE_URL . '/' . $link['lien'] ?>" class="<?= htmlspecialchars($link['class']); ?>" title="<?= htmlspecialchars($link['title']); ?>"><?= htmlspecialchars($link['nom']); ?> <i class="<?= htmlspecialchars($link['ico']); ?>" style="--fa-rotate-angle: 45deg;"></i></a>
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