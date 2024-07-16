<?php
require_once '../app/admin/gestion_animaux.php';
?>

<!-- Gestion des Animaux | Début -->
<section id="gestion_animaux">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3">
        <i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i>
        <span>DASHBOARD</span> | <span class="text-primary">ANIMAUX</span>
        <?php foreach ($domaines as $domaine) : ?>
          <?php if ($selected_domaine_id === $domaine['domaine_id']) : ?>
            <i class="fa-solid fa-square-caret-down fa-xl text-primary ms-4 me-2"></i>
          <?php else : ?>
            <i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i>
          <?php endif; ?>
          <a href="<?= BASE_URL . '/gestion-animaux?domaine_id=' . $domaine['domaine_id'] ?>"><?= $domaine['domaine_name']; ?></a>
        <?php endforeach; ?>
      </h6>
      <h6>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="animal_race_dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <?php foreach ($races as $race) : ?>
              <?php if ($race['race_id'] === $selected_race_id) echo ucwords($race['race_nom']); ?>
            <?php endforeach ?>
          </button>
          <ul class="dropdown-menu" aria-labelledby="animal_race_dropdown">
            <?php foreach ($races as $race) : ?>
              <li><a class="dropdown-item" href="?domaine_id=<?= $selected_domaine_id ?>&race_id=<?= $race['race_id'] ?>" value="<?= $race['race_id'] ?>" <?php if ($animal['animal_race_id'] === $race['race_id']) : ?> selected <?php endif; ?>><?= ucwords($race['race_nom']) ?></a></li>
            <?php endforeach ?>
          </ul>
        </div>
      </h6>
      <?php if (isset($selected_domaine_id)) : ?>
        <?php foreach ($animaux as $animal) : ?>
          <?php if ($animal['animal_domaine_id'] === $selected_domaine_id) : ?>
            <div class="col-lg-3 mb-4" id="filtered_animal">
              <div class="border border-primary ">
                <form action="" method="POST" class="container" enctype="multipart/form-data">
                  <input type="hidden" name="animal_id" value="<?= $animal['animal_id'] ?>">
                  <label for="animal_prenom" class="mt-4 mb-2 fw-bold">PRENOM</label> <br>
                  <input type="text" name="animal_prenom" value="<?= htmlspecialchars($animal['animal_prenom']); ?>"> <br>
                  <img src="<?= BASE_URL . $animal['animal_visuel'] ?>" class="img-fluid mt-4"><br />
                  <label for="animal_visuel" class="mt-4 mb-2 fw-bold">Modifier l'image</label> <br>
                  <input id="animal_visuel" type="file" name="animal_visuel" accept="image/*">
                  <label for="animal_age" class="mt-4 mb-2 fw-bold">AGE</label> <br>
                  <input type="text" name="animal_age" value="<?= htmlspecialchars($animal['animal_age']); ?>"> <br>
                  <label for="animal_poids" class="mt-4 mb-2 fw-bold">POIDS</label> <br>
                  <input type="text" name="animal_poids" value="<?= htmlspecialchars($animal['animal_poids']); ?>"> <br>
                  <label for="animal_sante" class="mt-4 mb-2 fw-bold">SANTE</label> <br>
                  <input type="text" name="animal_sante" value="<?= htmlspecialchars($animal['animal_sante']); ?>"> <br>
                  <label for="animal_statut" class="mt-4 mb-2 fw-bold">STATUT</label> <br>
                  <input type="text" name="animal_statut" value="<?= htmlspecialchars($animal['animal_statut']); ?>"> <br>
                  <label for="animal_domaine_id" class="mt-4 mb-2 fw-bold">DOMAINE</label> <br>
                  <select name="animal_domaine_id" id="animal_domaine_id">
                    <?php foreach ($domaines as $domaine) : ?>
                      <option value="<?= $domaine['domaine_id'] ?>" <?php if ($animal['animal_domaine_id'] === $domaine['domaine_id']) : ?> selected <?php endif; ?>> <?= $domaine['domaine_name'] ?> </option>
                    <?php endforeach ?>
                  </select>
                  <br>
                  <label for="animal_race_id" class="mt-4 mb-2 fw-bold">RACE</label> <br>
                  <select name="animal_race_id" id="animal_race_id">
                    <?php foreach ($races as $race) : ?>
                      <option value="<?= $race['race_id'] ?>" <?php if ($animal['animal_race_id'] === $race['race_id']) : ?> selected <?php endif; ?>><?= $race['race_nom'] ?></option>
                    <?php endforeach ?>
                  </select>
                  <br>
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