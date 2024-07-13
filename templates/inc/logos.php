<?php
require_once '../app/admin/gestion_logos.php';
?>

<!-- Logos | Début -->
<div class="ps-5">
  <a href="<?php echo BASE_URL . $logos['lien'] ?>" title="<?php echo BASE_URL . $logos['title'] ?>">
    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>
      <span class="logo-arc mt-3"> <?= strtoupper($logos['txtgback']) ?></span>
      <?php if (isset($logos['imgback'])) : ?>
        <span class="logo-img pt-3"><img src="<?php echo BASE_URL . ($logos['imgback']) ?>" alt="Logo Admin Arcadia" /></span>
      <?php endif; ?>
      <span class="logo-zoo mt-2"> <?= strtoupper($logos['txtdback']) ?><i class="<?= htmlspecialchars($logos['icob']); ?>"></i></span>
    <?php else : ?>
      <span class="logo-arc mt-3"> <?= strtoupper($logos['txtgfront']) ?></span>
      <?php if (isset($logos['imgfront'])) : ?>
        <span class="logo-img pt-3"><img src="<?php echo BASE_URL . ($logos['imgfront']) ?>" alt="Logo Arcadia" /></span>
      <?php endif; ?>
      <span class="logo-zoo mt-2"> <?= strtoupper($logos['txtdfront']) ?><i class="<?= htmlspecialchars($logos['icof']); ?>"></i></span>
    <?php endif; ?>
  </a>
</div>
<!-- Logos | Fin -->