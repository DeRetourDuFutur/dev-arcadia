<?php
require_once '../app/admin/gestion_logos.php';
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
            <?php if (isset($alertMessages)) : ?>
              <?php foreach ($alertMessages as $message) : ?>
                <p><?= $message ?></p>
              <?php endforeach ?>
            <?php endif; ?>
            <form action="" method="POST" class="container" enctype="multipart/form-data">
              <input type="hidden" name="logo_id" value="<?= $logo['logo_id'] ?>">
              <label for="logo_txtg" class="mt-4 mb-2 fw-bold">TEXTE GAUCHE <?php ?></label> <br>
              <input type="text" name="logo_txtg" value="<?= htmlspecialchars($logo['logo_txtg']); ?>"> <br>
              <label for="logo_txtd" class="mt-4 mb-2 fw-bold">TEXTE DROIT</label> <br>
              <input type="text" name="logo_txtd" value="<?= htmlspecialchars($logo['logo_txtd']); ?>"> <br>
              <label for="logo_img" class="mt-4 mb-2 fw-bold">IMAGE</label> <br>
              <img src="<?= $logo['logo_img']; ?>" alt="<?= $logo['logo_title']; ?>" class="img-fluid mt-4 img-services" style="max-height: 120px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='120px';"> <br />
              <label for="logo_img" class="mt-4 mb-2 fw-bold">Modifier Image Front</label> <br>
              <input type="file" name="logo_img" id="logo_img">
              <div class="justify-content-center">
                <label for="logo_ico" class="mt-4 mb-2 fw-bold">ICÔNE</label>
                <textarea name="logo_ico" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['logo_ico']); ?></textarea>
              </div>
              <div class="justify-content-center">
                <label for="logo_lien" class="mt-4 mb-2 fw-bold">LINK</label>
                <textarea name="logo_lien" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['logo_lien']); ?></textarea>
              </div>
              <div class="justify-content-center">
                <label for="logo_title" class="mt-4 mb-2 fw-bold">TITLE</label>
                <textarea name="logo_title" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($logo['logo_title']); ?></textarea>
              </div>
              <div class="justify-content-center">
                <label for="logo_attribut" class="mt-4 mb-2 fw-bold">ATTRIBUT</label>
                <select name="logo_attribut" id="logo_attribut">
                  <option value="FRONT" <?php if ($logo['logo_attribut'] === 'FRONT') : ?> selected <?php endif ?>>FRONT</option>
                  <option value="BACK" <?php if ($logo['logo_attribut'] === 'BACK') : ?> selected <?php endif ?>>BACK</option>
                </select>
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