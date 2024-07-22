<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_services.php';
?>
<!-- GESTION SERVICES | DÉBUT -->
<section id="gestion_services">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION SERVICES </span></h6>
      <?php foreach ($services as $service) : ?>
        <div class="col-lg-3 mb-4">
          <form method="POST" class="container" enctype="multipart/form-data">
            <!-- ID (HIDDEN) -->
            <input type="hidden" name="service_id" value="<?= htmlspecialchars($service['service_id']); ?>">
            <!-- TITRE SERVICE -->
            <div class="alert alert-secondary my-0">
              <label for="service_nom" class="mb-2 fw-bold">TITRE DU SERVICE</label> <br>
              <input type="text" class="form-control" name="service_nom" value="<?= htmlspecialchars($service['service_nom']); ?>">
            </div>
            <!-- IMAGE -->
            <div class="alert alert-secondary my-0 text-center">
              <img src="<?= htmlspecialchars($service['service_visuel']); ?>" alt="<?= htmlspecialchars($service['service_nom']); ?>" class="img-fluid" style="max-height: 90px;" onmouseover="this.style.maxHeight='70%';" onmouseout="this.style.maxHeight='90px';">
              <div class="input-group">
                <input id="service_visuel" type="file" name="service_visuel" accept="image/*" class="form-control form-control-sm">
              </div>
            </div>
            <!-- DESCRIPTION SERVICE -->
            <div class="alert alert-secondary my-0">
              <label for="service_contenu" class="mb-2 fw-bold">DESCRIPTION DU SERVICE</label>
              <textarea name="service_contenu" class="form-control" cols="70" rows="5" wrap="hard"><?= htmlspecialchars($service['service_contenu']); ?></textarea>
            </div>
            <!-- STATUT (AFFICHÉ/MASQUÉ) -->
            <div class="alert alert-secondary my-0">
              <div class="input-group">
                <label for="service_statut" class="input-group-text input-group-text-sm"><?= $service['service_statut'] === 1 ? '<span class="text-primary">AFFICHÉ</span>' : '<span class="text-secondary">MASQUÉ</span>'; ?></label>
                <select class="form-select form-select-sm" id="service_statut" name="service_statut">
                  <option value="1" <?= $service['service_statut'] === 1 ? 'selected' : ''; ?>>AFFICHÉ</option>
                  <option value="0" <?= $service['service_statut'] === 0 ? 'selected' : ''; ?>>MASQUÉ</option>
                </select>
              </div>
            </div>
            <!-- ASIDE (CÔTÉ/PRINCIPALE;) -->
            <div class="alert alert-secondary my-0">
              <div class="input-group">
                <label for="service_main" class="input-group-text input-group-text-sm"><?= $service['service_main'] === 1 ? '<span class="text-primary">MAIN</span>' : '<span class="text-secondary">ASIDE</span>'; ?></label>
                <select class="form-select form-select-sm" id="service_main" name="service_main">
                  <option value="1" <?= $service['service_main'] === 1 ? 'selected' : ''; ?>>MAIN</option>
                  <option value="0" <?= $service['service_main'] === 0 ? 'selected' : ''; ?>>ASIDE</option>
                </select>
              </div>
              <!-- BOUTON MAJ SERVICE -->
              <div class="d-flex justify-content-evenly pt-3">
                <button type="submit" class="btn btn-primary" name="service_action" value="update">MAJ</button>
              </div>
            </div>
            <input type="hidden" value="<?= $_SESSION['csrf_token'] ?>">
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- GESTION SERVICES | FIN -->