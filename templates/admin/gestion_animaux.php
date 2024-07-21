<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_animaux.php';
?>
<!-- GESTION DES ANIMAUX | DÉBUT -->
<section id="gestion_animaux">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <div class="row col-lg-12">
        <h6 class="text-left mb-3">
          <i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i>
          <span>DASHBOARD</span> | <span class="text-primary">ANIMAUX</span>
        </h6>
        <!-- MENU DES DOMAINES | DÉBUT -->
        <div class="mb-3">
          <?php foreach ($domaines as $domaine) : ?>
            <?php if ($selected_domaine_id === $domaine['domaine_id']) : ?>
              <i class="fa-solid fa-square-minus text-primary ms-4 me-2"></i>
            <?php else : ?>
              <i class="fa-solid fa-square-minus text-secondary ms-4 me-2"></i>
            <?php endif; ?>
            <?php if ($selected_domaine_id === $domaine['domaine_id']) : ?>
              <a href="<?= BASE_URL . '/gestion-animaux?domaine_id=' . $domaine['domaine_id'] ?>" class="text-primary"><?= $domaine['domaine_name']; ?></a>
            <?php else : ?>
              <a href="<?= BASE_URL . '/gestion-animaux?domaine_id=' . $domaine['domaine_id'] ?>" class="text-secondary"><?= $domaine['domaine_name']; ?></a>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <!-- MENU DES DOMAINES | FIN -->
        <!-- MENU DES RACES | DÉBUT -->
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
      </div>
      <?php if (isset($selected_domaine_id)) : ?>
        <?php foreach ($animaux as $animal) : ?>
          <?php if ($animal['animal_domaine_id'] === $selected_domaine_id) : ?>
            <div class="col-lg-3 mb-2" id="filtered_animal">
              <div class="border border-primary ">
                <form action="" method="POST" class="container" enctype="multipart/form-data">
                  <!-- ID (HIDDEN) -->
                  <input type="hidden" name="animal_id" value="<?= $animal['animal_id'] ?>">
                  <!-- PRÉNOM -->
                  <div class="input-group mb-2">
                    <input type="text" name="animal_prenom" class="form-control form-control-lg mt-2" value="<?= htmlspecialchars($animal['animal_prenom']); ?>"> <br>
                  </div>
                  <div class="input-group mb-2">
                    <!-- IMAGE -->
                    <img src="<?= BASE_URL . $animal['animal_visuel'] ?>" class="img-fluid img-fiche-animal" style="max-height: 88px;" onmouseover="this.style.maxHeight='100%';" onmouseout="this.style.maxHeight='88px';"><br />
                    <div class="input-group">
                      <input id="animal_visuel" type="file" name="animal_visuel" accept="image/*" class="form-control form-control-sm">
                    </div>
                  </div>
                  <!-- ÂGE -->
                  <div class="input-group mb-2">
                    <label for="animal_age" class="input-group-text input-group-text-sm">ÂGE</label>
                    <select class="form-select form-select-sm" id="animal_age" name="animal_age">
                      <?php
                      for ($i = 1; $i <= 100; $i++) {
                        $selected = ($i == $animal['animal_age']) ? 'selected' : '';
                        echo "<option value=\"$i\" $selected>$i</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <!-- POIDS -->
                  <div class="input-group mb-2">
                    <label for="animal_poids" class="input-group-text input-group-text-sm">POIDS</label>
                    <select class="form-select form-select-sm" id="animal_poids" name="animal_poids">
                      <?php
                      for ($i = 1; $i <= 200; $i++) {
                        $selected = ($i == $animal['animal_poids']) ? 'selected' : '';
                        echo "<option value=\"$i\" $selected>$i</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <!-- TYPE NOURRITURE -->
                  <div class="input-group mb-2">
                    <label for="animal_food_id" class="input-group-text input-group-text-sm">NOURRITURE</label>
                    <select class="form-select form-select-sm" id="animal_food_id" name="animal_food_id">
                      <?php foreach ($rapports as $rapport) : ?>
                        <option value="<?= $rapport['rapport_food_type_id'] ?>" <?php if ($rapport['rapport_food_type_id'] === $rapport['rapport_food_type_id']) : ?> selected <?php endif; ?>> <?= $rapport['food_type'] ?> </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <!-- UNITÉ NOURRITURE -->
                  <div class="input-group mb-2">
                    <label for="animal_unite_id" class="input-group-text input-group-text-sm">UNITE</label>
                    <select class="form-select form-select-sm" id="animal_unite_id" name="animal_unite_id">
                      <?php foreach ($unites as $unite) : ?>
                        <option value="<?= $unite['unite_id'] ?>" <?php if ($animal['animal_unite_id'] === $unite['unite_id']) : ?> selected <?php endif; ?>> <?= $unite['unite_type'] ?> </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <!-- QUANTITÉ NOURRITURE -->
                  <div class="input-group mb-2">
                    <label for="animal_quantite_id" class="input-group-text input-group-text-sm">QUANTITE</label>
                    <select class="form-select form-select-sm" id="animal_quantite_id" name="animal_quantite_id">
                      <?php
                      for ($i = 1; $i <= 100; $i++) {
                        $selected = ($i == $animal['animal_quantite_id']) ? 'selected' : '';
                        echo "<option value=\"$i\" $selected>$i</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <!-- SANTÉ -->
                  <div class="input-group mb-2">
                    <label for="animal_etat_id" class="input-group-text input-group-text-sm">SANTE</label>
                    <select class="form-select form-select-sm" id="animal_etat_id" name="animal_etat_id">
                      <?php foreach ($etats as $etat) : ?>
                        <option value="<?= $etat['etat_id'] ?>" <?php if ($animal['animal_etat_id'] === $etat['etat_id']) : ?> selected <?php endif; ?>> <?= $etat['etat_type'] ?> </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <!-- DOMAINE -->
                  <div class="input-group mb-2">
                    <label for="animal_domaine_id" class="input-group-text input-group-text-sm">DOMAINE</label>
                    <select class="form-select form-select-sm" id="animal_domaine_id" name="animal_domaine_id">
                      <?php foreach ($domaines as $domaine) : ?>
                        <option value="<?= $domaine['domaine_id'] ?>" <?php if ($animal['animal_domaine_id'] === $domaine['domaine_id']) : ?> selected <?php endif; ?>> <?= $domaine['domaine_name'] ?> </option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <!-- RACE -->
                  <div class="input-group mb-2">
                    <label for="animal_race_id" class="input-group-text input-group-text-sm">RACE</label>
                    <select class="form-select form-select-sm" id="animal_race_id" name="animal_race_id">
                      <?php foreach ($races as $race) : ?>
                        <option value="<?= $race['race_id'] ?>" <?php if ($animal['animal_race_id'] === $race['race_id']) : ?> selected <?php endif; ?>><?= ucfirst($race['race_nom']) ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <!-- STATUT (AFFICHÉ/MASQUÉ) -->
                  <div class="input-group">
                    <label for="animal_statut" class="input-group-text input-group-text-sm"><?= $animal['animal_statut'] === 1 ? '<span class="text-primary">AFFICH&Eacute;</span>' : '<span class="text-secondary">MASQU&Eacute;</span>'; ?></label>
                    <select class="form-select form-select-sm" id="animal_statut" name="animal_statut">
                      <option value="1" <?= $animal['animal_statut'] === 1 ? 'selected' : ''; ?>>Actif</option>
                      <option value="0" <?= $animal['animal_statut'] === 0 ? 'selected' : ''; ?>>Inactif</option>
                    </select>
                  </div>
                  <div class="d-flex justify-content-evenly pt-3">
                    <button type="submit" class="btn btn-primary-color my-4" name="animal_action" value="update">Mettre à jour</button>
                  </div>
                </form>
              </div>
              <br>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
</section>
<!-- Gestion des Animaux | Fin -->