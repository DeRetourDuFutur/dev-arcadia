<!-- Section HERO | Début -->
<div class="container-fluid bg-dark p-0 mb-5" id="hero">
  <div class="row g-0 flex-column-reverse flex-lg-row">
    <div class="col-lg-6 p-0 wow fadeIn hero__wrapper" data-wow-delay="0.1s">
      <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
        <h1 class="text-light hero-title">
          Vivez une aventure <br> en famille à <span class="text-primary">Arcadia !</span>
        </h1>
        <div class="d-flex align-items-center pt-4 animated slideInDown">
          <a href="<?= BASE_URL . '/about' ?>" class="btn btn-primary-color py-sm-3 px-sm-3 me-5">En savoir +</a>
          <button type="button" class="btn-play" data-bs-toggle="modal" data-src="assets/vid/suricates.mp4" data-bs-target="#videoModal">
            <span></span>
          </button>
          <h6 class="text-white m-0 ms-4 d-none d-sm-block">Un petit aperçu ?</h6>
        </div>
      </div>
    </div>
    <!-- Carousel Home | Début -->
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
      <div class="owl-carousel header-carousel">
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/arcadia.jpg" alt="Zoo Arcadia" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/jungle1.jpg" alt="La Jungle - Lémuriens" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/jungle2.jpg" alt="La Jungle - Léopards" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/jungle3.jpg" alt="La Jungle - Serpents" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/savane1.jpg" alt="La Savane - Girafes" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/savane2.jpg" alt="La Savane - Lions" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/savane3.jpg" alt="La Savane - Rhinocéros" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/marais1.jpg" alt="Les Marais - Crocodiles" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/marais2.jpg" alt="Les Marais - Tigres" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/home-slider/marais3.jpg" alt="Les Marais - Hippopotames" />
        </div>
      </div>
    </div>
    <!-- Carousel Home | Fin -->
  </div>
</div>
<!-- Modales Vidéos Home | Début -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tranches de vie à Arcadia
          <i class="fas fa-paw text-primary me-3"></i>
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <!-- Carousel Vidéo | Début -->
      <div class="modal-body">
        <div class="owl-carousel-item">
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="assets/vid/girafes.mp4" allowfullscreen></iframe>
          </div>
        </div>
        <div class="owl-carousel-item">
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="assets/vid/lions.mp4" allowfullscreen></iframe>
          </div>
        </div>
        <div class="owl-carousel-item">
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="assets/vid/gorille.mp4" allowfullscreen></iframe>
          </div>
        </div>
        <div class="owl-carousel-item">
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="assets/vid/suricates.mp4" allowfullscreen></iframe>
          </div>
        </div>
        <div class="owl-carousel-item">
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="assets/vid/ours.mp4" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- Carousel Vidéo | Fin -->
    </div>
  </div>
</div>
<!-- Modales Vidéos Home | Fin -->
<!-- Section HERO | Fin -->