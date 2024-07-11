<?php

// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM navlinks";
$stmt = $db->query($sql);
$navlinks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ de la navbar a été soumis
if (isset($_POST['action-navbar'])) {
  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $lien = $_POST['lien'];
  $class = $_POST['class'];
  $title = $_POST['title'];
  $ico = $_POST['ico'];

  // Requête pour mettre à jour les liens de la navbar
  $sql = "UPDATE navlinks SET nom = :nom, lien = :lien, class = :class, title = :title, ico = :ico WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':lien', $lien);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':class', $class);
  $stmt->bindParam(':ico', $ico);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}



$db = null;
$stmt = null;
