<?php

// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM dalinks";
$stmt = $db->query($sql);
$dalinks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire a été soumis
if (isset($_POST['action-nb-admin'])) {
  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $lien = $_POST['lien'];
  $title = $_POST['title'];
  $ico = $_POST['ico'];

  // Requête pour mettre à jour les liens de la navbar
  $sql = "UPDATE dalinks SET nom = :nom, lien = :lien, title = :title, ico = :ico WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':lien', $lien);
  $stmt->bindParam(':title', $title);
  $stmt->bindParam(':ico', $ico);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}


$db = null;
$stmt = null;
