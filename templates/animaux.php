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
      <div class="item-slider-animals">
        <img src="assets/img/domaines/d1-cover-card.webp" alt="La Savane" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Savane</div>
        </div>
      </div>
      <div class="item-slider-animals">
        <img src="assets/img/domaines/d2-cover-card.webp" alt="La Jungle" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Jungle</div>
        </div>
      </div>
      <div class="item-slider-animals">
        <img src="assets/img/domaines/d3-cover-card.webp" alt="Les Marais" />
        <div class="content-slider-animals">
          <div class="title-slider-animals">Marais</div>
        </div>
      </div>
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
$race = ['Eléphant', 'Girafe', 'Léopard', 'Lion', 'Rhinocéros', 'Zèbre'];
$id = ['01', '02', '03', '04', '05', '06'];
// $age = ['1 an', '2 ans', '3 ans', '4 ans', '5 ans', '6 ans'];
// $poids = ['100 kg', '200 kg', '300 kg', '400 kg', '500 kg', '600 kg'];
// $habitat = ['Savane', 'Jungle', 'Marais'];
// $prenom = ['Dumbo', 'Girafon', 'Léopold', 'Lionel', 'Rhino', 'Zébulon'];
?>

<!-- Section SAVANE | Début -->
<div class="container">
  <section id="savane" class="d-none">
    <div class="row">
      <?php
      for ($i = 0; $i < 6; $i++) { ?>
        <div id="carouselAn<?php echo $id[$i] ?>" class="carousel slide col-lg-4 col-sm-6 column col-12">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="7000">
              <img src="assets/img/domaines/savane/d1-an<?php echo $id[$i] ?>-pc01.webp" class="d-block w-100 rounded-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $race[$i] ?></h5>
                <p class="card-text">
                  Prénom de l'animal 1 <br>
                  Âge de l'animal 1 <br>
                  Poids de l'animal 1 <br>
                  Habitat de l'animal 1
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="assets/img/domaines/savane/d1-an<?php echo $id[$i] ?>-pc02.webp" class="d-block w-100 rounded-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $race[$i] ?></h5>
                <p class="card-text">
                  Prénom de l'animal 2 <br>
                  Âge de l'animal 2 <br>
                  Poids de l'animal 2 <br>
                  Habitat de l'animal 2
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="assets/img/domaines/savane/d1-an<?php echo $id[$i] ?>-pc03.webp" class="d-block w-100 rounded-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $race[$i] ?></h5>
                <p class="card-text">
                  Prénom de l'animal 3 <br>
                  Âge de l'animal 3 <br>
                  Poids de l'animal 3 <br>
                  Habitat de l'animal 3
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="assets/img/domaines/savane/d1-an<?php echo $id[$i] ?>-pc04.webp" class="d-block w-100 rounded-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $race[$i] ?></h5>
                <p class="card-text">
                  Prénom de l'animal 4 <br>
                  Âge de l'animal 4 <br>
                  Poids de l'animal 4 <br>
                  Habitat de l'animal 4
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
              <img src="assets/img/domaines/savane/d1-an<?php echo $id[$i] ?>-pc05.webp" class="d-block w-100 rounded-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $race[$i] ?></h5>
                <p class="card-text">
                  Prénom de l'animal 5 <br>
                  Âge de l'animal 5 <br>
                  Poids de l'animal 5 <br>
                  Habitat de l'animal 5
                </p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselAn<?php echo $id[$i] ?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselAn<?php echo $id[$i] ?>" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
          </button>
        </div>
      <?php }
      ?>
    </div>
  </section>
</div>
<!-- Section SAVANE | Fin -->

<section id="jungle" class="d-none">
  <p>section JUNGLE ICI</p>
</section>
<section id="marais" class="d-none">
  <p>C'est Marseille Bébé</p>
</section>