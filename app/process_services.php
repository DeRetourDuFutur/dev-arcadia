<?php

// Requête pour récupérer tous les services
$sql = "SELECT * FROM services WHERE statut=1 ORDER BY id ASC";
$stmt = $db->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
