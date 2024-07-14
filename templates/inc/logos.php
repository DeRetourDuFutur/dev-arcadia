<?php
require_once '../app/admin/gestion_logos.php';
?>

<!-- Logos | Début -->
<div class="ps-5">
  <a href="<?php echo BASE_URL . $logos['logo_lien'] ?>" title="<?php echo BASE_URL . $logos['logo_title'] ?>">
    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) : ?>
      <span class="logo-arc mt-3"> <?= strtoupper($logos['logo_txtgback']) ?></span>
      <?php if (isset($logos['logo_imgback'])) : ?>
        <span class="logo-img pt-3"><img src="<?php echo BASE_URL . ($logos['logo_imgback']) ?>" alt="Logo Admin Arcadia" /></span>
      <?php endif; ?>
      <span class="logo-zoo mt-2"> <?= strtoupper($logos['logo_txtdback']) ?><i class="<?= htmlspecialchars($logos['logo_icob']); ?>"></i></span>
    <?php else : ?>
      <span class="logo-arc mt-3"> <?= strtoupper($logos['logo_txtgfront']) ?></span>
      <?php if (isset($logos['logo_imgfront'])) : ?>
        <span class="logo-img pt-3"><img src="<?php echo BASE_URL . ($logos['logo_imgfront']) ?>" alt="Logo Arcadia" /></span>
      <?php endif; ?>
      <span class="logo-zoo mt-2"> <?= strtoupper($logos['logo_txtdfront']) ?><i class="<?= htmlspecialchars($logos['logo_icof']); ?>"></i></span>
    <?php endif; ?>
  </a>
</div>
<!-- Logos | Fin -->