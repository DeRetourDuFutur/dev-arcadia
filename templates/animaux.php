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
            Décourvrez notre domaine entièrement dédié à la faune et la flore de la Savane
          </div>
          <div class="buttons-slider-animals">
            <a href="#savane" data-domaine="savane">Explorer</a>
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
            Décourvrez notre domaine entièrement dédié à la faune et la flore de la Jungle
          </div>
          <div class="buttons-slider-animals">
            <a href="#jungle" data-domaine="jungle">Explorer</a>
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
            Décourvrez notre domaine entièrement dédié à la faune et la flore des Marais
            <div class="buttons-slider-animals">
              <a href="#marais" data-domaine="marais">Explorer</a>
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
  'Savane' => [
    'id' => '1',
    'races' => [
      'Eléphant' => [
        'race-id' => '01'
      ],
      'Girafe' => [
        'race-id' => '02'
      ],
      'Léopard' => [
        'race-id' => '03'
      ],
      'Lion' => [
        'race-id' => '04'
      ],
      'Rhinocéros' => [
        'race-id' => '05'
      ],
      'Zèbre' => [
        'race-id' => '06'
      ]
    ]
  ],
  'Jungle' => [
    'id' => '2',
    'races' => [
      'Gorille' => [
        'race-id' => '01'
      ],
      'Tigre' => [
        'race-id' => '02'
      ],
      'Jaguard' => [
        'race-id' => '03'
      ],
    ]
  ],
  'Marais' => [
    'id' => '3',
    'races' => [
      'Serpent' => [
        'race-id' => '01'
      ],
      'Crocodile' => [
        'race-id' => '02'
      ],
    ]
  ]

];
?>

<!-- Section SAVANE | Début -->
<div class="container">
  <?php foreach ($domaines as $domaineName => $domaineContent) { ?>
    <section id="<?= strtolower($domaineName) ?>" class="section-domaines <?php if ($domaines['Savane'] !== $domaineContent) { ?>d-none<?php } ?>">
      <div class="container-sm">
        <p>
          <span class="text-primary me-2">#</span><?= $domaineName ?>
        </p>
      </div>
      <div class="row mb-3">
        <?php foreach ($domaineContent['races'] as $raceName => $raceContent) { ?>

          <div id="carouselAn<?= $raceContent['race-id'] ?>" class="carousel slide col-lg-4 col-sm-6 column col-12">
            <div class="carousel-inner py-3">
              <div class="carousel-item active border" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaineName) ?>/d<?= $domaineContent['id'] ?>-an<?= $raceContent['race-id'] ?>-pc01.webp" class="d-block w-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $raceName ?></h5>
                  <p class="card-text">
                    Prénom de l'animal 1 <br>
                    Âge de l'animal 1 <br>
                    Poids de l'animal 1 <br>
                    Habitat de l'animal 1
                  </p>
                </div>
              </div>
              <div class="carousel-item border" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaineName) ?>/d<?= $domaineContent['id'] ?>-an<?= $raceContent['race-id'] ?>-pc02.webp" class="d-block w-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $raceName ?></h5>
                  <p class="card-text">
                    Prénom de l'animal 2 <br>
                    Âge de l'animal 2 <br>
                    Poids de l'animal 2 <br>
                    Habitat de l'animal 2
                  </p>
                </div>
              </div>
              <div class="carousel-item border" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaineName) ?>/d<?= $domaineContent['id'] ?>-an<?= $raceContent['race-id'] ?>-pc03.webp" class="d-block w-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $raceName ?></h5>
                  <p class="card-text">
                    Prénom de l'animal 3 <br>
                    Âge de l'animal 3 <br>
                    Poids de l'animal 3 <br>
                    Habitat de l'animal 3
                  </p>
                </div>
              </div>
              <div class="carousel-item border" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaineName) ?>/d<?= $domaineContent['id'] ?>-an<?= $raceContent['race-id'] ?>v-pc04.webp" class="d-block w-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $raceName ?></h5>
                  <p class="card-text">
                    Prénom de l'animal 4 <br>
                    Âge de l'animal 4 <br>
                    Poids de l'animal 4 <br>
                    Habitat de l'animal 4
                  </p>
                </div>
              </div>
              <div class="carousel-item border" data-bs-interval="10000">
                <img src="assets/img/domaines/<?= strtolower($domaineName) ?>/d<?= $domaineContent['id'] ?>-an<?= $raceContent['race-id'] ?>-pc05.webp" class="d-block w-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $raceName ?></h5>
                  <p class="card-text">
                    Prénom de l'animal 5 <br>
                    Âge de l'animal 5 <br>
                    Poids de l'animal 5 <br>
                    Habitat de l'animal 5
                  </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAn<?= $raceContent['race-id'] ?>" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselAn<?= $raceContent['race-id'] ?>" data-bs-slide="next">
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