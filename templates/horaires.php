<?php
require_once '../app/admin/gestion_horaires.php';
?>
<!-- Section Horaires | Début -->
<div class="bg-primary visiting-hours wow fadeInUp py-5 " data-wow-delay="0.1s" id="horaires">
  <div class="container pb-5">
    <div class="row g-5">
      <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="display-6 text-white mb-5">Horaires du Parc</h1>
        <?php foreach ($horaires as $horaire) : ?>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span><?= strtoupper(htmlspecialchars($horaire['horaire_jour'])); ?></span>
              <span><?= htmlspecialchars($horaire['horaire_ouverture']); ?> - <?= htmlspecialchars($horaire['horaire_fermeture']); ?></span>
            </li>
          </ul>
        <?php endforeach; ?>
      </div>
      <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
        <h1 class="display-6 text-white mb-5">Coordonnées</h1>
        <table class="table">
          <tbody>
            <tr>
              <td>Adresse</td>
              <td>Val-sans-retour de Brocéliande</td>
            </tr>
            <tr>
              <td></td>
              <td>56430 Tréhorenteuc</td>
            </tr>
            <tr>
              <td>Tickets</td>
              <td>
                <p class="mb-2">+33 2 88 88 88 88</p>
                <p class="mb-0">tickets@arcadia.com</p>
              </td>
            </tr>
            <tr>
              <td>Assistance</td>
              <td>
                <p class="mb-0">support@arcadia.com</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Section Horaires | Fin -->