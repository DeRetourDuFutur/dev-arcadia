<?php require_once '../app/admin/new_rapport.php';
?>
<!-- Ajout d'un rapport vétérinaire | Début -->
<div class="container">
  <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
    <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">AJOUT D'UN RAPPORT</span><i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i> <a href="<?php echo BASE_URL . '/gestion-rapports' ?>">GESTION RAPPORTS</a></h6>
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
    <form action="" method="POST" id="newRapportForm">
      <input type="hidden" id="rapport_id" name="rapport_id" value="<?= $rapport['rapport_id'] ?>">
      <div class="form-group">
        <label for="rapport_animal_id">ANIMAL</label>
        <select class="form-control" id="rapport_animal_id" name="rapport_animal_id">
          <?php foreach ($animaux as $animal) : ?>
            <option value="<?= $animal['animal_id'] ?>"><?= $animal['animal_prenom'] ?> - <?= $animal['race_nom'] ?> - <?= $animal['domaine_name'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rapport_date">DATE DE PASSAGE</label>
        <input type="date" name="rapport_date" id="rapport_date" class="form-control">
      </div>
      <div class="form-group">
        <label for="rapport_etat_animal">ETAT DE L'ANIMAL</label>
        <select class="form-control" id="rapport_etat_animal" name="rapport_etat_animal">
          <?php foreach ($etats as $etat) : ?>
            <option value="<?= $etat['etat_id'] ?>"><?= $etat['etat_type'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rapport_food_type_id">TYPE DE NOURRITURE</label>
        <select class="form-control" id="rapport_food_type_id" name="rapport_food_type_id">
          <?php foreach ($foods as $food) : ?>
            <option value="<?= $food['food_id'] ?>"><?= $food['food_type'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rapport_food_unite_type_id">UNITÉ NOURRITURE</label>
        <select class="form-control" id="rapport_food_unite_type_id" name="rapport_food_unite_type_id">
          <?php foreach ($unites as $unite) : ?>
            <option value="<?= $unite['unite_id'] ?>"><?= $unite['unite_type'] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="rapport_food_quantite">QUANTITÉ DE NOURRITURE</label>
        <input type="number" name="rapport_food_quantite" id="rapport_food_quantite" class="form-control" min="0">
      </div>
      <button type="submit" class="btn btn-primary-color my-4" name="new_rapport_action" value="add">Ajouter</button>
    </form>
  </div>
</div>
<!-- Ajout d'un rapport vétérinaire | Fin -->