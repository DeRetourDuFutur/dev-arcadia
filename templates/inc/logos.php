<?php
require_once '../app/admin/gestion_logos.php';
?>

<!-- Logos | Début -->
<div class="ps-5">
  <a href="<?= BASE_URL . $logos['lien'] ?>" title="<?= BASE_URL . $logos['title'] ?>">
    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>
      <span class="logo-arc mt-3"> <?= strtoupper($logos['txtgback']) ?></span>
      <span class="logo-img pt-3"><img src="<?= BASE_URL . ($logos['imgback']) ?>" alt="Logo Admin Arcadia" /></span>
      <span class="logo-zoo mt-2"> <?= strtoupper($logos['txtdback']) ?><i class="<?= BASE_URL . $logos['icob'] ?>"></i></span>
    <?php else : ?>
      <span class="logo-arc mt-3"> <?= strtoupper($logos['txtgfront']) ?></span>
      <span class="logo-img pt-3"><img src="<?= BASE_URL . ($logos['imgfront']) ?>" alt="Logo Arcadia" /></span>
      <span class="logo-zoo mt-2"> <?= strtoupper($logos['txtdfront']) ?><i class="<?= BASE_URL . $logos['icof'] ?>"></i></span>
    <?php endif; ?>
  </a>
</div>
<!-- Logos | Fin -->