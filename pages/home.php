<!-- sectionHome.début -->
<div class="container-fluid bg-dark p-0 mb-5" id="home">
  <div class="row g-0 flex-column-reverse flex-lg-row">
    <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
        <h1 class="display-4 text-light mb-5">
          Vivez l'Aventure en famille à Arcadia !
        </h1>
        <div class="d-flex align-items-center pt-4 animated slideInDown">
          <a href="#about" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">En savoir +</a>
          <button
          type="button"
          class="btn-play"
          data-bs-toggle="modal"
          data-src="assets/vid/suricates.mp4"
          data-bs-target="#videoModal">
          <span></span>
          </button>
          <h6 class="text-white m-0 ms-4 d-none d-sm-block">Présentation</h6>
        </div>
      </div>
    </div>
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
      <div class="owl-carousel header-carousel">
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/carousel-1.jpg" alt="" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/carousel-2.jpg" alt="" />
        </div>
        <div class="owl-carousel-item">
          <img class="img-fluid" src="assets/img/carousel-3.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sectionHome.fin -->

<!-- sectionModaleVidéo.début -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">La belle vie à Arcadia
          <i class="fas fa-paw text-primary me-3"></i></h3>
        <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <!-- 16:9 aspect ratio -->
        <div class="ratio ratio-16x9">
          <iframe
          class="embed-responsive-item"
          src=""
          id="video"
          allowfullscreen
          allowscriptaccess="always"
          allow="autoplay">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- sectionModaleVidéo.fin -->