<!-- Footer | Début -->
<div class="container-fluid footer bg-dark text-light wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <!-- Informations | Début -->
      <div class="col-lg-3 col-md-6 order-sm-2" id="informations">
        <h5 class="text-light mb-4">Informations pratiques</h5>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/informations') ?>" title="Retrouvez ici toutes les informations utiles pour préparer votre prochaine visite à Arcadia">Préparez votre visite</a>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/services') ?>" title="Découvrir tous les services que nous vous proposons à Arcadia">Nos Services</a>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/avis') ?>" title="N'hésitez pas à nous laisser un commentaire pour partager votre expérience à Arcadia.">Vos Avis</a>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/contact') ?>" title="Vous pouvez nous contacter via ce formulaire pour nous faire part de vos suggestions et remarques">Contactez-nous</a>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/label') ?>" title="Nous vous expliquons tout sur notre engagement écologique">Eco Label 2024</a>
      </div>
      <!-- Informations | Fin -->
      <!-- Liens | Début -->
      <div class="col-lg-3 col-md-6 order-sm-3" id="liens">
        <h5 class="text-light mb-4">Liens rapides</h5>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/') ?>" title="Retourner sur l'accueil du site Arcadia">Accueil</a>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/animaux') ?>" title="Découvrir tous les animaux d'Arcadia à travers nos 3 domaines (Savane, Jungle et Marais)">Nos Animaux</a>
        <a class="btn-footer btn-footer-link" href="<?= htmlspecialchars(BASE_URL . '/jeux') ?>" title="Nous vous avons concocté un petit jeu de mémoire, avec quelques animaux de notre parc : à vous de jouer !">Espace Jeux</a>
      </div>
      <!-- Liens | Fin -->
      <!-- Adresse | Début -->
      <div class="col-lg-3 col-md-6 order-sm-1" id="adresse">
        <h5 class="text-light mb-4">Adresse</h5>
        <p class="mb-2">
          <a href="https://www.google.com/maps/place/For%C3%AAt+de+Broceliande,+Val+sans+Retour/@48.004798,-2.288173,16z/data=!4m6!3m5!1s0x480fb38fd5df5933:0x23f241c31b5da661!8m2!3d48.0047975!4d-2.2881727!16s%2Fg%2F11b7hk4_j7?hl=fr&entry=ttu" target="_blank"><i class="fa fa-map-marker-alt me-3" title="Ouvrez la carte Google Maps pour mieux situer notre parc"></i></a>Arcadia
        </p>
        <p class="mb-2">
          Val-sans-retour de Brocéliande<br />
          56430 Tréhorenteuc
        </p>
        <p style="font-size: smaller">
          (3ème arbre sur la droite et tout droit jusqu'au matin)
        </p>
        <p class="mb-2">
          <i class="fa fa-phone-alt me-3" title="Nous sommes joignables tous les jours de 10h00 à 18h00"></i>+33 2 88 88 88 88
        </p>
        <p class="mb-2">
          <i class="fa fa-envelope me-3" title="Vous pouvez nous contacter sur cette adresse pour nous faire part de vos suggestions et remarques"></i>contact@arcadia.com
        </p>
        <div class="d-flex pt-2">
          <a class="btn-footer btn-footer-outline-light btn-footer-social" href="" title="Retrouvez ici prrochainement notre page Facebook Arcadia"><i class="fab fa-facebook-f"></i></a>
          <a class="btn-footer btn-footer-outline-light btn-footer-social" href="" title="Retrouvez ici prrochainement notre page Youtube Arcadia""><i class=" fab fa-youtube"></i></a>
        </div>
      </div>
      <!-- Adresse | Fin -->
      <!-- Newsletter | Début -->
      <div class="col-lg-3 col-md-6 order-sm-4" id="newsletter">
        <h5 class="text-light mb-4">Newsletter</h5>
        <p>Inscrivez-vous pour recevoir les actualités de votre parc Arcadia !</p>
        <form>
          <input type="email" name="email" id="emailInput" class="form-control">
          <input type="text" placeholder="Votre email" id="emailPlaceholder" autocomplete="off">
          <button type="button" class="btn btn-primary-color">Inscription</button>
          <input type="hidden" value="<?= $_SESSION['csrf_token'] ?>">
        </form>
        <!-- Copyright | Début -->
        <div class="copyright mt-5">
          <div class="col-12">
            Arcadia &copy; 2024 - <a class="border-bottom" href="https://techno2main.fr/" target="_blank">AM | TAD</a>
          </div>
          <div class="col-md-6 text-center text-md-end">

          </div>
        </div>
        <!-- Copyright | Fin -->
      </div>
      <!-- Newsletter | Fin -->
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
<script src="<?= htmlspecialchars(BASE_URL) ?>/lib/wow/wow.min.js"></script>
<script src="<?= htmlspecialchars(BASE_URL) ?>/lib/counterup/counterup.min.js"></script>
<script src="<?= htmlspecialchars(BASE_URL) ?>/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= htmlspecialchars(BASE_URL) ?>/lib/waypoints/waypoints.min.js"></script>
<!-- Template Javascript -->
<script type="text/javascript" src="<?= htmlspecialchars(BASE_URL) ?>/public/assets/js/main.js"></script>
<!-- Charger le JS concerné seulement si la page php relative est affichée -->
<?php if ($_SERVER['REQUEST_URI'] == htmlspecialchars(BASE_URL . '/animaux')) { ?>
  <script type="text/javascript" src="<?= htmlspecialchars(BASE_URL) ?>/public/assets/js/animaux.js"></script>
<?php } ?>
<?php if ($_SERVER['REQUEST_URI'] == htmlspecialchars(BASE_URL . '/jeux')) { ?>
  <script type="text/javascript" src="<?= htmlspecialchars(BASE_URL) ?>/public/assets/js/memoryGame.js"></script>
<?php } ?>
<?php if ($_SERVER['REQUEST_URI'] == htmlspecialchars(BASE_URL . '/new-user')) { ?>
  <script type="text/javascript" src="<?= htmlspecialchars(BASE_URL) ?>/public/assets/js/checkFormNewUser.js"></script>
<?php } ?>
<?php if ($_SERVER['REQUEST_URI'] == htmlspecialchars(BASE_URL . '/contact')) { ?>
  <script type="text/javascript" src="<?= htmlspecialchars(BASE_URL) ?>/public/assets/js/checkFormContact.js"></script>
<?php } ?>
</body>

</html>