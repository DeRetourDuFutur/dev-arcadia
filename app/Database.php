<?php

// Classe pour la connexion à la base de données
class Database
{
  // Attributs statiques de la classe   
  public static PDO|null $pdo;
  public static PDOStatement|null $statement;

  // Méthode pour se connecter à la base de données
  public static function connect()
  {
    try {
      self::$pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    } catch (PDOException) {
      die('Erreur de connexion à la base de données');
    }
  }

  //  Déconnexion de la base de données
  public static function disconnect()
  {
    self::$pdo = null;
    self::$statement = null;
  }
}
