<?php
// Initialiser la variable $db
$db = db_connect();

try {
  $pdo = $db;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Requête SQL avec double jointure pour inclure les races et les domaines
$sql = "SELECT animaux.*, races.race_name, domaines.domaine_name 
        FROM animaux 
        JOIN races ON animaux.races_id = races.id 
        JOIN domaines ON animaux.domaines_id = domaines.id";

// Exécution de la requête
$stmt = $pdo->query($sql);

// Récupération des résultats
$habitats = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $animal = [
    'id' => $row['id'],
    'prenom' => $row['prenom'],
    'age' => $row['age'],
    'poids' => $row['poids'],
    'sante' => $row['sante'],
    'statut' => $row['statut'],
    'domaines_id' => $row['domaines_id'],
    'dossier' => $row['dossier'],
    'photo' => $row['photo'],
    'races_id' => $row['races_id'],
    'race_name' => $row['race_name'],
  ];

  $habitats[$row['domaine_name']]['races'][$row['races_id']]['id'] = $row['races_id'];
  $habitats[$row['domaine_name']]['races'][$row['races_id']]['race'] = $row['race_name'];
  $habitats[$row['domaine_name']]['races'][$row['races_id']]['animaux'][$row['id']] = $animal;
}

// Fermer la connexion à la base de données
$db = null;
// Fermer la requête préparée
$stmt = null;
