<?php
require_once '../config/config.php';
require_once '../config/db_config.php';

function isUserLoggedIn()
{
  return (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true);
}

// Initialiser la variable $db (provenant de db_config.php)
$db = db_connect();

// Vérifier si une session est connectée
if (!isset($_SESSION)) {
  session_start();
}

// Récupérer l'URI de la requête
$requestUri = $_SERVER['REQUEST_URI'];

// Système de routage php pour les pages du site
$routes = [
  // Routes Public du site
  BASE_URL . '/' => '../templates/home.php',
  BASE_URL . '/about' => '../templates/about.php',
  BASE_URL . '/animaux' => '../templates/animaux.php',
  BASE_URL . '/informations' => '../templates/informations.php',
  BASE_URL . '/label' => '../templates/label.php',
  BASE_URL . '/jeux' => '../templates/jeux.php',
  BASE_URL . '/avis' => '../templates/avis.php',
  BASE_URL . '/contact' => '../templates/contact.php',
  BASE_URL . '/services' => '../templates/services.php',

  // Routes Process du site
  BASE_URL . '/process-avis' => '../app/process_avis.php',
  BASE_URL . '/process-contact' => '../app/process_contact.php',
  BASE_URL . '/logout' => '../app/admin/dashboard_logout.php',
  BASE_URL . '/del-user' => '../app/admin/delete_user.php',
  BASE_URL . '/navbar' => '../app/admin/gestion_navbar.php',
  BASE_URL . '/logos' => '../app/admin/gestion_logos.php',
  BASE_URL . '/horaires' => '../app/admin/gestion_horaires.php',

  // Routes Admin du site
  BASE_URL . '/dashboard' => '../templates/admin/dashboard.php',
  BASE_URL . '/gestion-users' => '../templates/admin/gestion_users.php',
  BASE_URL . '/gestion-horaires' => '../templates/admin/gestion_horaires.php',
  BASE_URL . '/gestion-avis' => '../templates/admin/gestion_avis.php',
  BASE_URL . '/gestion-services' => '../templates/admin/gestion_services.php',
  BASE_URL . '/gestion-animaux' => '../templates/admin/gestion_animaux.php',
  BASE_URL . '/gestion-navbar' => '../templates/admin/gestion_navbar.php',
  BASE_URL . '/gestion-navbar-admin' => '../templates/admin/gestion_navbar_admin.php',
  BASE_URL . '/gestion-logos' => '../templates/admin/gestion_logos.php',
  BASE_URL . '/login' => '../templates/admin/dashboard_login.php',
  BASE_URL . '/new-user' => '../templates/admin/new_user.php',

];

// // Supprimer le dernier élément de la chaîne de caractères
// if (strrpos($requestUri, '/')) {
//   $requestUri = substr($requestUri, 0, strrpos($requestUri, '/'));
// }

//  Démarrer la temporisation de sortie
ob_start();
if (array_key_exists($requestUri, $routes)) {
  if (str_contains($routes[$requestUri], 'admin') && $requestUri !== BASE_URL . '/login' && !isUserLoggedIn()) {
    header('Location: ' . BASE_URL . '/login');
    exit;
  }
  require_once $routes[$requestUri];
} else {
  require_once '../templates/404.php';
}
// Récupérer le contenu du tampon de sortie
$body = ob_get_clean();

// Afficher le contenu du tampon de sortie
require_once '../templates/inc/header.php';
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
  require_once '../templates/admin/navbar_admin.php';
  require_once '../templates/admin/dashboard_welcome.php';
  require_once '../app/admin/check_conn.php';
}
echo $body;
require_once '../templates/inc/footer.php';
