<?php
require_once '../app/admin/gestion_users.php';
?>
<!-- Gestion des Utilisateurs | Début -->
<section id="users">
  <div class="container">
    <div class="fadeInUp row col-lg-12 pt-5" data-wow-delay="0.1s">
      <h6 class="text-left mb-3"><i class="fa-solid fa-square-caret-down fa-xl text-secondary me-3"></i><span>DASHBOARD</span> | <span class="text-primary">GESTION UTILISATEURS </span></h6>
      <?php foreach ($users as $user) : ?>
        <div class="col-lg-3 mb-4">
          <form method="POST" class="<?php if ($user['statut'] == 0) echo 'text-decoration-line-through'; ?>">
            <input type="hidden" id="id" name="id" value="<?= $user['id'] ?>">
            <div class="alert alert-secondary my-0">
              <label for="access" class="ms-1">RÔLE</label>
              <select class="form-control" id="access" name="access">
                <option value="admin" <?php if ($user['access'] == 'admin') echo 'selected'; ?>>ADMINISTRATEUR</option>
                <option value="employee" <?php if ($user['access'] == 'employee') echo 'selected'; ?>>EMPLOYE</option>
                <option value="veto" <?php if ($user['access'] == 'veto') echo 'selected'; ?>>VETERINAIRE</option>
              </select>
            </div>
            <div class="alert alert-secondary my-0">
              <label for="email" class="ms-1">IDENTIFIANT</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>
            </div>
            <div class="alert alert-secondary my-0">
              <label for="pwd" class="ms-1">MOT DE PASSE</label>
              <input type="text" class="form-control" id="pwd" name="pwd" value="<?php echo $user['pwd']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="prenom" class="ms-1">PR&Eacute;NOM</label>
              <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $user['prenom']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="nom" class="ms-1">NOM</label>
              <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $user['nom']; ?>">
            </div>
            <div class="alert alert-secondary my-0">
              <label for="date_inscrit" class="ms-1">DATE DE CR&Eacute;ATION</label>
              <input type="text" class="form-control" id="date_inscrit" name="date_inscrit" value="<?php echo $user['date_inscrit']; ?>" readonly>
            </div>
            <div class="alert alert-secondary my-0">
              <label for="statut" class="ms-1" style="<?php if ($user['statut'] == 0) echo 'color: red'; ?>"><?php echo ($user['statut'] == 0) ? 'STATUT INACTIF' : 'STATUT ACTIF'; ?></label>
              <select class="form-control" id="statut" name="statut">
                <option value="1" <?php if ($user['statut'] == 1) echo 'selected'; ?>>OUI</option>
                <option value="0" <?php if ($user['statut'] == 0) echo 'selected'; ?>>NON</option>
              </select>
            </div>
            <div class="d-flex justify-content-evenly pt-3">
              <button type="submit" class="btn btn-primary-color" name="action" value="update" style="width: 30%;">MAJ</button>
              <!-- <button type="submit" class="btn btn-danger" name="action" value="delete" style="width: 30%;">SUP</button> -->
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= 'deleteModal' . $user['id'] ?>" style="width: 30%;" title="Supprimer l'utilisateur de la base de données"><i class="fa-solid fa-user-minus"></i></button>

              <!-- Modal -->
              <div class="modal fade" id="<?= 'deleteModal' . $user['id'] ?>" tabindex="-1" aria-labelledby="<?= 'deleteModalLabel' . $user['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="<?= 'deleteModalLabel' . $user['id'] ?>">Suppression d'un utilisateur</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                      <input type="hidden" id="id" name="id" value="<?= $user['id'] ?>">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-danger" name="action" value="delete">Supprimer</button>
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