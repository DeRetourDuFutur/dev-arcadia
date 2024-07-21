<?php

// Initialiser la variable $db
$db = Database::$pdo;

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM navlinks";
$stmt = $db->query($sql);
$navlinks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ de la navbar a été soumis
if (isset($_POST['navlink_action'])) {
  $navlink_id = $_POST['navlink_id'];
  $navlink_nom = $_POST['navlink_nom'];
  $navlink_lien = $_POST['navlink_lien'];
  $navlink_class = $_POST['navlink_class'];
  $navlink_title = $_POST['navlink_title'];
  $navlink_ico = $_POST['navlink_ico'];

  // Requête pour mettre à jour les liens de la navbar
  $sql = "UPDATE navlinks SET navlink_nom = :navlink_nom, navlink_lien = :navlink_lien, navlink_class = :navlink_class, navlink_title = :navlink_title, navlink_ico = :navlink_ico WHERE navlink_id = :navlink_id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':navlink_nom', $navlink_nom);
  $stmt->bindParam(':navlink_lien', $navlink_lien);
  $stmt->bindParam(':navlink_title', $navlink_title);
  $stmt->bindParam(':navlink_class', $navlink_class);
  $stmt->bindParam(':navlink_ico', $navlink_ico);
  $stmt->bindParam(':navlink_id', $navlink_id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

$db = null;
$stmt = null;
