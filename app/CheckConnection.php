<?php

class CheckConnection
{
  public function isUserLoggedIn()
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
