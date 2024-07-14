<?php
require_once '../app/admin/gestion_logos.php';

$logos = []; // Initialize the $logos variable
$logo = []; // Initialize the $logos variable

?>
<!-- Gestion des Logos | Début -->
<section id="gestion_logos">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i>
        <span>DASHBOARD</span> | <span class="text-primary">GESTION LOGOS </span>
      </h6>
      <?php foreach ($logos as $logo) : ?>
        <div class="col-lg-3 mb-4">
          <div class="border border-primary ">
            <form action="" method="POST" class="container" enctype="multipart/form-data">
              <input type="hidden" name="logo_id" value="<?= $logo['logo_id'] ?>">
              <label for="logo_txtgfront" class="mt-4 mb-2 fw-bold">TEXTE GAUCHE (FRONT)</label> <br>
              <input type="text" name="logo_txtgfront" value="<?= htmlspecialchars($logo['logo_txtgfront']); ?>"> <br>
              <label for="logo_txtdfront" class="mt-4 mb-2 fw-bold">TEXTE DROIT (FRONT)</label> <br>
              <input type="text" name="logo_txtdfront" value="<?= htmlspecialchars($logo['logo_txtdfront']); ?>"> <br>
              <label for="logo_txtgback" class="mt-4 mb-2 fw-bold">TEXTE GAUCHE (BACK)</label> <br>
              <input type="text" name="logo_txtgback" value="<?= htmlspecialchars($logo['logo_txtgback']); ?>"> <br>
              <label for="logo_txtdback" class="mt-4 mb-2 fw-bold">TEXTE DROIT (FRONT)</label> <br>
              <input type="text" name="logo_txtdback" value="<?= htmlspecialchars($logo['logo_txtdback']); ?>"> <br>
              <label for="logo_imgfront" class="mt-4 mb-2 fw-bold">IMAGE (FRONT)</label> <br>
              <img src="<?= $logo['logo_imgfront']; ?>" alt="<?= $logo['logo_title']; ?>" class="img-fluid mt-4 img-services" style="max-height: 120px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='120px';"> <br />
              <label for="logo_imgfront" class="mt-4 mb-2 fw-bold">Modifier Image Front</label> <br>
              <input id="logo_imgfront" type="file" name="logo_imgfront" accept="image/*">
              <label for="logo_imgback" class="mt-4 mb-2 fw-bold">IMAGE (BACK)</label> <br>
              <img src="<?= $logo['logo_imgback']; ?>" alt="<?= $logo['logo_title']; ?>" class="img-fluid mt-4 img-services" style="max-height: 120px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='120px';"> <br />
              <label for="logo_imgback" class="mt-4 mb-2 fw-bold">Modifier Image Back</label> <br>
              <input id="logo_imgback" type="file" name="logo_imgback" accept="image/*">
              <div class="justify-content-center">
                <label for="logo_icof" class="mt-4 mb-2 fw-bold">ICÔNE (FRONT)</label>
                <textarea name="logo_icof" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['logo_icof']); ?></textarea>
              </div>
              <div class="justify-content-center">
                <label for="logo_icob" class="mt-4 mb-2 fw-bold">ICÔNE (BACK)</label>
                <textarea name="logo_icob" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['logo_icob']); ?></textarea>
              </div>
              <div class="justify-content-center">
                <label for="logo_lien" class="mt-4 mb-2 fw-bold">LIEN</label>
                <textarea name="logo_lien" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['logo_lien']); ?></textarea>
              </div>
              <div class="d-flex justify-content-evenly pt-3">
                <button type="submit" class="btn btn-primary-color my-4" name="logo_action" value="update">Mettre à jour</button>
              </div>
            </form>
          </div>
          <br>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>