<?php
// INITIALISATION DE LA VARIABLE $db
$db = Database::$pdo;

// REQÊTE POUR RÉCUPÉRER TOUTES LES RACES
$sql = "SELECT * FROM races ORDER BY race_id ASC";
$stmt = $db->query($sql);
$races = $stmt->fetchAll(PDO::FETCH_ASSOC);

// FERMER LA CONNEXION
$db = null;
$stmt = null;
