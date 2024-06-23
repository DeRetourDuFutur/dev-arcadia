<?php
require_once('process_avis.php');
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
                <label for="note" class="form-label">Votre évaluation</label>
                <select class="form-control" id="note" name="note">
                  <option value="">Choisissez une note de 1 à 10</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="commentaire" class="form-label">Votre avis</label>
                <textarea name="commentaire" rows="8" cols="55" id="commentaire" placeholder="Rédigez votre avis ici"></textarea>
              </div>
              <button type="submit" class="btn btn-primary-color mt-3">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <?php foreach ($commentaires as $commentaire) : ?>
        <?php if ($commentaire['statut'] == 1) : ?>
          <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/avis/ok.jpg" style="width: 100px; height: 100px" />
            <div class="testimonial-text rounded text-center p-4">
              <p><?= htmlspecialchars($commentaire['commentaire']); ?></p>
              <h5 class="mb-1"><?= htmlspecialchars($commentaire['pseudo']); ?></h5>
              <h6 class="fw-bold"><?= htmlspecialchars($commentaire['note']); ?>/10</h6>
            </div>
          </div>
        <?php endif;  ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Section Témoignages | Fin -->