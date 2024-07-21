<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_logos.php';
?>
<!-- GESTION LOGOS | DÉBUT -->
<section id="gestion_logos">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-3" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i>
        <span>DASHBOARD</span> | <span class="text-primary">GESTION LOGOS </span>
      </h6>
      <?php foreach ($logos as $logo) : ?>
        <div class="col-lg-3 mb-4">
          <?php if (isset($alertMessages)) : ?>
            <?php foreach ($alertMessages as $message) : ?>
              <p><?= $message ?></p>
            <?php endforeach ?>
          <?php endif; ?>
          <!-- FORMULAIRE DE GESTION DES LOGOS | DÉBUT -->
          <form method="POST" class="container" enctype="multipart/form-data">
            <!-- ID (HIDDEN) -->
            <input type="hidden" name="logo_id" value="<?= $logo['logo_id'] ?>">
            <!-- ATTRIBUT -->
            <div class="input-group">
              <label for="logo_attribut" class="input-group-text input-group-text-sm"><?= $logo['logo_attribut'] === 'FRONT' ? '<span class="text-primary">FRONT</span>' : '<span class="text-secondary">BACK</span>'; ?></label>
              <select class="form-select form-select-sm" id="logo_attribut" name="logo_attribut">
                <option value="FRONT" <?= $logo['logo_attribut'] === 'FRONT' ? 'selected' : ''; ?>>FRONT</option>
                <option value="BACK" <?= $logo['logo_attribut'] === 'BACK' ? 'selected' : ''; ?>>BACK</option>
              </select>
            </div>
            <!-- TEXTE GAUCHE -->
            <div class="alert alert-secondary my-0">
              <label for="logo_txtg" class="fs-6">TEXTE GAUCHE</label>
              <input type="text" class="form-control" name="logo_txtg" value="<?= htmlspecialchars($logo['logo_txtg']); ?>">
              <!-- TEXTE DROIT -->
              <label for="logo_txtd" class="fs-6 mt-2">TEXTE DROIT</label>
              <input type="text" class="form-control" name="logo_txtd" value="<?= htmlspecialchars($logo['logo_txtd']); ?>">
              <!-- ICÔNE -->
              <label for="logo_ico" class="fs-6 mt-2">ICÔNE</label>
              <input type="text" class="form-control" name="logo_ico" value="<?= htmlspecialchars($logo['logo_ico']); ?>">
              <!-- LINK -->
              <label for="logo_lien" class="fs-6 mt-2">LINK</label>
              <input type="text" class="form-control" name="logo_lien" value="<?= htmlspecialchars($logo['logo_lien']); ?>">
              <!-- TITLE -->
              <label for="logo_title" class="fs-6 mt-2">TITLE</label>
              <input type="text" class="form-control" name="logo_title" value="<?= htmlspecialchars($logo['logo_title']); ?>">
            </div>
            <!-- IMAGE -->
            <div class="alert alert-secondary my-0 text-center">
              <img src="<?= $logo['logo_img']; ?>" alt="<?= $logo['logo_title']; ?>" class="img-fluid" style="max-height: 80px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='80px';">
              <div class="input-group">
                <input type="file" name="logo_img" id="logo_img" accept="image/*" class="form-control form-control-sm">
              </div>
              <!-- BOUTON MAJ LOGO -->
              <div class="d-flex justify-content-evenly pt-3">
                <button type="submit" class="btn btn-primary-color" name="logo_action" value="update">Mettre à jour</button>
              </div>
            </div>
          </form>
          <!-- FORMULAIRE DE GESTION DES LOGOS | FIN -->
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- GESTION LOGOS | FIN -->