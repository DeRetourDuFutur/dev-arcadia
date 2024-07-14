<?php

// Durée de vie de la session en secondes
$dureeVieSession = 300; // 5 minutes   

// Vérifie si la clé 'derniereActivite' est présente dans $_SESSION
if (isset($_SESSION['derniereActivite']) && (time() - $_SESSION['derniereActivite'] > $dureeVieSession)) {
  // Détruit la session et redirige vers la page de connexion
  session_unset(); // Supprime toutes les variables de session
  session_destroy(); // Détruit la session
  // header('Location: ' . BASE_URL);
  header('Location: /');
  exit;
}

// Mise à jour le timestamp de la dernière activité
$_SESSION['derniereActivite'] = time();
