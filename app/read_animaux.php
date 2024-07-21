<?php
// INITIALISER LA VARIABLE $DB
$db = Database::$pdo;
try {
  $pdo = $db;
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données : " . $e->getMessage());
}
// REQÊTE SQL POUR RÉCUPÉRER TOUS LES ANIMAUX AVEC LEURS RAPPORTS ASSOCIÉS  
$sql = "SELECT animaux.*, rapports.rapport_food_quantite, rapports.rapport_date, etats.etat_type, foods.food_type, races.race_nom, domaines.domaine_name, domaines.domaine_slogan, domaines.domaine_cover, domaines.domaine_thumbnail, etats.etat_type, foods.food_type, unites.unite_type  
        FROM animaux 
        JOIN races ON animaux.animal_race_id = races.race_id
        JOIN domaines ON animaux.animal_domaine_id = domaines.domaine_id
        LEFT JOIN rapports ON rapports.rapport_animal_id = animaux.animal_id
        LEFT JOIN etats ON rapports.rapport_etat_animal = etats.etat_id
        LEFT JOIN foods ON rapports.rapport_food_type_id = foods.food_id
        LEFT JOIN unites ON rapports.rapport_food_unite_type_id  = unites.unite_id";

// EXÉCUTER LA REQUÊTE
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $animal = [
    'animal_id' => $row['animal_id'],
    'animal_prenom' => $row['animal_prenom'],
    'animal_age' => $row['animal_age'],
    'animal_poids' => $row['animal_poids'],
    'animal_statut' => $row['animal_statut'],
    'animal_domaine_id' => $row['animal_domaine_id'],
    'animal_pays' => $row['animal_pays'],
    'animal_histoire' => $row['animal_histoire'],
    'animal_visuel' => $row['animal_visuel'],
    'animal_race_id' => $row['animal_race_id'],
    'race_nom' => $row['race_nom'],
    'domaine_name' => $row['domaine_name'],
    'domaine_slogan' => $row['domaine_slogan'],
    'domaine_cover' => $row['domaine_cover'],
    'domaine_thumbnail' => $row['domaine_thumbnail'],
    'rapport_date' => $row['rapport_date'] ?? 'Aucun',
    'etat_type' => $row['etat_type'] ?? 'Aucun',
    'food_type' => $row['food_type'] ?? 'Aucun',
    'unite_type' => $row['unite_type'] ?? 'Aucun',
    'animal_food_quantite' => $row['rapport_food_quantite'] ?? 'Aucun',
  ];

  // STOCKER LE NOM DU DOMAINE DANS UNE VARIABLE
  $habitatName = $row['domaine_name'];

  // CRÉER UN TABLEAU ASSOCIATIF POUR CHAQUE DOMAINE  
  $habitats[$row['animal_domaine_id']]['domaine'] = $row['domaine_name'];
  $habitats[$row['animal_domaine_id']]['slogan'] = $row['domaine_slogan'];
  $habitats[$row['animal_domaine_id']]['cover'] = $row['domaine_cover'];
  $habitats[$row['animal_domaine_id']]['thumbnail'] = $row['domaine_thumbnail'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race_id'] = $row['animal_race_id'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race'] = $row['race_nom'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['animaux'][$row['animal_id']] = $animal;
}

// FERMER LA REQUÊTE  
$stmt = null;
// FERMER LA CONNEXION
$db = null;
