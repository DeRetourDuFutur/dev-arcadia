<?php

// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM navlinks_admin";
$stmt = $db->query($sql);
$navlinks_admin = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire a été soumis
if (isset($_POST['navlink_admin_action'])) {
  $navlink_admin_id = $_POST['navlink_admin_id'];
  $navlink_admin_nom = $_POST['navlink_admin_nom'];
  $navlink_admin_ico = $_POST['navlink_admin_ico'];
  $navlink_admin_lien = $_POST['navlink_admin_lien'];
  $navlink_admin_class = $_POST['navlink_admin_class'];
  $navlink_admin_title = $_POST['navlink_admin_title'];
  $navlink_admin_a = $_POST['navlink_admin_a'];
  $navlink_admin_e = $_POST['navlink_admin_e'];
  $navlink_admin_v = $_POST['navlink_admin_v'];


  // Requête pour mettre à jour les liens de la navbar Admin
  $sql = "UPDATE navlinks_admin SET navlink_admin_nom = :navlink_admin_nom, navlink_admin_lien = :navlink_admin_lien, navlink_admin_title = :navlink_admin_title, navlink_admin_ico = :navlink_admin_ico, navlink_admin_class = :navlink_admin_class, navlink_admin_a = :navlink_admin_a, navlink_admin_e = :navlink_admin_e, navlink_admin_v = :navlink_admin_v WHERE navlink_admin_id = :navlink_admin_id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':navlink_admin_nom', $navlink_admin_nom);
  $stmt->bindParam(':navlink_admin_lien', $navlink_admin_lien);
  $stmt->bindParam(':navlink_admin_title', $navlink_admin_title);
  $stmt->bindParam(':navlink_admin_ico', $navlink_admin_ico);
  $stmt->bindParam(':navlink_admin_class', $navlink_admin_class);
  $stmt->bindParam(':navlink_admin_a', $navlink_admin_a);
  $stmt->bindParam(':navlink_admin_e', $navlink_admin_e);
  $stmt->bindParam(':navlink_admin_v', $navlink_admin_v);
  $stmt->bindParam(':navlink_admin_id', $navlink_admin_id);
  $stmt->execute();

  // Rafraichir la page automatiquement
  header("Refresh:0");
}

$db = null;
$stmt = null;
