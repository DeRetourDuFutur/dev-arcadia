<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/new_rapport.php';
?>
<!-- AJOUT D'UN RAPPORT VÉTÉRINAIRE | DÉBUT -->
<section id="ajout_rapport">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">NEW RAP.</span><i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i> <a href="<?php echo BASE_URL . '/gestion-rapports' ?>">LIST RAP.</a></h6>
      <!-- MENU DES DOMAINES | DEBUT -->
      <div class="mb-3">
        <?php foreach ($domaines as $domaine) : ?>
          <?php if ($selected_domaine_id === $domaine['domaine_id']) : ?>
            <i class="fa-solid fa-square-minus text-primary ms-4 me-2"></i>
          <?php else : ?>
            <i class="fa-solid fa-square-minus text-secondary ms-4 me-2"></i>
          <?php endif; ?>
          <?php if ($selected_domaine_id === $domaine['domaine_id']) : ?>
            <a href="<?= BASE_URL . '/new-rapport?domaine_id=' . $domaine['domaine_id'] ?>" class="text-primary"><?= $domaine['domaine_name']; ?></a>
          <?php else : ?>
            <a href="<?= BASE_URL . '/new-rapport?domaine_id=' . $domaine['domaine_id'] ?>" class="text-secondary"><?= $domaine['domaine_name']; ?></a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <!-- MENU DES DOMAINES | FIN -->

      <!-- MENU DES RACES | DEBUT -->
      <div class="input-group mb-3 ms-5 dropdown">
        <button class="input-group-text input-group-text-sm dropdown-toggle" type="button" id="animal_race_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <?php foreach ($races as $race) : ?>
            <?php if ($race['race_id'] === $selected_race_id) echo ucwords($race['race_nom']); ?>
          <?php endforeach ?>
        </button>
        <ul class="dropdown-menu" aria-labelledby="animal_race_dropdown">
          <?php foreach ($races as $race) : ?>
            <li><a class="dropdown-item" href="?domaine_id=<?= $selected_domaine_id ?>&race_id=<?= $race['race_id'] ?>" value="<?= $race['race_id'] ?>" <?php if (isset($animal) && $animal['animal_race_id'] === $race['race_id']) : ?> selected <?php endif; ?>><?= ucfirst($race['race_nom']) ?></a></li>
          <?php endforeach ?>
        </ul>
      </div>
      <!-- MENU DES RACES | FIN -->
      <div class="fadeInUp row col-lg-12" data-wow-delay="0.1s">
        <div class="col-lg-3 mb-4">
          <!-- FORMULAIRE D'AJOUT D'UN RAPPORT | DÉBUT -->
          <form method="POST" id="addRapportForm">
            <!-- ID (HIDDEN) -->
            <input type="hidden" id="rapport_id" name="rapport_id" value="<?= $rapport['rapport_id'] ?>">
            <!-- ANIMAL -->
            <div class="alert alert-secondary my-0">
              <div class="input-group">
                <label for="rapport_animal_id" class="input-group-text input-group-text-sm">ANIMAL</label>
                <select class="form-select form-select-sm" id="rapport_animal_id" name="rapport_animal_id">
                  <?php foreach ($animaux as $animal) : ?>
                    <option value="<?= $animal['animal_id'] ?>"><?= $animal['animal_prenom'] ?> - <?= $animal['race_nom'] ?> - <?= $animal['domaine_name'] ?></option>
                  <?php endforeach ?>
                </select>
                <!-- DATE DE PASSAGE -->
                <div class="input-group mt-2">
                  <label for="rapport_date" class="input-group-text input-group-text-sm">DATE</label>
                  <input type="date" name="rapport_date" id="rapport_date" class="form-control" value="<?= date('Y-m-d') ?>">
                  <!-- ÉTAT DE L'ANIMAL -->
                  <div class="input-group mt-2">
                    <label for="rapport_etat_animal" class="input-group-text input-group-text-sm">SANTÉ</label>
                    <select class="form-select form-select-sm" id="rapport_etat_animal" name="rapport_etat_animal">
                      <?php foreach ($etats as $etat) : ?>
                        <option value="<?= $etat['etat_id'] ?>"><?= $etat['etat_type'] ?></option>
                      <?php endforeach ?>
                    </select>
                    <!-- TYPE DE NOURRITURE -->
                    <div class="input-group mt-2">
                      <label for="rapport_food_type_id" class="input-group-text input-group-text-sm">NOURRITURE</label>
                      <select class="form-select form-select-sm" id="rapport_food_type_id" name="rapport_food_type_id">
                        <?php foreach ($foods as $food) : ?>
                          <option value="<?= $food['food_id'] ?>" <?php if ($food['food_type'] === 'Fruits') echo 'selected' ?>><?= $food['food_type'] ?></option>
                        <?php endforeach ?>
                      </select>
                      <!-- UNITÉ DE NOURRITURE -->
                      <div class="input-group mt-2">
                        <label for="rapport_food_unite_type_id" class="input-group-text input-group-text-sm">UNITÉ</label>
                        <select class="form-select form-select-sm" id="rapport_food_unite_type_id" name="rapport_food_unite_type_id">
                          <?php foreach ($unites as $unite) : ?>
                            <option value="<?= $unite['unite_id'] ?>" <?php if ($unite['unite_type'] === 'kg') echo 'selected' ?>><?= $unite['unite_type'] ?></option>
                          <?php endforeach ?>
                        </select>
                        <!-- QUANTITÉ DE NOURRITURE -->
                        <div class="input-group mt-2">
                          <label for="rapport_food_quantite" class="input-group-text input-group-text-sm">QUANTITÉ</label>
                          <input type="number" name="rapport_food_quantite" id="rapport_food_quantite" class="form-control" min="0">
                          <!-- BOUTON -->
                          <div class="d-flex justify-content-evenly pt-3">
                            <button type="submit" class="btn btn-primary-color my-4" name="new_rapport_action" value="add">Ajouter</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- FORMULAIRE D'AJOUT D'UN RAPPORT | FIN -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- AJOUT D'UN RAPPORT VÉTÉRINAIRE | FIN -->