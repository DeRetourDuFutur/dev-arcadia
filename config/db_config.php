<?php
// Définir les constantes de connexion à la base de données
define('DB_HOST', 'localhost'); // Nom d'hôte du serveur de base de données
define('DB_USER', 'u667243348_arcadia_sql'); // Nom d'utilisateur de la base de données
define('DB_PASSWORD', 'Z=lrN!u9'); // Mot de passe de la base de données
define('DB_NAME', 'u667243348_arcadia'); // Nom de la base de données

define('DB_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);

// Se connecter à la base de données
function db_connect()
{
  try {
    $db = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
  }

  return $db;
}
