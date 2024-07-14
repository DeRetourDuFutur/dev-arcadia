<?php
require_once('../app/process_avis.php');
?>

<!-- Section Témoignages | Début -->
<div class="container-xxl py-5" id="testimonials">
  <div class="container">
    <h5 class="text-center wow fadeInUp fw-light" data-wow-delay="0.1s">
      Vos avis sont <span class="fw-bold">précieux pour nous,</span> <br>partagez vos expériences
    </h5>
    <div class="text-center mb-5">
      <button type="button" class="btn btn-secondary-color" data-bs-toggle="modal" data-bs-target="#commentaires" title="N'hésitez pas à nous laisser un commentaire pour partager votre expérience à Arcadia.">Laissez un avis</button>
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
            <form method="POST" action="#commentaires">
              <div class="mb-3">
                <label for="commentaire_pseudo" class="form-label">Votre Pseudo/Prénom</label>
                <input type="text" class="form-control" id="commentaire_pseudo" name="commentaire_pseudo" placeholder="Saisissez votre pseudo/prénom ici">
              </div>
              <div class="rating">
                <label for="commentaire_note" id="commentaire_note" class="form-label">Votre note</label>
                <div class="stars">
                  <input type="radio" id="star1" name="commentaire_note" value="1" hidden>
                  <label for="star1"><i class="fa fa-star green"></i></label>
                  <input type="radio" id="star2" name="commentaire_note" value="2" hidden>
                  <label for="star2"><i class="fa fa-star"></i></label>
                  <input type="radio" id="star3" name="commentaire_note" value="3" hidden>
                  <label for="star3"><i class="fa fa-star"></i></label>
                  <input type="radio" id="star4" name="commentaire_note" value="4" hidden>
                  <label for="star4"><i class="fa fa-star"></i></label>
                  <input type="radio" id="star5" name="commentaire_note" value="5" hidden>
                  <label for="star5"><i class="fa fa-star"></i></label>
                </div>
                <!-- Javascript pour animer les étoiles dans le notes de 1 à 5 -->
                <script>
                  const stars = document.querySelectorAll('.stars input[type="radio"]');
                  const starLabels = document.querySelectorAll('.stars label');
                  stars.forEach((star, index) => {
                    star.addEventListener('change', () => {
                      starLabels.forEach((label, labelIndex) => {
                        if (labelIndex <= index) {
                          label.querySelector('i').classList.add('green');
                        } else {
                          label.querySelector('i').classList.remove('green');
                        }
                      });
                    });
                  });
                </script>
              </div>
              <div class="mb-3">
                <label for="commentaire_avis" class="form-label">Votre avis</label>
                <textarea name="commentaire_avis" rows="8" cols="55" id="commentaire_avis" placeholder="Rédigez votre avis ici"></textarea>
              </div>
              <input type="hidden" name="commentaire_date" value="<?= date('Y-m-d H:i:s') ?>">
              <button type="submit" class="btn btn-primary-color mt-3">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <?php foreach ($commentaires as $commentaire) : ?>
        <?php if ($commentaire['commentaire_statut'] == 1) : ?>
          <div class="testimonial-item text-center">
            <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/avis/ok.jpg" style="width: 100px; height: 100px" />
            <div class="testimonial-text rounded text-center p-4">
              <p><?= htmlspecialchars(date_format(date_create($commentaire['commentaire_date']), 'd/m/Y')); ?></p>
              <p><?= htmlspecialchars($commentaire['commentaire_avis']); ?></p>
              <h5 class="mb-1"><?= htmlspecialchars($commentaire['commentaire_pseudo']); ?></h5>
              <p class="mt-2"><i class="fa-solid fa-star text-secondary"></i> <?= htmlspecialchars($commentaire['commentaire_note']); ?>/5</p>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- Section Témoignages | Fin -->