<?php
require_once('../app/process_contact.php');
?>

<!-- Section CONTACT | Début -->
<div class="container-fluid fadeInUp" data-wow-delay="0.1s" id="contact">
  <div class="container py-5">
    <p>
      <span class="text-primary me-2">#</span>Formulaire de contact
    </p>
    <h5>Contactez-nous <span class="text-primary">via ce formulaire dédié</span></h5>
    <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container mt-3">
        <form method="POST" action="#contacts" class="form-label" id="newContact">
          <label for="contact_prenom">Votre Prénom :</label>
          <input type="text" class="form-control" name="contact_prenom" id="contact_prenom" required><br>
          <label for="contact_nom">Votre NOM :</label>
          <input type="text" class="form-control" name="contact_nom" id="contact_nom" required><br>
          <label for="contact_emailInput">Votre Email :</label>
          <input type="contact_email" class="form-control" name="contact_email" id="contact_emailInput" required><br>
          <label for="contact_message">Votre Message :</label>
          <textarea name="contact_message" class="form-control" id="contact_message" required></textarea><br>
          <input type="hidden" name="contact_date" value="<?= htmlspecialchars(date('Y-m-d H:i:s')) ?>">
          <button type="submit" class="btn btn-primary-color" name="contact_action">Envoyer</button>
          <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        </form>
        <div id="responseContact"></div>
      </div>
    </div>
  </div>
</div>
<!-- Section CONTACT | Fin -->