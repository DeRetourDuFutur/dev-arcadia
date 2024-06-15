<!-- Slider Domaines ANIMAUX | Début -->
<div class="mt-5">
  <div class="container-sm">
    <p>
      <span class="text-primary me-2">#</span>Nos animaux
    </p>
    <h2>Explorez nos <span class="text-primary">3 domaines</span></h2>
  </div>
  <div class="slider-animals">
    <!-- Liste Items | Début -->
    <div class="list-slider-animals">
      <!-- Slider Savane | Début -->
      <div class="item-slider-animals">
        <img src="assets/img/domaines/d1-cover-slider.webp" alt="La Savane" />
        <div class="content-slider-animals">
          <div class="author-slider-animals">ARCADIA</div>
          <div class="topic-slider-animals">SAVANE</div>
          <div class="des-slider-animals">
            Découvrez notre domaine entièrement dédié à la faune et la flore de la Savane
          </div>
          <div class="btn btn-primary-color mt-3">
            <a href="#savane" data-domaine="savane" class="text-white">EXPLORER</a>
          </div>
        </div>
      </div>
      <!-- Slider Savane | Fin -->
      <!-- Slider Jungle | Début -->
      <div class="item-slider-animals">
        <img src="assets/img/domaines/d2-cover-slider.webp" alt="La Jungle" />
        <div class="content-slider-animals">
          <div class="author-slider-animals">ARCADIA</div>
          <div class="topic-slider-animals">JUNGLE</div>
          <div class="des-slider-animals">
            Découvrez notre domaine entièrement dédié à la faune et la flore de la Jungle
          </div>
          <div class="btn btn-primary-color mt-3">
            <a href="#jungle" data-domaine="jungle" class="text-white">EXPLORER</a>
          </div>
        </div>
      </div>
      <!-- Slider Jungle | Fin -->
      <!-- Slider Marais | Début -->
      <div class="item-slider-animals">
        <img src="assets/img/domaines/d3-cover-slider.webp" alt="Les Marais" />
        <div class="content-slider-animals">
          <div class="author-slider-animals">ARCADIA</div>
          <div class="topic-slider-animals">MARAIS</div>
          <div class="des-slider-animals">
            Découvrez notre domaine entièrement dédié à la faune et la flore des Marais
            <div class="btn btn-primary-color mt-3">
              <a href="#marais" data-domaine="marais" class="text-white">EXPLORER</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Slider Marais | Fin -->
    </div>
    <!-- Liste Items | Fin -->
    <!-- Liste Thumbnail | Début -->
    <div class="thumbnail-slider-animals">
      <a href="#savane" data-domaine="savane" class="item-slider-animals">
        <img src="assets/img/domaines/d1-cover-card.webp" alt="La Savane" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Savane</div>
        </div>
      </a>
      <a href="#jungle" data-domaine="jungle" class="item-slider-animals">
        <img src="assets/img/domaines/d2-cover-card.webp" alt="La Jungle" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Jungle</div>
        </div>
      </a>
      <a href="#marais" data-domaine="marais" class="item-slider-animals">
        <img src="assets/img/domaines/d3-cover-card.webp" alt="Les Marais" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Marais</div>
        </div>
      </a>
    </div>
    <!-- Liste Thumbnail | Fin -->
    <!-- Boutons NEXT / PREV -->
    <div class="arrows-slider-animals">
      <button id="prev" class="btn-prev"><i class="fa-solid fa-hippo fa-flip-horizontal prev-hippo"></i></button>
      <button id="next" class="btn-next"><i class="fa-solid fa-hippo next-hippo"></i></button>
    </div>
    <!-- Time Running -->
    <div class="time-slider-animals"></div>
  </div>
  </p>
</div>
<!-- Slider Domaines ANIMAUX | Début -->

<!-- Variables PhP en attendant la BDD/SQL -->

<?php

