<?php require_once '../config/config.php'; ?>
<?php require_once '../config/db_config.php'; ?>

<?php $db = db_connect(); ?>

<?php
require_once '../vendor/autoload.php';

// Config pour BDD non relationnelle (SleekDB)
use SleekDB\Store;

$statsAnimauxDb = new Store("statsAnimaux", '../databases', ["timeout" => false]);
// $statsAnimauxDb->insert(['animaux' => 'chien']);
?>

<?php
require '../templates/inc/header.php';
?>

<?php
$requestUri = $_SERVER['REQUEST_URI'];

$routes = [
  BASE_URL . '/' => '../templates/home.php',
  BASE_URL . '/about' => '../templates/about.php',
  BASE_URL . '/animaux' => '../templates/animaux.php',
  BASE_URL . '/informations' => '../templates/informations.php',
  BASE_URL . '/services' => '../templates/services.php',
  BASE_URL . '/label' => '../templates/label.php',
  BASE_URL . '/jeux' => '../templates/jeux.php',
  BASE_URL . '/avis' => '../templates/avis.php',
  BASE_URL . '/process-avis' => '../templates/process_avis.php',
  BASE_URL . '/contact' => '../templates/contact.php',
  BASE_URL . '/process-contact' => '../templates/process_contact.php',
  BASE_URL . '/gestion-services' => '../templates/admin/gestion_services.php',
  BASE_URL . '/gestion-avis' => '../templates/admin/gestion_avis.php',


];

if (array_key_exists($requestUri, $routes)) {
  require_once $routes[$requestUri];
} else {
  require_once '../templates/404.php';
}
?>

<?php
require '../templates/inc/footer.php';
?>