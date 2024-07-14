<?php

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
  header('Location: ' . BASE_URL . '/dashboard');
  die();
}

// Initialisation des variables
$user_email = "";
$user_pwd = "";
$user_statut = "";
$user_errorMessage = "";

// Traitement du formulaire de connexion
if (isset($_POST['submit'])) {
  $user_email = $_POST['user_email'];
  $user_pwd = $_POST['user_pwd'];

  // Vérification des informations d'identification
  $sql = "SELECT * FROM users WHERE user_email = :user_email AND user_pwd = :user_pwd";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':user_email', $user_email);
  $stmt->bindParam(':user_pwd', $user_pwd);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!$result) {
    $user_errorMessage = "Identifiants incorrects";
  } else {
    $user_accessLevel = $result['user_access'];
    $user_statut = $result['user_statut'];

    if ($user_statut != 1) {
      $user_errorMessage = "Vos identifiants ne sont plus valables. Veuillez contacter l'administrateur à l'adresse <a href='mailto:admin_arcadia@techno2main.fr'>admin_arcadia@techno2main.fr</a>.";
    } else {
      $_SESSION['loggedIn'] = true;
      $_SESSION['user_prenom'] = $result['user_prenom'];
      $_SESSION['user_nom'] = $result['user_nom'];
      $_SESSION['user_access'] = $accessLevel;

      if (empty($user_errorMessage)) {
        header('Location: ' . BASE_URL . '/dashboard');
        die();
      }
    }
  }
}
