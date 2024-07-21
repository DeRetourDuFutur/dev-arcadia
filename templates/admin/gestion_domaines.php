<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_domaines.php';
?>
<!-- GESTION DES DOMAINES | DÉBUT -->
<div class="container">
  <div class="fadeInUp row col-lg-12" data-wow-delay="0.1s">
    <div class="row col-lg-12 pt-3">
      <h6 class="text-left mb-3">
        <i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i>
        <span>DASHBOARD</span> | <span class="text-primary">DOMAINES</span>
      </h6>
      <?php if (isset($domaines)) : ?>
        <?php foreach ($domaines as $domaine) : ?>
          <div class="col-lg-3 mb-2">
            <div class="border border-primary ">
              <form action="" method="POST" class="container" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <!-- ID (HIDDEN) -->
                      <input type="hidden" name="domaine_id" value="<?= $domaine['domaine_id'] ?>">
                    </div>
                  </div>
                  <!-- PRÉNOM -->
                  <div class="input-group mb-2">
                    <input type="text" name="domaine_name" class="form-control form-control-lg mt-2" value="<?= htmlspecialchars($domaine['domaine_name']); ?>"> <br>
                  </div>
                  <div class="input-group mb-2">
                    <!-- IMAGE COVER -->
                    <label for="domaine_cover">COVER SLIDER</label>
                    <img src="<?= BASE_URL . $domaine['domaine_cover'] ?>" class="img-fluid img-fiche-animal" style="max-height: 88px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='88px';"><br />
                    <div class="input-group">
                      <input id="domaine_cover" type="file" name="domaine_cover" accept="image/*" class="form-control form-control-sm">
                    </div>
                  </div>
                  <div class="input-group mb-2">
                    <!-- IMAGE THUMBNAIL -->
                    <label for="domaine_thumbnail">THUMBNAILS SLIDER</label>
                    <img src="<?= BASE_URL . $domaine['domaine_thumbnail'] ?>" class="img-fluid img-fiche-animal" style="max-height: 88px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='88px';"><br />
                    <div class="input-group">
                      <input id="domaine_thumbnail" type="file" name="domaine_thumbnail" accept="image/*" class="form-control form-control-sm">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mb-2">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <p>Aucun domaine trouvé.</p>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- GESTION DES DOMAINES | FIN -->