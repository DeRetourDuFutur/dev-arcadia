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
      <ul class="navbar-nav">
        <?php if ($_SESSION['access'] == 'admin') : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              USERS <i class="fa-solid fa-users ms-1 fa-xl text-primary"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?= BASE_URL . '/gestion-users' ?>" title="Gérer les utilisateurs existants">GESTION</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL . '/new-user' ?>" title="Ajouter un utilisateur (Admin, Employé ou Véto)">AJOUT</a></li>
            </ul>
          </li>
          <li class="nav-item-vertical">
            <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
          </li>
        <?php endif; ?>
        <?php if ($_SESSION['access'] == 'employee' || $_SESSION['access'] == 'admin') : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL . '/gestion-services' ?>" title="Gérer les services proposés sur Arcadia">SERVICES <i class="fa-solid fa-wand-sparkles fa-xl ms-1 text-primary"></i></a>
          </li>
          <li class="nav-item-vertical">
            <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL . '/gestion-avis' ?>" title="Gérer les avis laissés sur le site Arcadia">AVIS <i class="fa-solid fa-comments fa-xl ms-1 text-primary"></i></a>
          </li>
          <li class="nav-item-vertical">
            <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL . '/gestion-horaires' ?>" title="Gérer les horaires affichés sur le site Arcadia">HORAIRES <i class="fa-solid fa-clock fa-xl ms-1 text-primary"></i></a>
          </li>
          <li class="nav-item-vertical">
            <i class="fa-solid fa-stop fa-sm px-2 mb-1 text-secondary"></i>
          </li>
        <?php endif; ?>
        <?php if ($_SESSION['access'] == 'veto' || $_SESSION['access'] == 'admin' || $_SESSION['access'] == 'employee') : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL . '/gestion-animaux' ?>" title="Gérer la section des animaux sur Arcadia">ANIMAUX <i class="fa-solid fa-paw fa-xl ms-1 text-primary"></i></a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar Admin | Fin -->