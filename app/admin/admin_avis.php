<?php

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $statut = $_POST['statut'];
  $id = $_POST['id'];

  // Requête pour mettre à jour le statut du commentaire
  $sql = "UPDATE commentaires SET statut = :statut WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':statut', $statut);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
}

// Requête pour récupérer tous les commentaires
$sql = "SELECT * FROM commentaires ORDER BY date_com DESC LIMIT 30";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