$domaines = [
  [
    'domaine-name' => 'Savane',
    'domaine-id' => '1',
    'domaine-races' => [
      [
        'race-name' => 'Elephant',
        'race-id' => '01'
      ],
      [
        'race-name' => 'Girafe',
        'race-id' => '02'
      ],
      [
        'race-name' => 'Léopard',
        'race-id' => '03'
      ],
      [
        'race-name' => 'Lion',
        'race-id' => '04'
      ],
      [
        'race-name' => 'Rhinocéros',
        'race-id' => '05'
      ],
      [
        'race-name' => 'Zèbre',
        'race-id' => '06'
      ]
    ]
  ],
  [
    'domaine-name' =>  'Jungle',
    'domaine-id' => '2',
    'domaine-races' => [
      [
        'race-name' => 'Gorille',
        'race-id' => '01'
      ],
      [
        'race-name' => 'Tigre',
        'race-id' => '02'
      ],
      [
        'race-name' => 'Jaguar',
        'race-id' => '03'
      ],
    ]
  ],
  [
    'domaine-name' => 'Marais',
    'domaine-id' => '3',
    'domaine-races' => [
      [
        'race-name' => 'Serpent',
        'race-id' => '01'
      ],
      [
        'race-name' => 'Crocodile',
        'race-id' => '02'
      ],
    ]
  ]
];
?>

