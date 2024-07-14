<?php
// Vérifier si une session est connectée
if (isset($_SESSION['user_prenom']) && isset($_SESSION['user_nom'])) {
  // Récupération des informations de l'utilisateur
  $prenom = $_SESSION['user_prenom'];
  $nom = $_SESSION['user_nom'];
}
?>

<div class="container-fluid py-3 ps-4 bg-dark text-light">
  <div class="d-flex justify-content-center text-center">
    <span class="pe-5 mt-3 pb-3 d-none d-sm-block"><i class="fa-solid fa-stop fa-sm text-primary"></i></span><span>Bonjour <?= ($prenom) ?>, vous êtes connecté(e) <br> avec une session <span class="text-secondary"> <?= strtolower($_SESSION['user_role']) ?></span> <i class="fa-solid fa-user-gear mx-2 fa-lg text-secondary" title="<?= ($prenom) ?> <?= strtoupper($nom) ?> | <?= strtolower($_SESSION['user_role']) ?>"></i>
    </span><span class="ps-5 mt-3 pb-3 d-none d-sm-block"><i class="fa-solid fa-stop fa-sm text-primary"></i></span>
  </div>
</div>
</div>