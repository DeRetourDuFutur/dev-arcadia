<?php
// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer toutes les races
$sql = "SELECT * FROM races ORDER BY race_id ASC";
$stmt = $db->query($sql);
$races = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fermeture de la connexion
$db = null;
$stmt = null;
