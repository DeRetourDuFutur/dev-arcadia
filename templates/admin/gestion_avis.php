<?php
require_once '../app/admin/gestion_avis.php';
?>
<!-- Gestion des Avis | Début -->
<section id="avis">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION AVIS </span></h6>
      <?php foreach ($commentaires as $commentaire) : ?>
        <div class="text-center col-sm-3 mb-4 px-2">
          <div class="p-4 border border-primary h-100">
            <p class="mt-3"><?= htmlspecialchars(date_format(date_create($commentaire['commentaire_date']), 'd/m/Y')); ?></p>
            <i class="fa-solid fa-comment-dots fa-2xl" style="color: #019367;"></i>
            <p class="py-3"><?= htmlspecialchars($commentaire['commentaire_avis']); ?></p>
            <i class="fa-solid fa-user-pen fa-xl" style="color: #316f16;"></i>
            <h6 class="mt-2"><?= htmlspecialchars($commentaire['commentaire_pseudo']); ?></h6>
            <h6 class="fw-bold">Note : <span class="text-primary"><?= htmlspecialchars($commentaire['commentaire_note']); ?>/5</span></h6>
            <p class="mt-4"><?= $commentaire['commentaire_statut'] === 1 ? '<span class="text-primary">Statut actuel : validé</span>' : '<span class="text-danger">Statut en attente de validation</span>'; ?></p>
            <div class="align-text-bottom mt-2">
              <form action="" method="POST">
                <input type="hidden" name="commentaire_id" value="<?= htmlspecialchars($commentaire['commentaire_id']) ?>">
                <button type="submit" class="btn btn-primary-color align-bottom mb-2" name="commentaire_statut" value="1">Valider</button>
                <button type="submit" class="btn btn-secondary-color align-bottom mb-2" name="commentaire_statut" value="0">Masquer</button>
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Avis | Fin -->