<?php
require_once '../app/admin/gestion_animaux.php';
?>
<!-- Section ANIMAUX | Début -->
<?php
//  Vérifier si $animaux est un tableau
foreach ($animaux as $animal) {
  // Vériier si $animal est un tableau
  if (is_array($animal)) {;
  }
}
//  Récupérer le nom du domaine via la variable $animal initialisée dans le fichier gestion_animaux.php
$animal = $animal['domaine_name'];
?>
<!-- Vérification si des animaux ont été trouvés -->
<div class="container">
  <!-- Section DOMAINE | Début -->
  <section id="domaines" class="section-domaines">
    <div class="container-sm">
      <p>
        <span class="text-primary me-2">#</span><?= $animal ?>
      </p>
    </div>
    <div class="carousel-inner py-3">
      <div class="row mb-3">
        <?php
        // Organiser les animaux par race
        $animauxParRace = [];
        foreach ($animaux as $animal) {
          $race = $animal['race_name'];
          if (!isset($animauxParRace[$race])) {
            $animauxParRace[$race] = [];
          }
          $animauxParRace[$race][] = $animal;
        }
        ?>
        <?php foreach ($animauxParRace as $race => $animauxDeCetteRace) : ?>
          <div id="carousel<?= $race ?>" class="carousel slide col-lg-4 col-sm-6 column col-12">
            <div class="carousel-inner py-3">
              <div class="row mb-3">
                <?php foreach ($animauxDeCetteRace as $animal) : ?>
                  <div class="carousel-item active border-fiche-animal" data-bs-interval="10000">
                    <img src="<?= BASE_URL ?><?= $animal['dossier'] ?><?= strtolower($animal['photo']) ?>" class="d-block w-100 img-fiche-animal" alt="<?= $animal['prenom'] ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?= $animal['prenom'] ?></h5>
                      <p class="card-text">
                        <?= ucfirst($animal['race_name']) ?> [<?= htmlspecialchars($animal['domaine_name']) ?>]
                      </p>
                      <button type="button" class="btn btn-primary-color" data-bs-toggle="modal" data-bs-target="#modale<?= $animal['id'] ?>">
                        Détails
                      </button>
                      <!-- Modale Fiche Animal  | Début -->
                      <div class="modal fade" id="modale<?= $animal['id'] ?>" tabindex="-1" aria-labelledby="<?= $animal['id'] ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title fs-5" id="<?= $animal['race_name'] ?>"><?= $animal['prenom'] ?></h5>
                            </div>
                            <div class="modal-body">
                              <img src="<?= BASE_URL ?><?= $animal['dossier'] ?><?= $animal['photo'] ?>" class="d-block w-100 img-fiche-animal" alt="<?= $animal['prenom'] ?>">
                              <p class="card-text mt-2">
                                <br>
                                Âge : <?= $animal['age'] ?> <br>
                                Poids : <?= $animal['poids'] ?> <br>
                                Santé : <?= $animal['sante'] ?> <br>
                                Race : <?= $animal['race_name'] ?>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= ($animal['id']) ?>" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= ($animal['id']) ?>" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Suivant</span>
                </button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>