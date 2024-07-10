<?php

// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer le logo du site
$sql = "SELECT * FROM logos";
$stmt = $db->query($sql);
$logos = $stmt->fetch(PDO::FETCH_ASSOC);


// Vérifier si le formulaire de MAJ du logo a été soumis
if (isset($_POST['action-logos'])) {
  $id = $_POST['id'];
  $txtgfront = $_POST['txtgfront'];
  $txtdfront = $_POST['txtdfront'];
  $txtgback = $_POST['txtgback'];
  $txtdback = $_POST['txtdback'];
  $icof = $_POST['icof'];
  $icob = $_POST['icob'];
  $imgfront = $_POST['imgfront'];
  $imgback = $_POST['imgback'];
  $lien = $_POST['lien'];
  $title = $_POST['title'];

  // Requête pour mettre à jour le logo du site
  $sql = "UPDATE logos SET txtgfront = :txtgfront, txtdfront = :txtdfront, txtgback = :txtgback, txtdback = :txtdback, icof = :icof, icob = :icob, imgfront = :imgfront, imgback = :imgback, lien = :lien, title = :title WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':txtgfront', $txtgfront);
  $stmt->bindParam(':txtdfront', $txtdfront);
  $stmt->bindParam(':txtgback', $txtgback);
  $stmt->bindParam(':txtdback', $txtdback);
  $stmt->bindParam(':icof', $icof);
  $stmt->bindParam(':icob', $icob);
  $stmt->bindParam(':imgfront', $imgfront);
  $stmt->bindParam(':imgback', $imgback);
  $stmt->bindParam(':lien', $lien);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}


$db = null;
$stmt = null;
