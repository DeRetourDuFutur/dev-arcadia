<?php
// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $user_id = $_POST['user_id'];
  $user_access = $_POST['user_access'];
  $user_prenom = $_POST['user_prenom'];
  $user_nom = $_POST['user_nom'];
  $user_email = $_POST['user_email'];
  $user_pwd = $_POST['user_pwd'];
  $user_confirm_pwd = $_POST['user_confirm_pwd'];
  $user_date_inscrit = $_POST['user_date_inscrit'];
  $user_statut = $_POST['user_statut'];

  // Requête pour ajouter un nouvel utilisateur
  $sql = "INSERT INTO users (user_prenom, user_nom, user_email, user_pwd, user_access, user_date_inscrit, user_statut) VALUES (:user_prenom, :user_nom, :user_email, :user_pwd, :user_access, :user_date_inscrit, :user_statut)";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':user_prenom', $user_prenom);
  $stmt->bindValue(':user_nom', $user_nom);
  $stmt->bindValue(':user_email', $user_email);
  $stmt->bindValue(':user_pwd', $user_pwd);
  $stmt->bindValue(':user_access', $user_access);
  $stmt->bindValue(':user_date_inscrit', $user_date_inscrit);
  $stmt->bindValue(':user_statut', $user_statut);
  $stmt->execute();

  // Vérifier si la session est valide
  if (isset($_SESSION['user_access'])) {
    // Vérifier si le statut est "admin"
    if ($_SESSION['user_access'] === 'admin') {
      // Afficher la table des utilisateurs
      $sql = "SELECT * FROM users ORDER BY user_access ASC";
      $stmt = $db->query($sql);
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

      $db = null;
      $stmt = null;
    }
  }
}
