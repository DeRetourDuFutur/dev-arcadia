<?php
require_once('../app/admin/dashboard_login.php');
?>

<div class="container lg-w-50 mt-5 " id="login">
  <p>
    <span class="text-primary me-2">#</span>Accès Dashboard
  </p>
  <h5>Saisissez vos identifiants pour vous <span class="text-primary">connecter</span></h5>
  <div class="mb-3">
    <?php if (!empty($errorMessage)) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $errorMessage; ?>
      </div>
    <?php endif; ?>
    <form method="post" action="">
      <div class="mb-3">
        <label for="email" class="form-label">Login (votre adressse e-mail)</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Votre mot de passe</label>
        <input type="password" class="form-control" id="pwd" name="pwd" required>
      </div>
      <button type="submit" class="btn btn-primary-color" name="submit">Se connecter</button>
    </form>
  </div>
</div>