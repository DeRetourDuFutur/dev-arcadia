<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'u667243348_web_dev');
define('DB_PASSWORD', 'AMoZ@I?9arc');
define('DB_NAME', 'u667243348_dev_arcadia');

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
