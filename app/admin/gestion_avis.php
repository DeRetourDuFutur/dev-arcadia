<?php

// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer les avis
$sql = "SELECT * FROM commentaires ORDER BY commentaire_date DESC";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ des avis a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $commentaire_id = $_POST['commentaire_id'];
  $commentaire_statut = $_POST['commentaire_statut'];

  // Requête pour mettre à jour le statut du avis
  $sql = "UPDATE commentaires SET commentaire_statut = :commentaire_statut WHERE commentaire_id = :commentaire_id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':commentaire_id', $commentaire_id);
  $stmt->bindValue(':commentaire_statut', $commentaire_statut);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

$db = null;
$stmt = null;
