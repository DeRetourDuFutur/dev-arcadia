<?php
// Vérifier si une session est connectée
if (isset($_SESSION['user_prenom']) && isset($_SESSION['user_nom'])) {
  // Récupération des informations de l'utilisateur
  $prenom = htmlspecialchars($_SESSION['user_prenom'], ENT_QUOTES, 'UTF-8');
  $nom = htmlspecialchars($_SESSION['user_nom'], ENT_QUOTES, 'UTF-8');
}
?>

<div class="container-fluid py-3 ps-4 bg-dark text-light">
  <div class="d-flex justify-content-center text-center">
    <span class="pe-5 mt-3 pb-3 d-none d-sm-block"><i class="fa-solid fa-stop fa-sm text-primary"></i></span><span>Bonjour <?= ($prenom) ?>, vous êtes connecté(e) <br> avec une session <span class="text-secondary"> <?= strtolower(htmlspecialchars($_SESSION['user_role'], ENT_QUOTES, 'UTF-8')) ?></span> <i class="fa-solid fa-user-gear mx-2 fa-lg text-secondary" title="<?= ($prenom) ?> <?= strtoupper($nom) ?> | <?= strtolower(htmlspecialchars($_SESSION['user_role'], ENT_QUOTES, 'UTF-8')) ?>"></i>
    </span><span class="ps-5 mt-3 pb-3 d-none d-sm-block"><i class="fa-solid fa-stop fa-sm text-primary"></i></span>
  </div>
</div>
</div>