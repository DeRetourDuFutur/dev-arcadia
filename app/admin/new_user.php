<?php
// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $access = $_POST['access'];
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $date_inscrit = $_POST['date_inscrit'];
  $statut = $_POST['statut'];

  // Requête pour ajouter un nouvel utilisateur
  $sql = "INSERT INTO users (prenom, nom, email, pwd, access, date_inscrit, statut) VALUES (:prenom, :nom, :email, :pwd, :access, :date_inscrit, :statut)";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':prenom', $prenom);
  $stmt->bindValue(':nom', $nom);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':pwd', $pwd);
  $stmt->bindValue(':access', $access);
  $stmt->bindValue(':date_inscrit', $date_inscrit);
  $stmt->bindValue(':statut', $statut);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");

  // Vérifier si la session est valide
  if (isset($_SESSION['access'])) {
    // Vérifier si le statut est "admin"
    if ($_SESSION['access'] === 'admin') {
      // Afficher la table des utilisateurs
      $sql = "SELECT * FROM users ORDER BY access ASC";
      $stmt = $db->query($sql);
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

      $db = null;
      $stmt = null;
    }
  }
}
