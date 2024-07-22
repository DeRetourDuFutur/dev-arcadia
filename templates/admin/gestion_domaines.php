<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_domaines.php';
?>
<!-- GESTION DES DOMAINES | DÉBUT -->
<div class="container">
  <div class="fadeInUp row col-lg-12 pt-5 pb-4" data-wow-delay="0.1s">
    <h6 class="text-left mb-3">
      <i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i>
      <span>DASHBOARD</span> | <span class="text-primary">DOMAINES</span>
    </h6>
    <?php foreach ($domaines as $domaine) : ?>
      <div class="col-lg-3 mb-2">
        <form action="" method="POST" class="container" enctype="multipart/form-data">
          <!-- ID (HIDDEN) -->
          <input type="hidden" name="domaine_id" value="<?= htmlspecialchars($domaine['domaine_id']) ?>">
          <!-- NOM -->
          <div class="alert alert-secondary my-0">
            <input type="text" name="domaine_name" class="form-control" value="<?= htmlspecialchars($domaine['domaine_name']); ?>">
          </div>
          <!-- SLOGAN -->
          <div class="alert alert-secondary my-0">
            <input type="text" name="domaine_slogan" class="form-control" value="<?= htmlspecialchars($domaine['domaine_slogan']); ?>">
          </div>
          <!-- IMAGE COVER -->
          <div class="alert alert-secondary my-0 text-center">
            <label for="domaine_cover">COVER SLIDER</label>
            <img src="<?= htmlspecialchars(BASE_URL . $domaine['domaine_cover']) ?>" class="img-fluid img-fiche-animal" style="max-height: 88px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='88px';"><br />
            <div class="input-group">
              <input id="domaine_cover" type="file" name="domaine_cover" accept="image/*" class="form-control form-control-sm">
            </div>
          </div>
          <!-- IMAGE THUMBNAIL -->
          <div class="alert alert-secondary my-0 text-center">
            <label for="domaine_thumbnail">THUMBNAILS SLIDER</label>
            <img src="<?= htmlspecialchars(BASE_URL . $domaine['domaine_thumbnail']) ?>" class="img-fluid img-fiche-animal mx-auto" style="max-height: 88px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='88px';"><br />
            <div class="input-group">
              <input id="domaine_thumbnail" type="file" name="domaine_thumbnail" accept="image/*" class="form-control form-control-sm">
            </div>
          </div>
          <div class="alert alert-secondary my-0">
            <div class="d-flex justify-content-evenly pt-3">
              <button type="submit" class="btn btn-primary-color">Modifier</button>
            </div>
          </div>
          <input type="hidden" value="<?= $_SESSION['csrf_token'] ?>">
        </form>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- GESTION DES DOMAINES | FIN -->