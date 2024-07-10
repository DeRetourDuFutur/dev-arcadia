<?php
// Vérifier si une session est connectée
if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
  // Récupération des informations de l'utilisateur
  $prenom = $_SESSION['prenom'];
  $nom = $_SESSION['nom'];
}
?>

<div class="container py-3">
  <h6>
    <span><?= ($prenom) ?> <?= strtoupper($nom) ?> <i class="fa-solid fa-user-gear mx-2 fa-lg text-secondary" title="<?= ($prenom) ?> <?= strtoupper($nom) ?> <?= strtoupper($_SESSION['access']) ?>"></i> <span class="text-primary"> <?= strtoupper($_SESSION['access']) ?></span>
    </span>
  </h6>
</div>