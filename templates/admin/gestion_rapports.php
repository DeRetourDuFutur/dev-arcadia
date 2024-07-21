<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_rapports.php';
?>
<!-- GESTION DES RAPPORTS VÉTÉRINAIRE | DÉBUT -->
<section id="gestion_rapports">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">LIST RAP.</span><i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i> <a href="<?php echo BASE_URL . '/new-rapport' ?>">NEW RAP.</a></h6>
      <?php if (empty($rapports)) : ?>
        <p>Aucun rapport actuellement</p>
      <?php else : ?>
        <?php foreach ($rapports as $rapport) : ?>
          <div class="col-lg-3 mb-4">
            <!-- FORMULAIRE DE GESTION DES RAPPORTS | DÉBUT -->
            <form action="" method="POST">
              <input type="hidden" name="rapport_id" value="<?= $rapport['rapport_id'] ?>">
              <!-- ANIMAL -->
              <div class="alert alert-secondary my-0">
                <div class="input-group">
                  <label for="rapport_animal_id" class="input-group-text input-group-text-sm">ANIMAL</label>
                  <select class="form-select form-select-sm" id="rapport_animal_id" name="rapport_animal_id">
                    <?php foreach ($animaux as $animal) : ?>
                      <option value="<?= $animal['animal_id'] ?>" <?php if ($animal['animal_id'] === $rapport['rapport_animal_id']) : ?> selected <?php endif ?>><?= strtoupper($animal['animal_prenom']) ?></option>
                    <?php endforeach ?>
                  </select>
                  <!-- DATE DE PASSAGE -->
                  <div class="input-group mt-2">
                    <label for="rapport_date" class="input-group-text input-group-text-sm">DATE</label>
                    <input type="datetime-local" name="rapport_date" id="rapport_date" class="form-control" value="<?= date('Y-m-d H:i:s', strtotime($rapport['rapport_date'])) ?>">
                    <!-- ÉTAT DE L'ANIMAL -->
                    <div class="input-group mt-2">
                      <label for="rapport_etat_animal" class="input-group-text input-group-text-sm">SANTÉ</label>
                      <select class="form-select form-select-sm" id="rapport_etat_animal" name="rapport_etat_animal">
                        <?php foreach ($etats as $etat) : ?>
                          <option value="<?= $etat['etat_id'] ?>" <?php if ($etat['etat_id'] === $rapport['rapport_etat_animal']) : ?> selected <?php endif ?>><?= $etat['etat_type'] ?></option>
                        <?php endforeach ?>
                      </select>
                      <!-- TYPE DE NOURRITURE -->
                      <div class="input-group mt-2">
                        <label for="rapport_food_type_id" class="input-group-text input-group-text-sm">NOURRITURE</label>
                        <select class="form-select form-select-sm" id="rapport_food_type_id" name="rapport_food_type_id">
                          <?php foreach ($foods as $food) : ?>
                            <option value="<?= $food['food_id'] ?>" <?php if ($food['food_id'] === $rapport['rapport_food_type_id']) : ?> selected <?php endif ?>> <?= htmlspecialchars($food['food_type']) ?> </option>
                          <?php endforeach ?>
                        </select>
                        <!-- UNITÉ DE NOURRITURE -->
                        <div class="input-group mt-2">
                          <label for="rapport_food_unite_type_id" class="input-group-text input-group-text-sm">UNITÉ</label>
                          <select class="form-select form-select-sm" id="rapport_food_unite_type_id" name="rapport_food_unite_type_id">
                            <?php foreach ($unites as $unite) : ?>
                              <option value="<?= $unite['unite_id'] ?>" <?php if ($unite['unite_id'] === $rapport['rapport_food_unite_type_id']) : ?> selected <?php endif ?>><?= htmlspecialchars($unite['unite_type']) ?></option>
                            <?php endforeach ?>
                          </select>
                          <!-- QUANTITÉ DE NOURRITURE -->
                          <div class="input-group mt-2">
                            <label for="rapport_food_unite_type_id" class="input-group-text input-group-text-sm">QUANTITÉ</label>
                            <input type="number" class="form-control" name="rapport_food_quantite" value="<?= htmlspecialchars($rapport['rapport_food_quantite']); ?>">
                            <!-- BOUTON -->
                            <div class="justify-content-center pt-3">
                              <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary-color" name="rapport_action" value="update">Mettre à jour</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <!-- FORMULAIRE DE GESTION DES RAPPORTS | FIN -->
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- GESTION DES RAPPORTS VÉTÉRINAIRE | FIN -->