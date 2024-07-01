<?php
require_once '../app/admin/admin_avis.php';
require_once '../templates/admin/nav_admin.php';
?>
<div class="fadeInUp" data-wow-delay="0.1s">
  <?php foreach ($commentaires as $commentaire) : ?>
    <div class="testimonial-item text-center">
      <div class="testimonial-text rounded text-center p-4">
        <p><?= htmlspecialchars(date_format(date_create($commentaire['date_com']), 'd/m/Y')); ?></p>
        <p><?= htmlspecialchars($commentaire['commentaire']); ?></p>
        <h5 class="mb-1"><?= htmlspecialchars($commentaire['pseudo']); ?></h5>
        <h6 class="fw-bold"><?= htmlspecialchars($commentaire['note']); ?>/5</h6>
        <p><?= $commentaire['statut'] === 1 ? 'Statut actuel : validé ' : 'Statut en attente de validation'; ?></p>
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $commentaire['id'] ?>">
          <button type="submit" class="btn btn-danger" name="statut" value="0">Masquer</button>
          <button type="submit" class="btn btn-success" name="statut" value="1">Valider</button>
        </form>
      </div>
    </div>
  <?php endforeach; ?>
</div>