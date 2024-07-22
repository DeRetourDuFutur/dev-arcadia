<!-- APPEL DES FONCTIONS PHP -->
<?php
require_once '../app/admin/gestion_users.php';
?>
<!-- GESTION DES UTILISATEURS | DÉBUT -->
<section id="users">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-primary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">UTILISATEURS</span><i class="fa-solid fa-square-caret-right fa-xl text-secondary ms-4 me-2"></i><a href="<?php echo htmlspecialchars(BASE_URL . '/new-user') ?>"> AJOUTER UN UTILISATEUR</a></h6>
      <?php foreach ($users as $user) : ?>
        <div class="col-lg-3 mb-4">
          <form method="POST" class="<?php if ($user['user_statut'] == 0) echo 'text-decoration-line-through'; ?>">
            <!-- ID (HIDDEN) -->
            <input type="hidden" id="user_id" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
            <div class="alert alert-secondary my-0">
              <div class="input-group mb-3">
                <!-- RÔLE -->
                <label class="input-group-text <?php if ($user['user_role'] == 'admin') echo 'text-primary'; ?>" for="user_role">RÔLE</label>
                <select class="form-select" id="user_role" name="user_role">
                  <option value="admin" <?php if ($user['user_role'] == 'admin') echo 'selected'; ?> class="text-primary fw-bold">ADMINISTRATEUR</option>
                  <option value="employee" <?php if ($user['user_role'] == 'employee') echo 'selected'; ?>>EMPLOY&Eacute;</option>
                  <option value="veto" <?php if ($user['user_role'] == 'veto') echo 'selected'; ?>>V&Eacute;T&Eacute;RINAIRE</option>
                </select>
              </div>
            </div>
            <div class="alert alert-secondary my-0">
              <!-- IDENTIFIANT -->
              <label for="user_email" class="ms-1">IDENTIFIANT</label>
              <input type="email" class="form-control" id="user_email" name="user_email" value="<?php echo htmlspecialchars($user['user_email']); ?>" readonly>
            </div>
            <!-- MOT DE PASSE -->
            <div class="alert alert-secondary my-0">
              <label for="user_pwd" class="ms-1">MOT DE PASSE</label>
              <input type="password" class="form-control" id="user_pwd" name="user_pwd" value="<?php echo htmlspecialchars($user['user_pwd']); ?>">
            </div>
            <!-- PRÉNOM -->
            <div class="alert alert-secondary my-0">
              <label for="user_prenom" class="ms-1">PR&Eacute;NOM</label>
              <input type="text" class="form-control" id="user_prenom" name="user_prenom" value="<?php echo htmlspecialchars($user['user_prenom']); ?>">
            </div>
            <!-- NOM -->
            <div class="alert alert-secondary my-0">
              <label for="user_nom" class="ms-1">NOM</label>
              <input type="text" class="form-control" id="user_nom" name="user_nom" value="<?php echo htmlspecialchars($user['user_nom']); ?>">
            </div>
            <!-- DATE DE CRÉATION -->
            <div class="alert alert-secondary my-0">
              <label for="user_date" class="ms-1">DATE DE CR&Eacute;ATION</label>
              <input type="text" class="form-control" id="user_date" name="user_date" value="<?php echo htmlspecialchars($user['user_date']); ?>" readonly>
            </div>
            <!-- STATUT -->
            <div class="input-group mb-3">
              <label for="user_statut" class="input-group-text" style="<?php if ($user['user_statut'] == 0) echo 'color: red'; ?>"><?php echo ($user['user_statut'] == 0) ? 'STATUT INACTIF' : 'STATUT ACTIF'; ?></label>
              <select class="form-select" id="user_statut" name="user_statut">
                <option value="1" <?php if ($user['user_statut'] == 1) echo 'selected'; ?>>OUI</option>
                <option value="0" <?php if ($user['user_statut'] == 0) echo 'selected'; ?>>NON</option>
              </select>
            </div>
            <!-- BOUTONS -->
            <div class="d-flex justify-content-evenly pt-3">
              <button type="submit" class="btn btn-primary-color" name="user_action" value="update" style="width: 30%;">MAJ</button>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= 'deleteModal' . htmlspecialchars($user['user_id']) ?>" style="width: 30%;" title="Supprimer l'utilisateur de la base de données"><i class="fa-solid fa-user-minus"></i></button>

              <!-- MODAL POUR SUPPRIMER UN UTILISATEUR -->
              <div class="modal fade" id="<?= 'deleteModal' . htmlspecialchars($user['user_id']) ?>" tabindex="-1" aria-labelledby="<?= 'deleteModalLabel' . htmlspecialchars($user['user_id']) ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="<?= 'deleteModalLabel' . htmlspecialchars($user['user_id']) ?>">Suppression d'un utilisateur</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Êtes-vous sûr de vouloir supprimer l'utilisateur <br><?= htmlspecialchars($user['user_prenom']) ?> <?= htmlspecialchars($user['user_nom']) ?> - Statut : <?= htmlspecialchars($user['user_role']) ?>
                      <input type="hidden" id="user_d" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-danger" name="user_action" value="delete">Supprimer</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="container text-center pt-3">
            <hr style="width: 100%;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>
</section>
<!-- Gestion des Utilisateurs | Fin -->