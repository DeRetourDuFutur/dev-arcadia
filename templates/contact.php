<?php
require_once('../app/process_contact.php');
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
      <label for="contact_prenom">Votre Prénom :</label>
      <input type="text" class="form-control" name="contact_prenom" id="contact_prenom" required><br>
      <label for="contact_nom">Votre NOM :</label>
      <input type="text" class="form-control" name="contact_nom" id="contact_nom" required><br>
      <label for="contact_emailInput">Votre Email :</label>
      <input type="contact_email" class="form-control" name="contact_email" id="contact_emailInput" required><br>
      <label for="contact_message">Votre Message :</label>
      <textarea name="contact_message" class="form-control" id="contact_message" required></textarea><br>
      <input type="hidden" name="contact_date" value="<?= date('Y-m-d H:i:s') ?>">
      <button type="submit" class="btn btn-primary-color mt-3">Envoyer</button>
    </form>
  </div>
  </p>
</div>
<!-- Section CONTACT | Fin -->