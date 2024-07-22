<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/new_user.php';
?>
<section id="new_users">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">AJOUT D'UTILISATEUR</span><i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i> <a href="<?php echo BASE_URL . '/gestion-users' ?>">GESTION UTILISATEURS</a></h6>
      <div class="col-lg-3 mb-4">
        <form action="" method="POST" id="newUserForm" novalidate>
          <input type="hidden" id="user_id" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
          <div class="alert alert-secondary pt-3">
            <!-- RÔLE -->
            <div class="input-group">
              <label class="input-group-text" for="user_role">RÔLE</label>
              <select class="form-select" id="user_role" name="user_role">
                <option selected value="">CHOISIR UN RÔLE</option>
                <option value="admin" class="text-primary fw-bold">ADMINISTRATEUR</option>
                <option value="employee">EMPLOY&Eacute;</option>
                <option value="veto">V&Eacute;T&Eacute;RINAIRE</option>
              </select>
            </div>
            <!-- IDENTIFIANT -->
            <div class="alert alert-secondary my-0">
              <label for="user_email" class="ms-1">IDENTIFIANT</label>
              <input type="email" class="form-control" name="user_email" id="user_email">
            </div>
            <!-- PR&Eacute;NOM -->
            <div class="alert alert-secondary my-0">
              <label for="user_prenom" class="ms-1">PR&Eacute;NOM</label>
              <input type="text" class="form-control" name="user_prenom" id="user_prenom">
            </div>
            <!-- NOM -->
            <div class="alert alert-secondary my-0">
              <label for="user_nom" class="ms-1">NOM</label>
              <input type="text" class="form-control" name="user_nom" id="user_nom">
            </div>
            <!-- MOT DE PASSE -->
            <div class="alert alert-secondary my-0">
              <label for="user_pwd" c>PASSWORD</label>
              <input type="password" name="user_pwd" id="user_pwd" class="form-control">
            </div>
            <!-- CONFIRMATION MOT DE PASSE -->
            <div class="alert alert-secondary my-0">
              <label for="user_confirm_pwd" class="ms-1">V&Eacute;RIF. PASSWORD</label>
              <input type="password" name="user_confirm_pwd" id="user_confirm_pwd" class="form-control">
            </div>
            <!-- DATE (HIDDEN) -->
            <div class="form-group">
              <input type="hidden" name="user_date" id="user_date" class="form-control" value="<?php echo htmlspecialchars(date('Y-m-d H:i:s')); ?>">
            </div>
            <!-- STATUT (HIDDEN) PAR D&Eacute;FAUT SUR 0 -->
            <div class="form-group">
              <input type="hidden" name="user_statut" id="user_statut" class="form-control" value="0">
            </div>
            <!-- BOUTON AJOUTER -->
            <div class="d-flex justify-content-evenly pt-3">
              <button type="submit" class="btn btn-primary-color my-4" name="user_action" value="add">AJOUTER</button>
            </div>
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
        </form>
        <div id="responseNewUser"></div>
      </div>
    </div>