<?php
// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer toutes les races
$sql = "SELECT * FROM races ORDER BY id ASC";
$stmt = $db->query($sql);
$races = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
