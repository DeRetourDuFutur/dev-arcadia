<?php

// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer les commentaires
$sql = "SELECT * FROM users";
$stmt = $db->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $access = $_POST['access'];
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $date_inscrit = $_POST['date_inscrit'];
  $statut = $_POST['statut'];

  // Requête pour mettre à jour les utilisateurs
  $sql = "UPDATE users SET access = :access, prenom = :prenom, nom = :nom, email = :email, date_inscrit = :date_inscrit, statut = :statut WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':access', $access);
  $stmt->bindValue(':prenom', $prenom);
  $stmt->bindValue(':nom', $nom);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':date_inscrit', $date_inscrit);
  $stmt->bindValue(':statut', $statut);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

// Traitement de la suppression d'un user
if (isset($_POST['action']) &&   $_POST['action'] === 'delete') {
  $id = $_POST['id'];

  // Exécuter la requête de suppression
  $sql = "DELETE FROM users WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

$db = null;
$stmt = null;
