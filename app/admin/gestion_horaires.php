<?php

// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer tous les horaires
$sql = "SELECT * FROM horaires";
$stmt = $db->query($sql);
$horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ des horaires a été soumis
if (isset($_POST['action-horaires'])) {
  $id = $_POST['id'];
  $jour = $_POST['jour'];
  $ouverture = $_POST['ouverture'];
  $fermeture = $_POST['fermeture'];

  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $jour = $_POST['jour'];
  $ouverture = $_POST['ouverture'];
  $fermeture = $_POST['fermeture'];

  // Requête pour mettre à jour les horaires
  $sql = "UPDATE horaires SET jour = :jour, ouverture = :ouverture, fermeture = :fermeture WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':jour', $jour);
  $stmt->bindValue(':ouverture', $ouverture);
  $stmt->bindValue(':fermeture', $fermeture);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
}

$db = null;
$stmt = null;
