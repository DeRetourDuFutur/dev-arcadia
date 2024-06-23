<?php
require_once('process_contact.php');
?>

<!-- Section CONTACT | Début -->

<div class="container-fluid about-banner" id="about">
  <!-- Bannière ABOUT | Début -->
  <div class="py-5"></div>
  <!-- Bannière ABOUT | Fin -->
</div>
<!-- Contenu ABOUT | Début -->
<div class="about-content">
  <p>
    <span class="text-primary me-2">#</span>Formulaire de contact
  </p>
  <h4>Contactez-nous <span class="text-primary">via ce formulaire dédié</span></h4>
  <p>
  <div class="mb-3" style="width: 40%;">
    <form method="POST" action="#contacts" class="form-label">
      <label for="prenom">Votre Prénom :</label>
      <input type="text" class="form-control" name="prenom" id="prenom" required><br>
      <label for="nom">Votre NOM :</label>
      <input type="text" class="form-control" name="nom" id="nom" required><br>
      <label for="email">Votre Email :</label>
      <input type="email" class="form-control" name="email" id="email" required><br>
      <label for="texte">Votre Message :</label>
      <textarea name="texte" class="form-control" id="texte" required></textarea><br>
      <button type="submit" class="btn btn-primary-color mt-3">Envoyer</button>
    </form>
  </div>
  </p>
</div>
<!-- Section CONTACT | Fin -->