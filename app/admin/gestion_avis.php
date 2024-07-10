<?php

// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer les commentaires
$sql = "SELECT * FROM commentaires ORDER BY date_com DESC";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ des avis a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $pseudo = $_POST['pseudo'];
  $commentaire = $_POST['commentaire'];
  $note = $_POST['note'];
  $date_com = $_POST['date_com'];
  $statut = $_POST['statut'];

  // Requête pour mettre à jour le statut du commentaire
  $sql = "UPDATE commentaires SET statut = :statut WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->bindValue(':statut', $statut);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

$db = null;
$stmt = null;
