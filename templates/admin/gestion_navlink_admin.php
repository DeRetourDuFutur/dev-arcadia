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
            <div class="alert alert-secondary my-0">
              <label for="navlink_admin_class" class="ms-1">CLASSE LIENS</label>
              <input type="text" class="form-control" id="navlink_admin_class" name="navlink_admin_class" value="<?= $navlink_admin['navlink_admin_class']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              ACC&Egrave;S AUX MENUS
              <div class="input-group mb-3">
                <label class="input-group-text <?php if ($navlink_admin['navlink_admin_a'] == '1') echo 'text-primary'; ?> <?php if ($navlink_admin['navlink_admin_a'] == '0') echo 'text-secondary'; ?>" for="navlink_admin_a">ADM.</label>
                <select class="form-select" id="navlink_admin_a" name="navlink_admin_a">
                  <option value="1" <?php if ($navlink_admin['navlink_admin_a'] == '1') echo 'selected'; ?> class="text-primary fw-bold">ACTIF</option>
                  <option value="0" <?php if ($navlink_admin['navlink_admin_a'] == '0') echo 'selected'; ?> class="text-secondary fw-bold">INACTIF</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text <?php if ($navlink_admin['navlink_admin_e'] == '1') echo 'text-primary'; ?> <?php if ($navlink_admin['navlink_admin_e'] == '0') echo 'text-secondary'; ?>" for="navlink_admin_e">EMP.</label>
                <select class="form-select" id="navlink_admin_e" name="navlink_admin_e">
                  <option value="1" <?php if ($navlink_admin['navlink_admin_e'] == '1') echo 'selected'; ?> class="text-primary fw-bold">ACTIF</option>
                  <option value="0" <?php if ($navlink_admin['navlink_admin_e'] == '0') echo 'selected'; ?> class="text-secondary fw-bold">INACTIF</option>
                </select>
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text <?php if ($navlink_admin['navlink_admin_v'] == '1') echo 'text-primary'; ?> <?php if ($navlink_admin['navlink_admin_v'] == '0') echo 'text-secondary'; ?>" for="navlink_admin_v">V&Eacute;T.</label>
                <select class="form-select" id="navlink_admin_v" name="navlink_admin_v">
                  <option value="1" <?php if ($navlink_admin['navlink_admin_v'] == '1') echo 'selected'; ?> class="text-primary fw-bold">ACTIF</option>
                  <option value="0" <?php if ($navlink_admin['navlink_admin_v'] == '0') echo 'selected'; ?> class="text-secondary fw-bold">INACTIF</option>
                </select>
              </div>
            </div>

            <button type="submit" class="btn btn-primary-color align-bottom mt-4" name="navlink_admin_action" value="update">MAJ</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Gestion des Liens de la Navbar Admin | Fin -->