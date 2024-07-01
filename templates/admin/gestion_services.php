<?php
require_once '../app/admin/admin_services.php';
require_once '../templates/admin/nav_admin.php';

?>

<div class="fadeInUp" data-wow-delay="0.1s">
  <?php foreach ($services as $service) : ?>
    <div class="testimonial-item text-center">
      <div class="testimonial-text rounded text-center p-4">
        <form action="" method="POST" class="container" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $service['id'] ?>">
          <label for="nom" class="mt-4 mb-2 fw-bold">TITRE DU SERVICE</label> <br>
          <input type="text" name="nom" value="<?= htmlspecialchars($service['nom']); ?>"> <br>
          <img src="<?= $service['visuel']; ?>" alt="<?= $service['nom']; ?>" class="img-fluid mt-4" style="max-width: 100px;"> <br>
          <label for="visuel" class="mt-4 mb-2 fw-bold">Modifier l'image</label> <br>
          <input id="visuel" type="file" name="visuel" accept="image/*">
          <div class="justify-content-center">
            <label for="contenu" class="mt-4 mb-2 fw-bold">DESCRIPTION DU SERVICE</label>
            <textarea name="contenu" class="form-control" cols="70" wrap="hard"><?= htmlspecialchars($service['contenu']); ?></textarea>
          </div>
          <div class="text-center">
            <label for="statut" class="mt-4 mb-2 fw-bold">AFFICHAGE EN LIGNE (<?= $service['statut'] === 1 ? 'Statut actuel : en ligne ' : 'masqué'; ?>)</label><br>
            <label for="statutOK">Oui</label>
            <input id="statutOK" type="radio" name="statut" value="1" <?= $service['statut'] === 1 ? 'checked' : ''; ?>>
            <label for="statutNO">Non</label>
            <input id="statutNO" type="radio" name="statut" value="0" <?= $service['statut'] === 0 ? 'checked' : ''; ?>>
          </div>
          <button type="submit" class="btn btn-primary-color mt-4" name="action" value="update">Mettre à jour</button>
        </form>
        <!-- <form action="" method="post" enctype="multipart/form-data">
          <label for="file">fichier</label>
          <input type="file" id="file" name="file" id="">
          <input type="submit" value="envoyer">
        </form> -->
        <div class="mt-5"><i class="fa-solid fa-paw fa-xl text-secondary"></i></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>