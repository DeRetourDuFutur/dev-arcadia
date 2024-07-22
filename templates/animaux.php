<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/read_animaux.php';
?>
<!-- PAGE ANIMAUX | DÉBUT -->
<div class="mt-5">
  <div class="container-sm">
    <span class="text-primary me-2">#</span>Nos Animaux
    <h3>Explorez nos <span class="text-primary">3 domaines naturels</span></h3>
  </div>
  <!-- SLIDER DOMAINES | DÉBUT -->
  <div id="carouselDomaines" class="carousel slide carouselDomaines" data-bs-ride="carousel">
    <div class="carouselDomaines carousel-inner">
      <?php foreach ($habitats as $habitat) : ?>
        <?php $firstKey = array_key_first($habitats); ?>
        <div class="carouselDomaines carousel-item <?php if ($habitats[$firstKey] === $habitat) : ?> active <?php endif ?>">
          <img src="<?= htmlspecialchars(BASE_URL . $habitat['cover']) ?>" alt="<?= htmlspecialchars($habitat['domaine']) ?>" />
          <div class="carouselDomaines carousel-caption">
            <h1 class="text-secondary">ARCADIA</h1>
            <h2 class="text-primary"><?= strtoupper(htmlspecialchars($habitat['domaine'])) ?></h2>
            <div class="btn btn-primary-color mt-3">
              <a href="#<?= strtolower(htmlspecialchars($habitat['domaine'])) ?>" data-domaine="<?= strtolower(htmlspecialchars($habitat['domaine'])) ?>" class="text-white">EXPLORER</a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDomaines" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselDomaines" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- SLIDER DOMAINES | FIN -->
<!-- LISTE THUMBNAILS | DÉBUT -->
<div class="thumbnails-carouselDomaines">
  <?php foreach ($habitats as $habitat) : ?>
    <a href="#<?= strtolower(htmlspecialchars($habitat['domaine'])) ?>" data-domaine="<?= strtolower(htmlspecialchars($habitat['domaine'])) ?>" class="item-carouselDomaines">
      <img src="<?= htmlspecialchars(BASE_URL . $habitat['thumbnail']) ?>" alt="<?= htmlspecialchars($habitat['domaine']) ?>" />
      <div class="content-carouselDomaines">
        <div class="title-carouselDomaines"><?= strtoupper(htmlspecialchars($habitat['domaine'])) ?></div>
      </div>
    </a>
  <?php endforeach ?>
