<?php

// Requête pour récupérer tous les services
$sql = "SELECT * FROM services";
$stmt = $db->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
