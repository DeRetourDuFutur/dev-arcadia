<?php
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

// Vérifier si la session est valide
if (isset($_SESSION['access'])) {
  // Vérifier si le statut est "admin"
  if ($_SESSION['access'] === 'admin') {
    // Afficher la table des utilisateurs en triant d'abord par statut et ensuite par rôle
    $sql = "SELECT * FROM users ORDER BY statut = 1 DESC, access ASC";
    $stmt = $db->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


    $db = null;
    $stmt = null;
  }
}
