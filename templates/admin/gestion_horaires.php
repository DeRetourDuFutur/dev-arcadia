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
            <p class="mt-3"><?= strtoupper(htmlspecialchars($horaire['jour'])); ?></p>
            <i class="fa-solid fa-clock fa-2xl pb-4" style="color: #019367;"></i><br>
            <span class="py-3"><?= htmlspecialchars($horaire['ouverture']); ?></span> - <span class="py-3"><?= htmlspecialchars($horaire['fermeture']); ?></span>
            <div class="align-text-bottom mt-2">
              <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $horaire['id'] ?>">
                <div class="alert alert-secondary my-0">
                  <label for="jour" class="ms-1">JOUR</label>
                  <input type="text" class="form-control" id="jour" name="jour" readonly value="<?= $horaire['jour']; ?>">
                </div>
                <div class="alert alert-secondary my-0">
                  <label for="ouverture" class="ms-1">OUVERTURE</label>
                  <input type="text" class="form-control" id="ouverture" name="ouverture" value="<?= $horaire['ouverture']; ?>">
                </div>
                <div class="alert alert-secondary my-0">
                  <label for="fermeture" class="ms-1">FERMETURE</label>
                  <input type="text" class="form-control" id="fermeture" name="fermeture" value="<?= $horaire['fermeture']; ?>">
                </div>
                <button type="submit" class="btn btn-primary-color align-bottom mt-4" name="action-horaires" value="update">MAJ</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Horaires | Fin -->