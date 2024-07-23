<?php

<?php

// Initialiser la variable $db
$db = Database::$pdo;

// Requête pour récupérer les commentaires
$sql = "SELECT * FROM users ORDER BY user_role ASC";
$stmt = $db->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $user_id = htmlspecialchars($_POST['user_id']);
  $user_role = htmlspecialchars($_POST['user_role']);
  $user_pwd = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);
  $user_prenom = htmlspecialchars($_POST['user_prenom']);
  $user_nom = htmlspecialchars($_POST['user_nom']);
  $user_email = htmlspecialchars($_POST['user_email']);
  $user_date = htmlspecialchars($_POST['user_date']);
  $user_statut = htmlspecialchars($_POST['user_statut']);

  // Requête pour mettre à jour les utilisateurs
  $sql = "UPDATE users SET user_role = :user_role, user_prenom = :user_prenom, user_nom = :user_nom, user_pwd = :user_pwd, user_email = :user_email, user_date = :user_date, user_statut = :user_statut WHERE user_id = :user_id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':user_role', $user_role);
  $stmt->bindValue(':user_prenom', $user_prenom);
  $stmt->bindValue(':user_nom', $user_nom);
  $stmt->bindValue(':user_pwd', $user_pwd);
  $stmt->bindValue(':user_email', $user_email);
  $stmt->bindValue(':user_date', $user_date);
  $stmt->bindValue(':user_statut', $user_statut);
  $stmt->bindValue(':user_id', $user_id);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

// Traitement de la suppression d'un user
if (isset($_POST['user_action']) &&   $_POST['user_action'] === 'delete') {
  $id = $_POST['user_id'];

  // Exécuter la requête de suppression
  $sql = "DELETE FROM users WHERE user_id = :user_id";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':user_id', $id);
  $stmt->execute();
}

$db = null;
$stmt = null;
