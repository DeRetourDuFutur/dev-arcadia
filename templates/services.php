<?php
require_once('../app/process_services.php');
?>

<!-- Services | Début -->
<div class="container-xxl py-5" id="services">
  <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="col">
        <p><span class="text-primary me-2">#</span>Nos services</p>
        <h3>Services proposés aux <span class="text-primary">Arcadien(ne)s</span></h3>
      </div>
    </div>
    <div class="row gy-5 gx-4 portfolio-container">
      <?php foreach ($services as $service) : ?>
        <!-- Si aside est NO et statut est !== 0, alors afficher les services -->
        <?php if ($service['service_aside'] === 'no' && $service['service_statut'] === 1) : ?>
          <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
            <a class="animal-item" href="<?= BASE_URL ?><?= ($service['service_visuel']); ?>" data-lightbox="animal"><img class="img-fluid mb-3 img-services" src="<?= BASE_URL ?><?= ($service['service_visuel']); ?>" alt="<?= ($service['service_nom']); ?>" /></a>
            <h6 class="mb-3"><?= ($service['service_nom']); ?></h6>
            <span><?= ($service['service_contenu']); ?></span>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
      <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
        <aside class="ms-lg-5 ">
          <div class="text-center mb-3">
            <img src="public/assets/img/services/pic-arcadia.png" class="w-25" alt="Tous les autres services d'Arcadia" title="Tous les autres services d'Arcadia">
          </div>
          <div class="text-center mt-4">
            <i class="fa-solid fa-paw fa-xl text-secondary mb-4"></i>
          </div>
          <h6 class="text-center wow fadeInUp fw-light" data-wow-delay="0.1s">Les autres services d'Arcadia</h6>
          <div id="other_services_slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php foreach ($services as $key => $service) : ?>
                <!-- Si est YES et statut est !== 0, alors afficher les autres services -->
                <?php if ($service['service_aside'] === 'yes' && $service['service_statut'] === 1) : ?>
                  <div class="carousel-item <?= ($key == 0) ? "active" : ""; ?>">
                    <img src="<?= BASE_URL ?><?= ($service['service_visuel']); ?>" class="w-100 img-services" alt="<?= ($service['service_nom']); ?>">
                    <div class="other-services">
                      <p><?= ($service['service_nom']); ?></p>
                    </div>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
              <button class="carousel-control-prev" type="button" data-bs-target="#other_services_slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#other_services_slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
              </button>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
<!-- Services | Fin -->