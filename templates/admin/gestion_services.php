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
              <!-- IMAGE -->
              <img src="<?= $service['service_visuel']; ?>" alt="<?= $service['service_nom']; ?>" class="img-fluid mt-4 img-services" style="max-height: 120px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='120px';"><br />
              <div class="input-group">
                <input id="service_visuel" type="file" name="service_visuel" accept="image/*" class="form-control form-control-sm">
              </div>
              <div class="justify-content-center">
                <label for="service_contenu" class="mt-4 mb-2 fw-bold">DESCRIPTION DU SERVICE</label>
                <textarea name="service_contenu" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($service['service_contenu']); ?></textarea>
              </div>
              <!-- STATUT (Affiché ou Masqué) -->
              <div class="input-group mt-3">
                <label for="service_statut" class="input-group-text input-group-text-sm"><?= $service['service_statut'] === 1 ? '<span class="text-primary">AFFICH&Eacute;</span>' : '<span class="text-secondary">MASQU&Eacute;</span>'; ?></label>
                <select class="form-select form-select-sm" id="service_statut" name="service_statut">
                  <option value="1" <?= $service['service_statut'] === 1 ? 'checked' : ''; ?>>OUI</option>
                  <option value="0" <?= $service['service_statut'] === 0 ? 'checked' : ''; ?>>NON</option>
                </select>
              </div>
              <!-- ASIDE (Sur le côté ou non) -->
              <div class="input-group mt-3">
                <label for="service_main" class="input-group-text input-group-text-sm"><?= $service['service_main'] === 1 ? '<span class="text-primary">MAIN</span>' : '<span class="text-secondary">ASIDE</span>'; ?></label>
                <select class="form-select form-select-sm" id="service_main" name="service_main">
                  <option value="1" <?= $service['service_main'] === 1 ? 'selected' : ''; ?>>MAIN</option>
                  <option value="0" <?= $service['service_main'] === 0 ? 'selected' : ''; ?>>ASIDE</option>
                </select>
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