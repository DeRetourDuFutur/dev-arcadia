<?php
require_once '../app/admin/gestion_logos.php';
?>
<!-- Gestion des Logos | Début -->
<section id="gestion_logos">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION LOGOS </span></h6>
      <div class="col-lg-3 mb-4">
        <div class="border border-primary ">
          <form action="" method="POST" class="container" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $logo['id'] ?>">
            <div class="justify-content-center">
              <label for="txtg" class="mt-4 mb-2 fw-bold">TEXTE GAUCHE</label>
              <textarea name="txtg" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['txtg']); ?></textarea>
            </div>
            <div class="justify-content-center">
              <label for="txtd" class="mt-4 mb-2 fw-bold">TEXTE DROIT</label>
              <textarea name="txtd" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['txtd']); ?></textarea>
            </div>
            <div class="justify-content-center">
              <label for="title" class="mt-4 mb-2 fw-bold">TEXTE DROIT</label>
              <textarea name="title" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['title']); ?></textarea>
            </div>
            <div class="justify-content-center">
              <label for="visuel" class="mt-4 mb-2 fw-bold">LOGO</label> <br>
              <input id="visuel" type="file" name="visuel" accept="image/*">
            </div>
            <div class="d-flex justify-content-evenly pt-3">
              <button type="submit" class="btn btn-primary-color my-4" name="action-logos" value="update">Mettre à jour</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Gestion des Logos | Fin -->