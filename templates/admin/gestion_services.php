<?php
require_once '../app/admin/gestion_services.php';
?>
<!-- Gestion des Services | Début -->
<section id="gestion_services">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION SERVICES </span></h6>
      <?php foreach ($services as $service) : ?>
        <div class="col-lg-3 mb-4">
          <div class="border border-primary ">
            <form action="" method="POST" class="container" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $service['id'] ?>">
              <label for="nom" class="mt-4 mb-2 fw-bold">TITRE DU SERVICE</label> <br>
              <input type="text" name="nom" value="<?= htmlspecialchars($service['nom']); ?>"> <br>
              <img src="<?= $service['visuel']; ?>" alt="<?= $service['nom']; ?>" class="img-fluid mt-4" style="max-width: 100px;"> <br>
              <label for="visuel" class="mt-4 mb-2 fw-bold">Modifier l'image</label> <br>
              <input id="visuel" type="file" name="visuel" accept="image/*">
              <div class="justify-content-center">
                <label for="contenu" class="mt-4 mb-2 fw-bold">DESCRIPTION DU SERVICE</label>
                <textarea name="contenu" class="form-control" cols="70" rows="4" wrap="hard"><?= htmlspecialchars($service['contenu']); ?></textarea>
              </div>
              <div class="text-center">
                <label for="statut" class="mt-4 mb-2 fw-bold">STATUT ACTUEL : <?= $service['statut'] === 1 ? '<span class="text-primary">AFFICH&Eacute;</span>' : '<span class="text-secondary">MASQU&Eacute;</span>'; ?></label><br>
                <label for="statut1">Afficher</label>
                <input id="statut1" type="radio" name="statut" value="1" <?= $service['statut'] === 1 ? 'checked' : ''; ?>>
                <label for="statut2">Masquer</label>
                <input id="statut2" type="radio" name="statut" value="0" <?= $service['statut'] === 0 ? 'checked' : ''; ?>>
              </div>
              <div class="d-flex justify-content-evenly pt-3">
                <button type="submit" class="btn btn-primary-color my-4" name="action" value="update">Mettre à jour</button>
              </div>
            </form>
          </div>
          <br>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Services | Fin -->