<!-- Footer | Début -->
<div class="container-fluid footer bg-dark text-light wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <!-- Informations | Début -->
      <div class="col-lg-3 col-md-6 order-sm-2" id="informations">
        <h5 class="text-light mb-4">Informations pratiques</h5>
        <a class="btn-footer btn-footer-link" href="<?= BASE_URL . '/informations' ?>">Préparez votre visite</a>
        <a class="btn-footer btn-footer-link" href="<?= BASE_URL . '/services' ?>">Nos Services</a>
      </div>
      <!-- Informations | Fin -->
      <!-- Liens | Début -->
      <div class="col-lg-3 col-md-6 order-sm-3" id="liens">
        <h5 class="text-light mb-4">Liens rapides</h5>
        <a class="btn-footer btn-footer-link" href="<?= BASE_URL . '/' ?>">Accueil</a>
        <a class="btn-footer btn-footer-link" href="<?= BASE_URL . '/animaux' ?>">Nos Animaux</a>
        <a class="btn-footer btn-footer-link" href="<?= BASE_URL . '/jeux' ?>">Espace Jeux</a>
      </div>
      <!-- Liens | Fin -->
      <!-- Adresse | Début -->
      <div class="col-lg-3 col-md-6 order-sm-1" id="adresse">
        <h5 class="text-light mb-4">Adresse</h5>
        <p class="mb-2">
          <a href="https://www.google.com/maps/place/For%C3%AAt+de+Broceliande,+Val+sans+Retour/@48.004798,-2.288173,16z/data=!4m6!3m5!1s0x480fb38fd5df5933:0x23f241c31b5da661!8m2!3d48.0047975!4d-2.2881727!16s%2Fg%2F11b7hk4_j7?hl=fr&entry=ttu" target="_blank"><i class="fa fa-map-marker-alt me-3"></i></a>Arcadia
        </p>
        <p class="mb-2">
          Val-sans-retour de Brocéliande<br />
          56430 Tréhorenteuc
        </p>
        <p style="font-size: smaller">
          (3ème arbre sur la droite et tout droit jusqu'au matin)
        </p>
        <p class="mb-2">
          <i class="fa fa-phone-alt me-3"></i>+33 2 88 88 88 88
        </p>
        <p class="mb-2">
          <a href=""><i class="fa fa-envelope me-3"></a></i>contact@arcadia.com
        </p>
        <div class="d-flex pt-2">
          <a class="btn-footer btn-footer-outline-light btn-footer-social" href=""><i class="fab fa-twitter"></i></a>
          <a class="btn-footer btn-footer-outline-light btn-footer-social" href=""><i class="fab fa-facebook-f"></i></a>
          <a class="btn-footer btn-footer-outline-light btn-footer-social" href=""><i class="fab fa-youtube"></i></a>
          <a class="btn-footer btn-footer-outline-light btn-footer-social" href=""><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <!-- Adresse | Fin -->
      <!-- Newsletter | Début -->
      <div class="col-lg-3 col-md-6 order-sm-4" id="newsletter">
        <h5 class="text-light mb-4">Newsletter</h5>
        <p>Inscrivez-vous pour recevoir les actualités de votre parc Arcadia !</p>
        <div class="position-relative mx-auto" style="max-width: 400px">
          <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email" />
          <button type="button" class="btn btn-primary-color">Inscription</button>
        </div>
        <!-- Newsletter | Fin -->
        <!-- Copyright | Début -->
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; 2024 <a class="border-bottom" href="#topbar">Arcadia</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <a class="border-bottom" href="https://techno2main.fr/" target="_blank">AM | TAD</a>
            </div>
          </div>
        </div>
        <!-- Copyright | Fin -->
      </div>
    </div>
  </div>
</div>
<!-- Footer | Fin -->

<!-- Back To Top | Début -->
<a href="#" class="btn btn-lg btn-primary-color btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
<!-- Back To Top | Fin -->

<!-- Pre Loader -->
<div id="loader" class="show">
  <div class="loader"></div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/wow/wow.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/counterup/counterup.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Javascript -->
<script type="text/javascript" src="assets/js/main.js"></script>

<?php if ($_SERVER['REQUEST_URI'] == '/animaux') { ?>
  <script type="text/javascript" src="assets/js/animaux.js"></script>
<?php } ?>
</body>

</html>