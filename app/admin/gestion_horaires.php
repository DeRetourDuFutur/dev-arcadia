<?php

// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer tous les horaires
$sql = "SELECT * FROM horaires";
$stmt = $db->query($sql);
$horaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérifier si le formulaire de MAJ des horaires a été soumis
if (isset($_POST['horaire_action'])) {
  $horaire_id = $_POST['horaire_id'];
  $horaire_jour = $_POST['horaire_jour'];
  $horaire_ouverture = $_POST['horaire_ouverture'];
  $horaire_fermeture = $_POST['horaire_fermeture'];

  // Récupérer les données du formulaire
  $horaire_id = $_POST['horaire_id'];
  $horaire_jour = $_POST['horaire_jour'];
  $horaire_ouverture = $_POST['horaire_ouverture'];
  $horaire_fermeture = $_POST['horaire_fermeture'];

  // Requête pour mettre à jour les horaires
  $sql = "UPDATE horaires SET horaire_jour = :horaire_jour, horaire_ouverture = :horaire_ouverture, horaire_fermeture = :horaire_fermeture WHERE horaire_id = :horaire_id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':horaire_jour', $horaire_jour);
  $stmt->bindValue(':horaire_ouverture', $horaire_ouverture);
  $stmt->bindValue(':horaire_fermeture', $horaire_fermeture);
  $stmt->bindValue(':horaire_id', $horaire_id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

$db = null;
$stmt = null;
