<?php

class CheckConnection
{
  public function __construct()
  {
    // Vérifier si une session est connectée
    if (!$this->isUserLoggedIn()) {
      // Rediriger vers la page de login si aucune session n'est connectée
      header('Location: ' . $this->getBaseUrl() . '/login');
      exit;
    }
  }

  private function isUserLoggedIn()
  {
    // Votre logique de vérification de session ici
    return (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true);
    // Retourne true si l'utilisateur est connecté, sinon false
  }

  private function getBaseUrl()
  {
    // Votre logique pour obtenir l'URL de base ici
    return BASE_URL;
    // Retourne l'URL de base de votre application
  }
}

// Utilisation de la classe CheckConnection
$checkConnection = new CheckConnection();
