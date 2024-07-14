<?php
require_once '../app/admin/gestion_navlink.php';
?>
<!-- Gestion des Liens de la Navbar Principale | Début -->
<section id="navlink">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION NAVBAR </span></h6>
      <?php foreach ($navlinks as $navlink) : ?>
        <div class="col-lg-3 mb-4">
          <form action="" method="POST">
            <input type="hidden" name="navlink_id" value="<?= $navlink['navlink_id'] ?>">
            <div class="alert alert-secondary my-0">
              <label for="navlink_nom" class="ms-1">NOM</label>
              <input type="text" class="form-control" id="navlink_nom" name="navlink_nom" value="<?= $navlink['navlink_nom']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_lien" class="ms-1">LIEN</label>
              <input type="text" class="form-control" id="navlink_lien" name="navlink_lien" value="<?= $navlink['navlink_lien']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_class" class="ms-1">CLASSE</label>
              <input type="text" class="form-control" id="navlink_class" name="navlink_class" value="<?= $navlink['navlink_class']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_title" class="ms-1">TITLE</label>
              <input type="text" class="form-control" id="navlink_title" name="navlink_title" value="<?= $navlink['navlink_title']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="navlink_ico" class="ms-1">ICO</label>
              <input type="text" class="form-control" id="navlink_ico" name="navlink_ico" value="<?= $navlink['navlink_ico']; ?>">
            </div>
            <button type="submit" class="btn btn-primary-color align-bottom mt-4" name="navlink_action" value="update">MAJ</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Liens de la Navbar Principale | Fin -->