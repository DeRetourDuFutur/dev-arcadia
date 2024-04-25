<?php
require('../inc/header.php');
?>
<!-- Jeux | Début -->
<div class="container-fluid px-0 py-5" id="jeux">
  <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="col">
        <p><span class="text-primary me-2">#</span>Nos jeux</p>
        <h1 class="display-5 mb-0">Amusez-vous avec cet espace <span class="text-primary">dédié</span></h1>
      </div>
    </div>
    <div class="jeux">
      <p class="jeux-title">Le Jeu de Mémoire</p>
      <p class="jeux-subtitle">Cliquez sur les cartes pour les retourner et retrouver les paires !</p>
      <div id="game-board"></div>
    </div>
  </div>
</div>
<!-- Jeux | Fin -->
<?php
require('../inc/footer.php');
?>