<!-- APPEL DES FONCTIONS PHP -->
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
                <input type="hidden" name="horaire_id" value="<?= htmlspecialchars($horaire['horaire_id']) ?>">
                <input type="hidden" name="horaire_jour" value="<?= htmlspecialchars($horaire['horaire_jour']) ?>">
                <div class="alert alert-secondary my-0">
                  <div class="input-group mb-3">
                    <label for="horaire_ouverture" class="input-group-text">OUVERTURE</label>
                    <select class="form-select" id="horaire_ouverture" name="horaire_ouverture">
                      <?php
                      $start_time = strtotime('00:00');
                      $end_time = strtotime('23:00');
                      $current_time = $start_time;
                      while ($current_time <= $end_time) {
                        $time = date('H:i', $current_time);
                        $selected = ($time == $horaire['horaire_ouverture']) ? 'selected' : '';
                        echo "<option value=\"" . htmlspecialchars($time) . "\" $selected>" . htmlspecialchars($time) . "</option>";
                        $current_time += 60 * 30; // increment by 30 minutes
                      }
                      ?>
                    </select>
                  </div>
                  <div class="input-group mb-3">
                    <label for="horaire_fermeture" class="input-group-text">FERMETURE</label>
                    <select class="form-select" id="horaire_fermeture" name="horaire_fermeture">
                      <?php
                      $start_time = strtotime('00:00');
                      $end_time = strtotime('23:00');
                      $current_time = $start_time;
                      while ($current_time <= $end_time) {
                        $time = date('H:i', $current_time);
                        $selected = ($time == $horaire['horaire_fermeture']) ? 'selected' : '';
                        echo "<option value=\"" . htmlspecialchars($time) . "\" $selected>" . htmlspecialchars($time) . "</option>";
                        $current_time += 60 * 30; // increment by 30 minutes
                      }
                      ?>
                    </select>
                  </div>
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