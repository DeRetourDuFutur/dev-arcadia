<!-- Section Témoignages | Début -->
<div class="container-xxl py-5" id="testimonials">
  <div class="container">
    <h4 class="text-center wow fadeInUp" data-wow-delay="0.1s">
      Vos avis sont précieux !
    </h4>
    <div class="text-center mb-5">
      <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#avisZoo">Laissez un avis</button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="avisZoo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Donnez votre avis</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="votrePseudo" class="form-label">Votre pseudo</label>
                <input type="text" class="form-control" id="votrePseudo" placeholder="Votre pseudo/nom ici">
              </div>
              <div class="mb-3">
                <label for="votreAvis" class="form-label">Votre avis</label>
                <textarea name="textarea" rows="8" cols="55" id="votreAvis" placeholder="Votre avis ici"></textarea>
              </div>
              <button type="submit" name="post" value="post" class="btn btn-primary-color mt-3">Envoyer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <div class="testimonial-item text-center">
        <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/livre/testimonial-1.jpg" style="width: 100px; height: 100px" />
        <div class="testimonial-text rounded text-center p-4">
          <p>
            Une expérience inoubliable ! Arcadia nous offre une atmoshpère magique, situation géographique oblige, et le temps d'une journée, nous fait voyager dans un monde extraordinaire. A faire en famille, sans modération !
          </p>
          <h5 class="mb-1">Céline D.</h5>
          <span class="fst-italic">Maman de 4 enfants</span>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/livre/testimonial-2.jpg" style="width: 100px; height: 100px" />
        <div class="testimonial-text rounded text-center p-4">
          <p>
            J'y suis allé avec mes amis pour une journée de détente et de découverte. Nous avons été agréablement surpris par la qualité des installations et la diversité des animaux. Nous avons passé un excellent moment !
          </p>
          <h5 class="mb-1">Antony M.</h5>
          <span class="fst-italic">STUDIeux</span>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/livre/testimonial-3.jpg" style="width: 100px; height: 100px" />
        <div class="testimonial-text rounded text-center p-4">
          <p>
            Je connais cet endroit depuis des années et je n'ai jamais été déçu. Les animaux sont bien traités et les installations sont toujours propres. Je recommande la visite guidée pour une expérience encore plus immersive.
          </p>
          <h5 class="mb-1">José M.</h5>
          <span class="fst-italic">Client fidèle</span>
        </div>
      </div>
      <div class="testimonial-item text-center">
        <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="<?= BASE_URL ?>/public/assets/img/livre/testimonial-4.jpg" style="width: 100px; height: 100px" />
        <div class="testimonial-text rounded text-center p-4">
          <p>
            Une journée très agréable placée sous le signe de la découverte et du partage. Ma fille a adoré et moi aussi. Nous reviendrons, c'est sûr ! Mention spéciale à la mascotte du parc, qui adore les câlins !
          </p>
          <h5 class="mb-1">Tyson N.</h5>
          <span class="fst-italic">Papa Solo</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Section Témoignages | Fin -->