<!-- Section SAVANE | Début -->
<div class="container">
  <?php foreach ($domaines as $domaineIndex => $domaine) { ?>
    <section id="<?= strtolower($domaine['domaine-name']) ?>" class="section-domaines <?php if ($domaines[0] !== $domaine) { ?>d-none<?php } ?>">
      <div class="container-sm">
        <p>
          <span class="text-primary me-2">#</span><?= $domaine['domaine-name'] ?>
        </p>
      </div>
      <div class="row mb-3">
        <?php foreach ($domaine['domaine-races'] as $raceIndex => $race) { ?>
          <div id="carouselAn<?= $race['race-id'] ?>" class="carousel slide col-lg-4 col-sm-6 column col-12">
            <div class="carousel-inner py-3">
              <div class="carousel-item active border-fiche-animal" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc01.webp" class="d-block w-100 img-fiche-animal" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prénom de l'animal 1</h5>
                  <p class="card-text">
                    <?= $race['race-name'] ?> [<?= $domaine['domaine-name'] ?>]
                  </p>
                  <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#<?= $race['race-name'] ?>-1">
                    Détails
                  </button>
                  <!-- Modale Fiche Animal 1 | Début -->
                  <div class="modal fade" id="<?= $race['race-name'] ?>-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fs-5" id="exampleModalLabel">Prénom de l'animal 1</h5>
                        </div>
                        <div class="modal-body">
                          <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc01.webp" class="d-block w-100" alt="...">
                          <p class="card-text mt-2">
                            <br>
                            Âge de l'animal 1 <br>
                            Poids de l'animal 1 <br>
                            Etat de l'animal 1 <br>
                            Nourriture proposée 1 <br>
                            Grammage de la nourriture 1 <br>
                            Dernière visite du vétérinaire 1 <br>
                            Race animal 1, Habitat de l'animal 1
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modale Fiche Animal 1 | Fin -->
                </div>
              </div>
              <div class="carousel-item border-fiche-animal" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc02.webp" class="d-block w-100 img-fiche-animal" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prénom de l'animal 2</h5>
                  <p class="card-text">
                    <?= $race['race-name'] ?> [<?= $domaine['domaine-name'] ?>]
                  </p>
                  <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#<?= $race['race-name'] ?>-2">
                    Détails
                  </button>
                  <!-- Modale Fiche Animal 2 | Début -->
                  <div class="modal fade" id="<?= $race['race-name'] ?>-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fs-5" id="exampleModalLabel">Prénom de l'animal 2</h5>
                        </div>
                        <div class="modal-body">
                          <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc02.webp" class="d-block w-100" alt="...">
                          <p class="card-text mt-2">
                            <br>
                            Âge de l'animal 2 <br>
                            Poids de l'animal 2 <br>
                            Etat de l'animal 2 <br>
                            Nourriture proposée 2 <br>
                            Grammage de la nourriture 2 <br>
                            Dernière visite du vétérinaire 2 <br>
                            Race animal 2, Habitat de l'animal 2
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modale Fiche Animal 2 | Fin -->
                </div>
              </div>
              <div class="carousel-item border-fiche-animal" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc03.webp" class="d-block w-100 img-fiche-animal" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prénom de l'animal 3</h5>
                  <p class="card-text">
                    <?= $race['race-name'] ?> [<?= $domaine['domaine-name'] ?>]
                  </p>
                  <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#<?= $race['race-name'] ?>-3">
                    Détails
                  </button>
                  <!-- Modale Fiche Animal 3 | Début -->
                  <div class="modal fade" id="<?= $race['race-name'] ?>-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fs-5" id="exampleModalLabel">Prénom de l'animal 3</h5>
                        </div>
                        <div class="modal-body">
                          <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc03.webp" class="d-block w-100" alt="...">
                          <p class="card-text mt-2">
                            <br>
                            Âge de l'animal 3 <br>
                            Poids de l'animal 3 <br>
                            Etat de l'animal 3 <br>
                            Nourriture proposée 3 <br>
                            Grammage de la nourriture 3 <br>
                            Dernière visite du vétérinaire 3 <br>
                            Race animal 3, Habitat de l'animal 3
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modale Fiche Animal 3 | Fin -->
                </div>
              </div>
              <div class="carousel-item border-fiche-animal" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc04.webp" class="d-block w-100 img-fiche-animal" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prénom de l'animal 4</h5>
                  <p class="card-text">
                    <?= $race['race-name'] ?> [<?= $domaine['domaine-name'] ?>]
                  </p>
                  <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#<?= $race['race-name'] ?>-4">
                    Détails
                  </button>
                  <!-- Modale Fiche Animal 4 | Début -->
                  <div class="modal fade" id="<?= $race['race-name'] ?>-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fs-5" id="exampleModalLabel">Prénom de l'animal 4</h5>
                        </div>
                        <div class="modal-body">
                          <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc04.webp" class="d-block w-100" alt="...">
                          <p class="card-text mt-2">
                            <br>
                            Âge de l'animal 4 <br>
                            Poids de l'animal 4 <br>
                            Etat de l'animal 4 <br>
                            Nourriture proposée 4 <br>
                            Grammage de la nourriture 4 <br>
                            Dernière visite du vétérinaire 4 <br>
                            Race animal 4, Habitat de l'animal 4
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modale Fiche Animal 4 | Fin -->
                </div>
              </div>
              <div class="carousel-item border-fiche-animal" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc05.webp" class="d-block w-100 img-fiche-animal" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Prénom de l'animal 5</h5>
                  <p class="card-text">
                    <?= $race['race-name'] ?> [<?= $domaine['domaine-name'] ?>]
                  </p>
                  <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#<?= $race['race-name'] ?>-5">
                    Détails
                  </button>
                  <!-- Modale Fiche Animal 5 | Début -->
                  <div class="modal fade" id="<?= $race['race-name'] ?>-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title fs-5" id="exampleModalLabel">Prénom de l'animal 5</h5>
                        </div>
                        <div class="modal-body">
                          <img src="assets/img/domaines/<?= strtolower($domaine['domaine-name']) ?>/d<?= $domaine['domaine-id'] ?>-an<?= $race['race-id'] ?>-pc05.webp" class="d-block w-100" alt="...">
                          <p class="card-text mt-2">
                            <br>
                            Âge de l'animal 5 <br>
                            Poids de l'animal 5 <br>
                            Etat de l'animal 5 <br>
                            Nourriture proposée 5 <br>
                            Grammage de la nourriture 5 <br>
                            Dernière visite du vétérinaire 5 <br>
                            Race animal 5, Habitat de l'animal 5
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary-color" data-bs-dismiss="modal">Fermer</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modale Fiche Animal 5 | Fin -->
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAn<?= $race['race-id'] ?>" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAn<?= $race['race-id'] ?>" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Suivant</span>
            </button>
          </div>
        <?php }
        ?>
      </div>
    </section>
  <?php } ?>
</div>

<!-- Section SAVANE | Fin -->