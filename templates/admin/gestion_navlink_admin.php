<?php
require_once '../app/admin/gestion_navlink_admin.php';
?>
<!-- Gestion des Liens de la Navbar Admin | Début -->
<section id="navlink_admin">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION NAVBAR ADMIN </span></h6>
      <?php foreach ($navlinks_admin as $navlink_admin) : ?>
        <div class="col-lg-3 mb-4">
          <form action="" method="POST">
            <input type="hidden" name="navlink_admin_id" value="<?= $navlink_admin['navlink_admin_id'] ?>">
            <div class="alert alert-secondary my-0">
              <label for="navlink_admin_nom" class="ms-1">NOM</label>
              <input type="text" class="form-control" id="navlink_admin_nom" name="navlink_admin_nom" value="<?= $navlink_admin['navlink_admin_nom']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_admin_lien" class="ms-1">LIEN</label>
              <input type="text" class="form-control" id="navlink_admin_lien" name="navlink_admin_lien" value="<?= $navlink_admin['navlink_admin_lien']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_admin_title" class="ms-1">TITLE</label>
              <input type="text" class="form-control" id="navlink_admin_title" name="navlink_admin_title" value="<?= $navlink_admin['navlink_admin_title']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_admin_ico" class="ms-1">ICO</label>
              <input type="text" class="form-control" id="navlink_admin_ico" name="navlink_admin_ico" value="<?= $navlink_admin['navlink_admin_ico']; ?>">
            </div>
            <button type="submit" class="btn btn-primary-color align-bottom mt-4" name="navlink_admin_action" value="update">MAJ</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Liens de la Navbar Admin | Fin -->