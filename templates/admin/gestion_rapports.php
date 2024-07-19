<?php
require_once '../app/admin/gestion_rapports.php';
?>
<!-- GESTION DES RAPPORTS VÉTÉRINAIRES | DÉBUT -->
<section id="rapports">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION DES RAPPORTS <a href="<?php echo BASE_URL . '/new-rapport' ?>"> | NOUVEAU RAPPORT</a></span></h6>
      <?php if (empty($rapports)) : ?>
        <p>Aucun rapport n'existe pour le moment</p>
      <?php else : ?>
        <?php foreach ($rapports as $rapport) : ?>
          <div class="col-lg-3 mb-4">
            <!-- FORMULAIRE DE GESTION DES RAPPORTS | DÉBUT -->
            <form action="" method="POST">
              <!-- ID -->
              <input type="hidden" name="rapport_id" value="<?= $rapport['rapport_id'] ?>">
              <!-- ANIMAL -->
              <div class="alert alert-secondary my-0">
                <label for="rapport_animal_id" class="ms-1">ANIMAL</label>
                <input type="text" name="rapport_animal_id" class="form-control" value="<?= htmlspecialchars($rapport['animal_prenom']); ?>">
              </div>
              <!-- DATE DE PASSAGE -->
              <div class="alert alert-secondary my-0">
                <div class="input-group">
                  <label for="rapport_date" class="input-group-text input-group-text-sm">DATE</label>
                  <select class="form-select form-select-sm" id="rapport_date" name="rapport_date">
                    <option value="<?= htmlspecialchars($rapport['rapport_date']); ?>"></option>
                  </select>
                </div>
              </div>
              <!-- ÉTAT DE L'ANIMAL -->
              <div class="alert alert-secondary my-0">
                <div class="input-group">
                  <label for="rapport_etat_animal" class="input-group-text input-group-text-sm">SANTÉ</label>
                  <select class="form-select form-select-sm" id="rapport_etat_animal" name="rapport_etat_animal">
                    <select class="form-select form-select-sm" id="rapport_etat_animal" name="rapport_etat_animal">
                      <?php if (isset($etats)) : ?>
                        <?php foreach ($etats as $rapports) : ?>
                          <option value="<?= ucwords($rapports['rapport_etat_animal']) ?>"><?= ucwords($rapports['rapport_etat_animal']) ?></option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </select>
                </div>
              </div>
              <!-- TYPE DE NOURRITURE -->
              <div class="alert alert-secondary my-0">
                <div class="input-group">
                  <label for="rapport_food_type_id" class="input-group-text input-group-text-sm">NOURRITURE</label>
                  <select class="form-select form-select-sm" id="rapport_food_type_id" name="rapport_food_type_id">
                    <option value=""></option>
                  </select>
                </div>
              </div>
              <!-- UNITÉ DE NOURRITURE -->
              <div class="alert alert-secondary my-0">
                <div class="input-group">
                  <label for="rapport_food_unite_type_id" class="input-group-text input-group-text-sm">UNITÉ</label>
                  <select class="form-select form-select-sm" id="rapport_food_unite_type_id" name="rapport_food_unite_type_id">
                    <option value=""></option>
                  </select>
                </div>
              </div>
              <!-- QUANTITÉ DE NOURRITURE -->
              <div class="alert alert-secondary my-0">
                <div class="input-group">
                  <label for="rapport_food_unite_type_id" class="input-group-text input-group-text-sm">QUANTITÉ</label>
                  <input type="text" class="form-control" name="rapport_food_quantite" value="<?= htmlspecialchars($rapport['rapport_food_quantite']); ?>">
                </div>
              </div>
              <!-- BOUTON -->
              <div class="d-flex justify-content-evenly pt-3">
                <button type="submit" class="btn btn-primary-color my-4" name="rapport_action" value="update">Mettre à jour</button>
              </div>
          </div>
          </form>
          <!-- FORMULAIRE DE GESTION DES RAPPORTS | FIN -->
    </div>
  <?php endforeach ?>
<?php endif ?>
</section>
<!-- GESTION DES RAPPORTS VÉTÉRINAIRES | FIN -->