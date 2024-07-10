<?php require_once '../app/admin/new_user.php';
?>
<div class="container">
  <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
    <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">AJOUT UTILISATEUR </span></h6>
    <form action="" method="POST">
      <input type="hidden" id="id" name="id" value="<?= $user['id'] ?>">
      <div class="alert alert-secondary my-0">
        <label for="access">RÔLE</label>
        <select class="form-control" id="access" name="access">
          <option value="admin">ADMINISTRATEUR</option>
          <option value="employee">EMPLOYE</option>
          <option value="veto">VETERINAIRE</option>
        </select>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="nom">NOM</label>
        <input type="text" name="nom" id="nom" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="pwd">Mot de passe</label>
        <input type="text" name="pwd" id="pwd" class="form-control" required>
      </div>
      <div class="form-group">
        <input type="hidden" name="date_inscrit" id="date_inscrit" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>">
      </div>
      <div class="form-group">
        <input type="hidden" name="statut" id="statut" class="form-control" value="1">
      </div>
      <button type="submit" class="btn btn-primary-color my-4" name="action" value="add">Ajouter</button>
    </form>
  </div>
</div>