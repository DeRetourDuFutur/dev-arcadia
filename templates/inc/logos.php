<?php
require_once '../app/admin/gestion_logos.php';
?>

<!-- Logos | Début -->
<div class="ps-5">
  <?php

  if ($checkConnection->isUserLoggedIn()) {
    $logos = array_filter($logos, function ($logo) {
      return $logo['logo_attribut'] === 'BACK';
    });
  } else {
    $logos = array_filter($logos, function ($logo) {
      return $logo['logo_attribut'] === 'FRONT';
    });
  }
  ?>
  <?php foreach ($logos as $logo) : ?>
    <a href="<?= htmlspecialchars(BASE_URL . $logo['logo_lien']) ?>" title="<?= htmlspecialchars(BASE_URL . $logo['logo_title']) ?>">
      <span class="logo-arc mt-3"> <?= strtoupper(htmlspecialchars($logo['logo_txtg'])) ?></span>
      <?php if (isset($logo['logo_img'])) : ?>
        <span class="logo-img pt-3"><img src="<?php echo htmlspecialchars(BASE_URL . ($logo['logo_img'])) ?>" alt="Logo Arcadia" /></span>
      <?php endif; ?>
      <span class="logo-zoo mt-2"> <?= strtoupper(htmlspecialchars($logo['logo_txtd'])) ?><i class="<?= htmlspecialchars($logo['logo_ico']); ?>"></i></span>
    </a>
  <?php endforeach; ?>
</div>
<!-- Logos | Fin -->