<?php
require_once '../app/admin/gestion_horaires.php';
?>
<!-- Gestion des Horaires | Début -->
<section id="horaires">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION HORAIRES </span></h6>
      <?php foreach ($horaires as $horaire) : ?>
        <div class="text-center col-sm-3 mb-4 px-2">
          <div class="p-4 border border-primary h-100">
            <p class="mt-3"><?= strtoupper(htmlspecialchars($horaire['horaire_jour'])); ?></p>
            <i class="fa-solid fa-clock fa-2xl pb-4" style="color: #019367;"></i><br>
            <span class="py-3"><?= htmlspecialchars($horaire['horaire_ouverture']); ?></span> - <span class="py-3"><?= htmlspecialchars($horaire['horaire_fermeture']); ?></span>
            <div class="align-text-bottom mt-2">
              <form action="" method="POST">
                <input type="hidden" name="horaire_id" value="<?= $horaire['horaire_id'] ?>">
                <div class="alert alert-secondary my-0">
                  <label for="horaire_jour" class="ms-1">JOUR</label>
                  <input type="text" class="form-control" id="horaire_jour" name="horaire_jour" readonly value="<?= $horaire['horaire_jour']; ?>">
                </div>
                <div class="alert alert-secondary my-0">
                  <label for="horaire_ouverture" class="ms-1">OUVERTURE</label>
                  <input type="text" class="form-control" id="horaire_ouverture" name="horaire_ouverture" value="<?= $horaire['horaire_ouverture']; ?>">
                </div>
                <div class="alert alert-secondary my-0">
                  <label for="horaire_fermeture" class="ms-1">FERMETURE</label>
                  <input type="text" class="form-control" id="horaire_fermeture" name="horaire_fermeture" value="<?= $horaire['horaire_fermeture']; ?>">
                </div>
                <button type="submit" class="btn btn-primary-color align-bottom mt-4" name="horaire_action" value="update">MAJ</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Horaires | Fin -->