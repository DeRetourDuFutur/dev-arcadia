<?php

// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer le logo du site
$sql = "SELECT * FROM logos";
$stmt = $db->query($sql);
$logos = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ du logo a été soumis
if (isset($_POST['logo_action'])) {
  $logo_id = $_POST['logo_id'];
  $logo_txtgfront = $_POST['logo_txtgfront'];
  $logo_txtdfront = $_POST['logo_txtdfront'];
  $logo_txtgback = $_POST['logo_txtgback'];
  $logo_txtdback = $_POST['logo_txtdback'];
  $logo_icof = $_POST['logo_icof'];
  $logo_icob = $_POST['logo_icob'];
  $logo_imgfront = $_POST['logo_imgfront'];
  $logo_imgback = $_POST['logo_imgback'];
  $logo_lien = $_POST['logo_lien'];
  $logo_title = $_POST['logo_title'];

  // Requête pour mettre à jour le logo du site
  $sql = "UPDATE logos SET logo_txtgfront = :logo_txtgfront, logo_txtdfront = :logo_txtdfront, logo_txtgback = :logo_txtgback, logo_txtdback = :logo_txtdback, logo_icof = :logo_icof, logo_icob = :logo_icob, logo_imgfront = :logo_imgfront, logo_imgback = :logo_imgback, logo_lien = :logo_lien, logo_title = :logo_title WHERE logo_id = :logo_id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':logo_txtgfront', $logo_txtgfront);
  $stmt->bindParam(':logo_txtdfront', $logo_txtdfront);
  $stmt->bindParam(':logo_txtgback', $logo_txtgback);
  $stmt->bindParam(':logo_txtdback', $logo_txtdback);
  $stmt->bindParam(':logo_icof', $logo_icof);
  $stmt->bindParam(':logo_icob', $logo_icob);
  $stmt->bindParam(':logo_imgfront', $logo_imgfront);
  $stmt->bindParam(':logo_imgback', $logo_imgback);
  $stmt->bindParam(':logo_lien', $logo_lien);
  $stmt->bindParam(':logo_title', $logo_title);
  $stmt->bindParam(':logo_id', $logo_id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  // header("Refresh:0");
}

// Fermeture de la connexion
$db = null;
$stmt = null;
