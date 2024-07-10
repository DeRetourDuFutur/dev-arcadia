<?php
require_once '../app/admin/gestion_navbar_admin.php';
?>
<!-- Gestion des Liens de la Navbar Admin | Début -->
<section id="navbar">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION NAVBAR ADMIN </span></h6>
      <?php foreach ($dalinks as $dalink) : ?>
        <div class="col-lg-3 mb-4">
          <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $dalink['id'] ?>">
            <div class="alert alert-secondary my-0">
              <label for="nom" class="ms-1">NOM</label>
              <input type="text" class="form-control" id="nom" name="nom" value="<?= $dalink['nom']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="lien" class="ms-1">LIEN</label>
              <input type="text" class="form-control" id="lien" name="lien" value="<?= $dalink['lien']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="title" class="ms-1">TITLE</label>
              <input type="text" class="form-control" id="title" name="title" value="<?= $dalink['title']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="ico" class="ms-1">ICO</label>
              <input type="text" class="form-control" id="ico" name="ico" value="<?= $dalink['ico']; ?>">
            </div>
            <button type="submit" class="btn btn-primary-color align-bottom mt-4" name="action-nb-admin" value="update">MAJ</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Liens de la Navbar Admin | Fin -->