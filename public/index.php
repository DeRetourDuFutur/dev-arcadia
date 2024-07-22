<?php
require_once '../config/config.php';
require_once '../config/db_config.php';
require_once '../app/functions.php';
require_once '../app/Database.php';
require_once '../app/FileUploader.php';
require_once '../app/Router.php';
require_once '../app/CheckSession.php';
require_once '../app/CheckConnection.php';

$checkSession = new CheckSession();
$checkSession->start();

$checkConnection = new CheckConnection();

Database::connect();

// Initialiser la variable $db (provenant de db_config.php)
$db = Database::$pdo;


// Vérifier si une session est connectée
if (!isset($_SESSION)) {
  session_start();
}

// Récupérer l'URI de la requête
Router::handleRequest();

$currentRoute = Router::getCurrentRoute();
$routes = Router::getRoutes();

//  Démarrer la temporisation de sortie
ob_start();
if (array_key_exists($currentRoute['uri'], $routes)) {
  if (str_contains($currentRoute['template'], 'admin') && $currentRoute['uri'] !== BASE_URL . '/login' && !$checkConnection->isUserLoggedIn()) {
    header('Location: ' . BASE_URL . '/login');
    exit;
  }
  if ($checkConnection->isUserLoggedIn()) $checkSession->check();
  require_once $routes[$currentRoute['uri']];
} else {
  require_once '../templates/404.php';
}
// Récupérer le contenu du tampon de sortie
$body = ob_get_clean();

// Afficher le contenu du tampon de sortie
require_once '../templates/inc/header.php';
if ($checkConnection->isUserLoggedIn()) {
  require_once '../templates/admin/navlink_admin.php';
  require_once '../templates/admin/dashboard_welcome.php';
}
echo $body;
require_once '../templates/inc/footer.php';
