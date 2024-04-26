<?php require_once 'config.php'; ?>

<?php
require 'inc/header.php';
?>

<?php
$requestUri = $_SERVER['REQUEST_URI'];

$routes = [
    BASE_URL . '/' => 'templates/home.php',
    BASE_URL . '/animaux' => 'templates/animaux.php',
    BASE_URL . '/informations' => 'templates/informations.php',
    BASE_URL . '/services' => 'templates/services.php',
    BASE_URL . '/jeux' => 'templates/jeux.php',
];

if (array_key_exists($requestUri, $routes)) {
    require_once $routes[$requestUri];
} else {
    require_once 'templates/404.php';
}
?>

<?php
require 'inc/footer.php';
?>