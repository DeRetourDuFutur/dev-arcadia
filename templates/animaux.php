<?php
require_once '../app/read_animaux.php';
?>
<!-- Slider Domaines ANIMAUX | Début -->
<div class="mt-5">
  <div class="container-sm">
    <p>
      <span class="text-primary me-2">#</span>Nos animaux
    </p>
    <h2>Explorez nos <span class="text-primary">3 domaines</span></h2>
  </div>
  <div class="slider-animals">
    <!-- Boutons NEXT / PREV  | Début-->
    <div class="arrows-slider-animals">
      <button id="prev" class="btn-prev"><i class="fa-solid fa-hippo fa-flip-horizontal prev-hippo"></i></button>
      <button id="next" class="btn-next"><i class="fa-solid fa-hippo next-hippo"></i></button>
    </div>
    <!-- Boutons NEXT / PREV  | Fin-->

    <!-- Liste Items | Début -->
    <div class="list-slider-animals">
      <!-- Slider Savane | Début -->
      <div class="item-slider-animals">
        <img src="<?= BASE_URL ?>/public/assets/img/domaines/d1-cover-slider.webp" alt="La Savane" />
        <div class="content-slider-animals">
          <div class="author-slider-animals">ARCADIA</div>
          <div class="topic-slider-animals">SAVANE</div>
          <div class="des-slider-animals">
            Découvrez les animaux de la Savane
          </div>
          <div class="btn btn-primary-color mt-3">
            <a href="#savane" data-domaine="savane" class="text-white">EXPLORER</a>
          </div>
        </div>
      </div>
      <!-- Slider Savane | Fin -->

      <!-- Slider Jungle | Début -->
      <div class="item-slider-animals">
        <img src="<?= BASE_URL ?>/public/assets/img/domaines/d2-cover-slider.webp" alt="La Jungle" />
        <div class="content-slider-animals">
          <div class="author-slider-animals">ARCADIA</div>
          <div class="topic-slider-animals">JUNGLE</div>
          <div class="des-slider-animals">
            Découvrez les animaux de la Jungle
          </div>
          <div class="btn btn-primary-color mt-3">
            <a href="#jungle" data-domaine="jungle" class="text-white">EXPLORER</a>
          </div>
        </div>
      </div>
      <!-- Slider Jungle | Fin -->

      <!-- Slider Marais | Début -->
      <div class="item-slider-animals">
        <img src="<?= BASE_URL ?>/public/assets/img/domaines/d3-cover-slider.webp" alt="Les Marais" />
        <div class="content-slider-animals">
          <div class="author-slider-animals">ARCADIA</div>
          <div class="topic-slider-animals">MARAIS</div>
          <div class="des-slider-animals">
            Découvrez les animaux des Marais
          </div>
          <div class="btn btn-primary-color mt-3">
            <a href="#marais" data-domaine="marais" class="text-white">EXPLORER</a>
          </div>
        </div>
      </div>
      <!-- Slider Marais | Fin -->

    </div>
    <!-- Liste Items | Fin -->

    <!-- Liste Thumbnail | Début -->
    <div class="thumbnail-slider-animals">
      <a href="#savane" data-domaine="savane" class="item-slider-animals">
        <img src="<?= BASE_URL ?>/public/assets/img/domaines/d1-cover-card.webp" alt="La Savane" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Savane</div>
        </div>
      </a>
      <a href="#jungle" data-domaine="jungle" class="item-slider-animals">
        <img src="<?= BASE_URL ?>/public/assets/img/domaines/d2-cover-card.webp" alt="La Jungle" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Jungle</div>
        </div>
      </a>
      <a href="#marais" data-domaine="marais" class="item-slider-animals">
        <img src="<?= BASE_URL ?>/public/assets/img/domaines/d3-cover-card.webp" alt="Les Marais" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Marais</div>
        </div>
      </a>
    </div>
    <!-- Liste Thumbnail | Fin -->

  </div>
</div>
<!-- Slider Domaines ANIMAUX | Fin -->

<!-- Time Running -->
<div class="time-slider-animals"></div>

<!-- Section ANIMAUX | Début -->
<div class="container">
  <?php $firstHabitat = $habitats[array_key_first($habitats)]; ?>
  <!-- Section DOMAINE | Début -->
  <?php foreach ($habitats as $habitat) : ?>
    <?php $races = $habitat['races'] ?>
    <section id="<?= strtolower($habitat['domaine']) ?>" class="section-domaines <?php if ($firstHabitat !== $habitat) : ?> d-none <?php endif; ?>">
      <div class="container-sm">
        <p class="pt-4">
          <span class="text-primary me-2"># <?= htmlspecialchars($habitat['domaine']) ?></span>
        </p>
      </div>
      <div class="row mb-3">
        <?php foreach ($races as $raceId => $race) : ?>
          <?php $animaux = $race['animaux']; ?>
          <div id="carousel<?= $race['race_id'] ?>" class="carousel slide col-lg-4 col-sm-6 column col-12">
            <div class="carousel-inner py-3">
              <!-- <div class="row mb-3"> -->
              <?php foreach ($animaux as $animal) : ?>
                <?php $firstKey = array_key_first($animaux); ?>
                <div class="carousel-item border-fiche-animal <?php if ($animaux[$firstKey] === $animal) : ?> active <?php endif ?>" data-bs-interval="10000">
                  <img src="<?= BASE_URL . $animal['animal_visuel'] ?>" class="d-block w-100 img-fiche-animal" alt="<?= $animal['animal_prenom'] ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $animal['animal_prenom'] ?></h5>
                    <p class="card-text">
                      <?= ucfirst($animal['race_nom']) ?> [<?= htmlspecialchars($habitat['domaine']) ?>]
                    </p>
                    <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#modale<?= $animal['animal_id'] ?>">
                      Détails
                    </button>
                    <!-- Modale Fiche Animal  | Début -->
                    <div class="modal fade" id="modale<?= $animal['animal_id'] ?>" tabindex="-1" aria-labelledby="<?= $animal['animal_id'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title fs-5" id="<?= $animal['race_nom'] ?>"><?= $animal['animal_prenom'] ?></h5>
                          </div>
                          <div class="modal-body">
                            <img src="<?= BASE_URL . $animal['animal_visuel'] ?>" class="d-block w-100 " alt="<?= $animal['animal_prenom'] ?>">
                            <p class="card-text mt-2">
                              <br>
                              Âge : <?= $animal['animal_age'] ?> <br>
                              Poids : <?= $animal['animal_poids'] ?> <br>
                              Santé : <?= $animal['animal_sante'] ?> <br>
                              Race : <?= $animal['race_nom'] ?>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Modale Fiche Animal | Fin -->
                  </div>
                </div>
              <?php endforeach; ?>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $race['race_id'] ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $race['race_id'] ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
              </button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>
</div>
<!-- Section ANIMAUX | Fin -->