<!-- Hero.arc Début -->
<div class="hero-arc text-center text-white">
  <div class="hero-arc-content">
        <h1 class="display-5 mb-4 text-white" >
          Bienvenue à 
          <span class="text-primary">Arcadia,</span><br>le plus grand zoo écologique en Europe
        </h1>
    <div class="d-inline-flex align-items-center justify-content-center">
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="/web-am/dev.studi/arcadia/assets/vid/suricates.mp4"
                data-bs-target="#modalVideoAnimaux"
              >
                <span></span>
              </button>
              <h6 class="text-white m-0 ms-4 d-sm-block">
                Un petit aperçu ?
              </h6>
            </div>
  </div>
</div>
<!-- Hero.arc Fin -->

<!-- Modale Vidéo Animaux Début -->
<div
  class="modal modal-video fade"
  id="modalVideoAnimaux"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          La vie est tranquille à Arcadia
          <i class="fas fa-paw text-primary me-3"></i>
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <!-- Ratio 16:9 -->
        <div class="ratio ratio-16x9">
          <iframe
            class="embed-responsive-item"
            src="/web-am/dev.studi/arcadia/assets/vid/suricates.mp4"
            id="video"
            allowfullscreen
            allowscriptaccess="always"
            allow="autoplay"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modale Vidéo Animaux Fin -->