</div>
<!-- LISTE THUMBNAILS | FIN -->
<!-- SECTION ANIMAUX | DÉBUT -->
<div class="container">
  <?php $firstHabitat = !empty($habitats) ? $habitats[array_key_first($habitats)] : null ?>
  <!-- SECTION DOMAINE | DÉBUT -->
  <?php foreach ($habitats as $habitat) : ?>
    <?php $races = $habitat['races'] ?>
    <section id="<?= strtolower(htmlspecialchars($habitat['domaine'])) ?>" class="section-domaines">
      <div class="container-sm pt-4">
        <span class="text-primary me-2"># <?= htmlspecialchars($habitat['domaine']) ?></span>
      </div>
      <div class="row mb-3">
        <?php foreach ($races as $raceId => $race) : ?>
          <?php $animaux = $race['animaux'] ?>
          <div id="carousel<?= $race['race_id'] ?>" class="carousel slide col-lg-4 col-sm-6 column col-12" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carousel<?= $race['race_id'] ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"></button>
              <button type="button" data-bs-target="#carousel<?= $race['race_id'] ?>" data-bs-slide-to="1" aria-label="slide 2"></button>
            </div>
            <div class="carousel-inner py-3">
              <?php foreach ($animaux as $animal) : ?>
                <?php $firstKey = array_key_first($animaux) ?>
                <div class="carousel-item border-fiche-animal <?php if ($animaux[$firstKey] === $animal) : ?> active <?php endif ?>" data-bs-interval="7000" id="#carousel<?= $race['race_id'] ?>">
                  <img src="<?= htmlspecialchars(BASE_URL . $animal['animal_visuel']) ?>" class="d-block w-100 img-fiche-animal" alt="<?= htmlspecialchars($animal['animal_prenom']) ?>">
                  <div class="card-body">
                    <div class="text-center">
                      <h5 class="card-title"><?= htmlspecialchars($animal['animal_prenom']) ?></h5>
                      <p class="card-text">
                        <?= ucfirst(htmlspecialchars($animal['race_nom'])) ?><i class="fa-solid fa-location-crosshairs fa-lg text-secondary mx-2"></i><?= ucfirst(strtolower(htmlspecialchars($habitat['domaine']))) ?><br><br>
                        <button type="button" class="btn btn-primary-color me-3" data-bs-toggle="modal" data-bs-target="#modale<?= $animal['animal_id'] ?>">
                          Sa fiche
                        </button>
                        <button type="button" class="btn btn-secondary-color" data-bs-toggle="modal" data-bs-target="#modale_histoire<?= $animal['animal_id'] ?>">
                          Son histoire
                        </button>
                      </p>
                    </div>
                    <!-- MODALE FICHE ANIMAL | DÉBUT -->
                    <div class="modal fade" id="modale<?= $animal['animal_id'] ?>" tabindex="-1" aria-labelledby="<?= $animal['animal_id'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- EN-TÊTE FICHE ANIMAL | DÉBUT -->
                          <div class="modal-header">
                            <!-- RACE -->
                            <span id="<?= $animal['race_nom'] ?>">
                              <i class="fa-solid fa-paw fa-rotate-270 fa-lg text-primary me-2"></i>
                              <?= mb_strtoupper(htmlspecialchars($animal['race_nom']), 'UTF-8') ?>
                            </span>
                            <span class="fw-bold">
                              <!-- PRÉNOM -->
                              <i class="fa-regular fa-comments fa-lg me-2 text-primary"></i>
                              <?= strtoupper(htmlspecialchars($animal['animal_prenom'])) ?>
                            </span>
                            <span>
                              <!-- SANTÉ -->
                              <i class="fa-solid fa-notes-medical fa-lg <?= ($animal['etat_type'] === 'Maladie' || $animal['etat_type'] === 'Isolement') ? 'text-secondary' : 'text-primary' ?> me-2"></i>
                              <?= strtoupper(htmlspecialchars($animal['etat_type'])) ?>
                            </span>
                          </div>
                          <!-- EN-TÊTE FICHE ANIMAL | FIN -->
                          <!-- CONTENU FICHE ANIMAL | DÉBUT -->
                          <div class=" modal-body">
                            <img src=" <?= htmlspecialchars(BASE_URL . $animal['animal_visuel']) ?>" class="d-block w-100 " alt="<?= htmlspecialchars($animal['animal_prenom']) ?>">
                            <div class="card-text mt-2">
                              <p>
                                <!-- ÂGE -->
                                <i class="fa-solid fa-circle-info fa-lg text-primary me-4 pb-3 pt-4"></i><span class="fw-bold">Âge :</span> <?= htmlspecialchars($animal['animal_age']) ?>
                                <!-- POIDS -->
                                <i class=" fa-solid fa-circle fa-2xs text-secondary mx-2"></i><span class="fw-bold">Poids :</span> <?= htmlspecialchars($animal['animal_poids']) ?> <br>
                                <!-- TYPE NOURRITURE -->
                                <i class="fa-solid fa-bowl-rice fa-lg text-primary me-4 pb-3"></i><span class="fw-bold">Nourriture :</span> <?= htmlspecialchars($animal['food_type']) ?>
                                <!-- QUANTITÉ & UNITÉ NOURRITURE -->
                                <i class="fa-solid fa-circle fa-2xs text-secondary mx-2"></i><span class="fw-bold">Quantité :</span> <?= htmlspecialchars($animal['animal_food_quantite']) ?> <?= htmlspecialchars($animal['unite_type']) ?> <br>
                                <!-- DATE RAPPORT -->
                                <i class="fa-solid fa-clipboard-check fa-lg text-primary me-4 ms-1 py-2"></i><span class="fw-bold">Contrôle du vétérinaire :</span> <?= htmlspecialchars(date('d-m-Y', strtotime($animal['rapport_date']))) ?> <br>
                              </p>
                            </div>
                          </div>
                          <!-- CONTENU FICHE ANIMAL | FIN -->
                          <!-- FOOTER FICHE ANIMAL | DÉBUT -->
                          <div class=" modal-footer">
                            <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                          </div>
                          <!-- FOOTER FICHE ANIMAL | FIN -->
                        </div>
                      </div>
                    </div>
                    <!-- MODALE FICHE ANIMAL | FIN -->
                    <!-- MODALE HISTOIRE ANIMAL | DÉBUT -->
                    <div class="modal fade" id="modale_histoire<?= $animal['animal_id'] ?>" tabindex="-1" aria-labelledby="<?= $animal['animal_id'] ?>" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- EN-TÊTE HISTOIRE ANIMAL | DÉBUT -->
                          <div class="modal-header">
                            <!-- RACE -->
                            <span id="<?= $animal['race_nom'] ?>">
                              <i class="fa-solid fa-paw fa-rotate-270 fa-lg text-primary me-2"></i>
                              <?= mb_strtoupper(htmlspecialchars($animal['race_nom']), 'UTF-8') ?>
                            </span>
                            <span class="fw-bold">
                              <!-- PRÉNOM -->
                              <i class="fa-regular fa-comments fa-lg me-2 text-primary"></i>
                              <?= strtoupper(htmlspecialchars($animal['animal_prenom'])) ?>
                            </span>
                            <span>
                              <!-- PAYS -->
                              <i class="fa-solid fa-font-awesome fa-lg me-2 text-primary"></i>
                              <?= strtoupper(htmlspecialchars($animal['animal_pays'])) ?>
                            </span>
                          </div>
                          <!-- EN-TÊTE HISTOIRE ANIMAL | FIN -->
                          <!-- CONTENU HISTOIRE ANIMAL | DÉBUT -->
                          <div class=" modal-body">
                            <img src=" <?= htmlspecialchars(BASE_URL . $animal['animal_visuel']) ?>" class="d-block w-100 " alt="<?= htmlspecialchars($animal['animal_prenom']) ?>">
                            <div class="card-text mt-2">
                              <p>
                                <!-- HISTOIRE -->
                                <i class="fa-solid fa-earth-americas fa-lg text-primary me-2 pb-4 pt-4"></i>
                                <span class="fw-bold">Son Histoire</span><br>
                                <span style="text-justify"><?= htmlspecialchars($animal['animal_prenom']) ?> <?= htmlspecialchars($animal['animal_histoire']) ?></span>
                              </p>
                            </div>
                          </div>
                          <!-- CONTENU HISTOIRE ANIMAL | FIN -->
                          <!-- FOOTER HISTOIRE ANIMAL | DÉBUT -->
                          <div class=" modal-footer">
                            <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                          </div>
                          <!-- FOOTER HISTOIRE ANIMAL | FIN -->
                        </div>
                      </div>
                    </div>
                    <!-- MODALE HISTOIRE ANIMAL | FIN -->
                  </div>
                </div>
              <?php endforeach ?>
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
        <?php endforeach ?>
      </div>
    </section>
  <?php endforeach ?>
</div>
<!-- SECTION DOMAINE | FIN -->
<!-- SECTION ANIMAUX | FIN -->