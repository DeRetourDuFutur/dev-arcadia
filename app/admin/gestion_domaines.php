<?php
// Initialiser la variable $db
$db = db_connect();
// Création d'une instance PDO pour la connexion à la base de données
try {
  $pdo = $db;
  // Configuration des attributs PDO pour gérer les erreurs
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Requête pour récupérer tous les domaines avec la jointure des tables animaux et domaines
$sql = "SELECT domaines.* FROM domaines JOIN animaux ON animaux.domaines_id = domaines.id";
$stmt = $pdo->query($sql);
// Récupération des résultats
$domaines = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fermer la connexion à la base de données
$db = null;
// Fermer la requête préparée
$stmt = null;
// Fermer la connexion PDO
$pdo = null;
