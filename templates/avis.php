<?php
require_once('../app/process_avis.php');
?>

<!-- Section Témoignages | Début -->
<div class="container-xxl py-5" id="testimonials">
  <div class="container">
    <h5 class="text-center wow fadeInUp" data-wow-delay="0.1s">
      Vos avis sont précieux !
    </h5>
    <div class="text-center mb-5">
      <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#commentaires">Laissez un avis</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="commentaires" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Donnez votre avis</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="#testimonials">
              <div class="mb-3">
                <label for="pseudo" class="form-label">Votre Pseudo/Prénom</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Saisissez votre pseudo/prénom ici">
              </div>
              <div class="mb-3">
                <div class="rating">
                  <label for="note" class="form-label">Votre note</label>
                  <div class="stars">
                    <i class="fa fa-star green" name="note" value="1"></i>
                    <i class="fa fa-star" name="note" value="2"></i>
                    <i class="fa fa-star" name="note" value="3"></i>
                    <i class="fa fa-star" name="note" value="4"></i>
                    <i class="fa fa-star" name="note" value="5"></i>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="commentaire" class="form-label">Votre avis</label>
                <textarea name="commentaire" rows="8" cols="55" id="commentaire" placeholder="Rédigez votre avis ici"></textarea>
              </div>
              <input type="hidden" name="date_com" value="<?= date('Y-m-d H:i:s') ?>">
              <button type="submit" class="btn btn-primary-color mt-3">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <?php foreach ($commentaires as $commentaire) : ?>
        <div class="testimonial-item text-center">
          <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/avis/ok.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p><?= htmlspecialchars(date_format(date_create($commentaire['date_com']), 'd/m/Y')); ?></p>
            <p><?= htmlspecialchars($commentaire['commentaire']); ?></p>
            <h5 class="mb-1"><?= htmlspecialchars($commentaire['pseudo']); ?></h5>
            <h6 class="fw-bold"><?= htmlspecialchars($commentaire['note']); ?>/5</h6>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Section Témoignages | Fin -->