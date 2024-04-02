<?php
include('../inc/header.php');
?>

<!-- Portfolio Animaux Début -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Les animaux d'Arcadia</h2>
          <p>
            Répartis en 3 habitats (La Savane, La Jungle & Les Marais), nos
            animaux sont au nombre de 2 760. Venez les rencontrer !
          </p>
        </div>
        <!-- Menu Sélection par filtres des animaux Début -->
        <ul class="grid portfolio-filters list-unstyled">
          <li class="grid__item">
            <a href="#" class="active" data-filter="all">Tous les animaux</a>
          </li>
          <li class="grid__item">
            <a href="#" data-filter="savane">La Savane</a>
          </li>
          <li class="grid__item">
            <a href="#" data-filter="jungle">La Jungle</a>
          </li>
          <li class="grid__item">
            <a href="#" data-filter="marais">Les Marais</a>
          </li>
        </ul>
        <!-- Menu Sélection par filtres des animaux Fin -->


         <!-- Affichage Carte Savane Début -->
        <div class="grid">
          <div class="grid__item">
            <div class="card" data-category="savane">
              <img
                src="/web-am/dev.studi/arcadia/assets/img/animals/savane/arc-an-savane-cover.jpg"
                loading="lazy"
                width="100%"
                height="243"
                alt="La Savane"
                class="card__image"
              />
              <div class="card__inner">
                <h3 class="card__title">La Savane</h3>
                <p class="category">Voir les animaux</p>
              </div>
              <div class="card__overlay">
                <a href="#" class="card__link" data-id="modal-savane">+</a>
              </div>
            </div>
            <!-- Affichage Carte Savane Fin -->

            <!-- Affichage Modale Savane Début -->
            <div class="modal" id="modal-savane">
              <button class="modal__close">&times;</button>

              <div class="modal__content">
                <div class="container">
                  <div class="grid">Savane - Photos ici</div>
                </div>
              </div>
            </div>
          </div>
          <!-- Affichage Modale Savane Fin -->

          <!-- Affichage Carte Jungle Début -->
          <div class="grid__item">
            <div class="card" data-category="jungle">
              <img
                src="/web-am/dev.studi/arcadia/assets/img/animals/jungle/arc-an-jungle-cover.jpg"
                loading="lazy"
                width="100%"
                height="243"
                alt="La Jungle"
                class="card__image"
              />
              <div class="card__inner">
                <h3 class="card__title">La Jungle</h3>
                <p class="category">Voir les animaux</p>
              </div>
              <div class="card__overlay">
                <a href="#" class="card__link" data-id="modal-jungle">+</a>
              </div>
            </div>
            <!-- Affichage Carte Jungle Fin -->

            <!-- Affichage Modale Jungle Début -->
            <div class="modal" id="modal-jungle">
              <button class="modal__close">&times;</button>

              <div class="modal__content">
                <div class="container">
                  <div class="grid">Jungle - Photos ici</div>
                </div>
              </div>
            </div>
          </div>
          <!-- Affichage Modale Jungle Fin -->

          <!-- Affichage Carte Marais Début -->
          <div class="grid__item">
            <div class="card" data-category="marais">
              <img
                src="/web-am/dev.studi/arcadia/assets/img/animals/marais/arc-an-marais-cover.jpg"
                loading="lazy"
                width="100%"
                height="243"
                alt="Les Marais"
                class="card__image"
              />
              <div class="card__inner">
                <h3 class="card__title">Les Marais</h3>
                <p class="category">Voir les animaux</p>
              </div>
              <div class="card__overlay">
                <a href="#" class="card__link" data-id="modal-marais">+</a>
              </div>
            </div>
            <!-- Affichage Carte Marais Fin -->

            <!-- Affichage Modale Marais Début -->
            <div class="modal" id="modal-marais">
              <button class="modal__close">&times;</button>

              <div class="modal__content">
                <div class="container">
                  <div class="grid">Marais - Photos ici</div>
                </div>
              </div>
            </div>
          </div>
          <!-- Affichage Modale Marais Fin -->
        </div>
      </div>
    </section>
    <!-- Portfolio Animaux Fin -->
<?php
include('../inc/footer.php');
?>