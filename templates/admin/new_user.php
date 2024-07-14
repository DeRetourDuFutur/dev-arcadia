<?php require_once '../app/admin/new_user.php';
?>
<div class="container">
  <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
    <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">AJOUT D'UTILISATEUR</span><i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i> <a href="<?php echo BASE_URL . '/gestion-users' ?>">GESTION UTILISATEURS</a></h6>
    <form action="" method="POST" id="newUserForm" novalidate>
      <input type="hidden" id="user_id" name="user_id" value="<?= $user['user_id'] ?>">
      <div class="alert alert-secondary pt-3">
        <label for="user_access">RÔLE</label>
        <select class="form-control" id="user_access" name="user_access">
          <option selected value="">CHOISIR UN RÔLE</option>
          <option value="admin" class="text-primary fw-bold">ADMINISTRATEUR</option>
          <option value="employee">EMPLOY&Eacute;</option>
          <option value="veto">V&Eacute;T&Eacute;RINAIRE</option>
        </select>
      </div>
      <div class="form-group">
        <label for="user_email">EMAIL (Identifant)</label>
        <input type="email" name="user_email" id="user_email" class="form-control">
      </div>
      <div class="form-group">
        <label for="user_prenom">Prénom</label>
        <input type="text" name="user_prenom" id="user_prenom" class="form-control">
      </div>
      <div class="form-group">
        <label for="user_nom">NOM</label>
        <input type="text" name="user_nom" id="user_nom" class="form-control">
      </div>
      <div class="form-group">
        <label for="user_pwd">Mot de passe</label>
        <input type="password" name="user_pwd" id="user_pwd" class="form-control">
      </div>
      <div class="form-group">
        <label for="user_confirm_pwd">Confirmer le mot de passe</label>
        <input type="password" name="user_confirm_pwd" id="user_confirm_pwd" class="form-control">
      </div>
      <div class="form-group">
        <input type="hidden" name="user_date_inscrit" id="user_date_inscrit" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>">
      </div>
      <div class="form-group">
        <input type="hidden" name="user_statut" id="user_statut" class="form-control" value="0">
      </div>
      <button type="submit" class="btn btn-primary-color my-4" name="user_action" value="add">Ajouter</button>
    </form>
    <div id="responseNewUser"></div>
  </div>
</div>