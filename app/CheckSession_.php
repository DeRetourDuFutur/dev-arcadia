<?php

// Classe pour vérifier la session
class CheckSession
{
  private $dureeVieSession = 900;

  /**
   * Configure les informations liées à la session
   */
  public function configureSession()
  {
    session_set_cookie_params([
      'lifetime' => 0,
      'secure' => true,
      'httponly' => true,
      'samesite' => 'Strict',
    ]);
  }

  public function start()
  {
    $this->configureSession();
    session_start();
  }

  /** 
   * Méthode pour vérifier la session
   */
  public function check()
  {
    // Vérifie si la clé 'derniereActivite' est présente dans $_SESSION
    if (isset($_SESSION['derniereActivite']) && (time() - $_SESSION['derniereActivite'] > $this->dureeVieSession)) {
      // Détruit la session et redirige vers la page de connexion
      session_unset(); // Supprime toutes les variables de session
      session_destroy(); // Détruit la session
      header('Location: ' . BASE_URL . '/');
      exit;
    }

    // Mise à jour le timestamp de la dernière activité
    $_SESSION['derniereActivite'] = time();
  }
}
