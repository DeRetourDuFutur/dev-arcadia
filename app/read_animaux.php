<?php
// Initialiser la variable $db
$db = db_connect();
try {
  $pdo = $db;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données : " . $e->getMessage());
}
// Requête SQL pour récupérer les animaux (avec les jointures entre animaux/races/domaines)
$sql = "SELECT animaux.*, races.race_nom, domaines.domaine_name, etats.etat_type, foods.food_type, unites.unite_type  
        FROM animaux 
        LEFT JOIN races ON animaux.animal_race_id = races.race_id
        LEFT JOIN domaines ON animaux.animal_domaine_id = domaines.domaine_id
        LEFT JOIN etats ON animaux.animal_etat_id = etats.etat_id
        LEFT JOIN foods ON animaux.animal_food_id = foods.food_id
        LEFT JOIN unites ON animaux.animal_unite_id = unites.unite_id";

// Exécution de la requête
$stmt = $pdo->prepare($sql);
// Récupération des résultats
$habitats = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $animal = [
    'animal_id' => $row['animal_id'],
    'animal_prenom' => $row['animal_prenom'],
    'animal_age' => $row['animal_age'],
    'animal_poids' => $row['animal_poids'],
    'animal_statut' => $row['animal_statut'],
    'animal_domaine_id' => $row['animal_domaine_id'],
    'animal_visuel' => $row['animal_visuel'],
    'animal_race_id' => $row['animal_race_id'],
    'race_nom' => $row['race_nom'],
    'etat_type' => $row['etat_type'],
    'food_type' => $row['food_type'],
    'unite_type' => $row['unite_type'],
    'domaine_name' => $row['domaine_name'],

  ];

  // Stocker le nom du domaine dans une variable
  $habitatName = $row['domaine_name'];

  // Créer un tableau associatif pour chaque habitat, incluant le nom du domaine
  $habitats[$row['animal_domaine_id']]['domaine'] = $row['domaine_name'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race_id'] = $row['animal_race_id'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race'] = $row['race_nom'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['animaux'][$row['animal_id']] = $animal;
}

// Fermer la requête préparée
$stmt = null;
// Fermer la connexion à la base de données
$db = null;
