<?php

// Classe pour vérifier la session
class CheckSession
{
  private $dureeVieSession;

  // Constructeur de la classe avec une durée de vie de session par défaut de 900 secondes (15 minutes)
  public function __construct($dureeVieSession = 900)
  {
    $this->dureeVieSession = $dureeVieSession;
  }

  // Méthode pour vérifier la session
  public function check()
  {
    session_start();

    // Vérifie si la clé 'derniereActivite' est présente dans $_SESSION
    if (isset($_SESSION['derniereActivite']) && (time() - $_SESSION['derniereActivite'] > $this->dureeVieSession)) {
      // Détruit la session et redirige vers la page de connexion
      session_unset(); // Supprime toutes les variables de session
      session_destroy(); // Détruit la session
      header('Location: /');
      exit;
    }

    // Mise à jour le timestamp de la dernière activité
    $_SESSION['derniereActivite'] = time();
  }
}

$checkSession = new CheckSession();
$checkSession->check();
