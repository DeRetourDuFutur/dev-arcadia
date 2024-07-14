<?php
require_once '../app/admin/gestion_services.php';
?>
<!-- Gestion des Services | Début -->
<section id="gestion_services">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION SERVICES </span></h6>
      <?php foreach ($services as $service) : ?>
        <div class="col-lg-3 mb-4">
          <div class="border border-primary ">
            <form action="" method="POST" class="container" enctype="multipart/form-data">
              <input type="hidden" name="service_id" value="<?= $service['service_id'] ?>">
              <label for="service_nom" class="mt-4 mb-2 fw-bold">TITRE DU SERVICE</label> <br>
              <input type="text" name="service_nom" value="<?= htmlspecialchars($service['service_nom']); ?>"> <br>
              <img src="<?= $service['service_visuel']; ?>" alt="<?= $service['service_nom']; ?>" class="img-fluid mt-4 img-services" style="max-height: 120px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='120px';"> <br /> <label for="service_visuel" class="mt-4 mb-2 fw-bold">Modifier l'image</label> <br>
              <input id="service_visuel" type="file" name="service_visuel" accept="image/*">
              <div class="justify-content-center">
                <label for="service_contenu" class="mt-4 mb-2 fw-bold">DESCRIPTION DU SERVICE</label>
                <textarea name="service_contenu" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($service['service_contenu']); ?></textarea>
              </div>
              <div class="text-center">
                <label for="service_statut" class="mt-4 mb-2 fw-bold">STATUT ACTUEL : <?= $service['service_statut'] === 1 ? '<span class="text-primary">AFFICH&Eacute;</span>' : '<span class="text-secondary">MASQU&Eacute;</span>'; ?></label><br>
                <label for="service_statut1">Afficher</label>
                <input id="service_statut1" type="radio" name="service_statut" value="1" <?= $service['service_statut'] === 1 ? 'checked' : ''; ?>>
                <label for="service_statut2">Masquer</label>
                <input id="service_statut2" type="radio" name="service_statut" value="0" <?= $service['service_statut'] === 0 ? 'checked' : ''; ?>>
                <label for="service_aside" class="mt-4 mb-2 fw-bold">ASIDE : <?= $service['service_aside'] === 'no' ? '<span class="text-secondary">NON</span>' : '<span class="text-primary">OUI</span>'; ?></label><br>
                <label for="service_aside1">Oui</label>
                <input id="service_aside1" type="radio" name="service_aside" value="yes" <?= $service['service_aside'] === 'yes' ? 'checked' : ''; ?>>
                <label for="service_aside2">Non</label>
                <input id="service_aside2" type="radio" name="service_aside" value="no" <?= $service['service_aside'] === 'no' ? 'checked' : ''; ?>>
              </div>
              <div class="d-flex justify-content-evenly pt-3">
                <button type="submit" class="btn btn-primary-color my-4" name="service_action" value="update">Mettre à jour</button>
              </div>
            </form>
          </div>
          <br>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Services | Fin -->