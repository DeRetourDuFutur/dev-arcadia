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
$sql = "SELECT animaux.*, races.race_nom, domaines.domaine_name 
        FROM animaux 
        JOIN races ON animaux.animal_race_id = races.race_id 
        JOIN domaines ON animaux.animal_domaine_id = domaines.domaine_id";
// Exécution de la requête
$stmt = $pdo->query($sql);
// Récupération des résultats
$habitats = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $animal = [
    'animal_id' => $row['animal_id'],
    'animal_prenom' => $row['animal_prenom'],
    'animal_age' => $row['animal_age'],
    'animal_poids' => $row['animal_poids'],
    'animal_sante' => $row['animal_sante'],
    'animal_statut' => $row['animal_statut'],
    'animal_domaine_id' => $row['animal_domaine_id'],
    'animal_dossier' => $row['animal_dossier'],
    'animal_photo' => $row['animal_photo'],
    'animal_race_id' => $row['animal_race_id'],
    'race_nom' => $row['race_nom'],
    'domaine_name' => $row['domaine_name']
  ];

  // Stocker le nom du domaine dans une variable
  $habitatName = $row['domaine_name'];

  // Créer un tableau associatif pour chaque habitat, incluant le nom du domaine
  $habitats[$row['animal_domaine_id']]['domaine'] = $row['domaine_name'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race_id'] = $row['animal_race_id'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race'] = $row['race_nom'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['animaux'][$row['animal_id']] = $animal;
}

// Fermer la connexion à la base de données
$db = null;
// Fermer la requête préparée
$stmt = null;
