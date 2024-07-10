<?php

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
  header('Location: ' . BASE_URL . '/dashboard');
  die();
}

// Initialisation des variables
$email = "";
$password = "";
$statut = "";
$errorMessage = "";

// Traitement du formulaire de connexion
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['pwd'];

  // Vérification des informations d'identification
  $sql = "SELECT * FROM users WHERE email = :email AND pwd = :pwd";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':pwd', $password);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!$result) {
    $errorMessage = "Identifiants incorrects";
  } else {
    $accessLevel = $result['access'];
    $statut = $result['statut'];

    if ($statut != 1) {
      $errorMessage = "Vos identifiants ne sont plus valables. Veuillez contacter l'administrateur à l'adresse <a href='mailto:admin_arcadia@techno2main.fr'>admin_arcadia@techno2main.fr</a>.";
    } else {
      $_SESSION['loggedIn'] = true;
      $_SESSION['prenom'] = $result['prenom'];
      $_SESSION['nom'] = $result['nom'];
      $_SESSION['access'] = $accessLevel;

      if (empty($errorMessage)) {
        header('Location: ' . BASE_URL . '/dashboard');
        die();
      }
    }
  }
}
