<?php
// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $rapport_animal_id = htmlspecialchars($_POST['rapport_animal_id']);
  $rapport_date = htmlspecialchars($_POST['rapport_date']);
  $rapport_etat_animal = htmlspecialchars($_POST['rapport_etat_animal']);
  $rapport_food_type_id = htmlspecialchars($_POST['rapport_food_type_id']);
  $rapport_food_unite_type_id = htmlspecialchars($_POST['rapport_food_unite_type_id']);
  $rapport_food_quantite = htmlspecialchars($_POST['rapport_food_quantite']);

  // Requête pour ajouter un nouvel rapport
  $sql = "INSERT INTO rapports (rapport_animal_id, rapport_date, rapport_etat_animal, rapport_food_type_id, rapport_food_unite_type_id, rapport_food_quantite) VALUES (:rapport_animal_id, :rapport_date, :rapport_etat_animal, :rapport_food_type_id, :rapport_food_unite_type_id, :rapport_food_quantite)";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':rapport_animal_id', $rapport_animal_id);
  $stmt->bindValue(':rapport_date', $rapport_date);
  $stmt->bindValue(':rapport_etat_animal', $rapport_etat_animal);
  $stmt->bindValue(':rapport_food_type_id', $rapport_food_type_id);
  $stmt->bindValue(':rapport_food_unite_type_id', $rapport_food_unite_type_id);
  $stmt->bindValue(':rapport_food_quantite', $rapport_food_quantite);
  $stmt->execute();
}

$sql = 'SELECT * FROM foods';
$stmt = $db->query($sql);
$foods = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = 'SELECT * FROM etats';
$stmt = $db->query($sql);
$etats = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = 'SELECT * FROM unites';
$stmt = $db->query($sql);
$unites = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql = 'SELECT * FROM domaines';
$stmt = $db->query($sql);
$domaines = $stmt->fetchAll(PDO::FETCH_ASSOC);

$selected_domaine_id = intval($_GET['domaine_id'] ?? $domaines[0]['domaine_id']);

$sql = 'SELECT races.*
  FROM animaux
  JOIN races ON animaux.animal_race_id = races.race_id
  WHERE animaux.animal_domaine_id = :domaine_id
  GROUP BY races.race_nom';

$stmt = $db->prepare($sql);

$stmt->bindValue(':domaine_id', $selected_domaine_id);
$stmt->execute();
$races = $stmt->fetchAll(PDO::FETCH_ASSOC);

$selected_race_id = intval($_GET['race_id'] ?? $races[0]['race_id']);

$sql = "SELECT animaux.*, races.*, domaines.*
        FROM animaux 
        LEFT JOIN races ON animaux.animal_race_id = races.race_id 
        LEFT JOIN domaines ON animaux.animal_domaine_id = domaines.domaine_id      

        WHERE domaines.domaine_id = :domaine_id AND races.race_id = :race_id";

$stmt = $db->prepare($sql);

$stmt->bindValue(':domaine_id', $selected_domaine_id, PDO::PARAM_INT);
$stmt->bindValue(':race_id', $selected_race_id, PDO::PARAM_INT);

$stmt->execute();
$animaux = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $animal = [
    'animal_id' => htmlspecialchars($row['animal_id']),
    'animal_prenom' => htmlspecialchars($row['animal_prenom']),
    'animal_race_id' => htmlspecialchars($row['animal_race_id']),
    'animal_age' => htmlspecialchars($row['animal_age']),
    'animal_poids' => htmlspecialchars($row['animal_poids']),
    'animal_domaine_id' => htmlspecialchars($row['animal_domaine_id']),
    'animal_visuel' => htmlspecialchars($row['animal_visuel']),
    'animal_statut' => htmlspecialchars($row['animal_statut']),
    'domaine_id' => htmlspecialchars($row['domaine_id']),
    'domaine_name' => htmlspecialchars($row['domaine_name']),
    'race_id' => htmlspecialchars($row['race_id']),
    'race_nom' => htmlspecialchars($row['race_nom']),
  ];

  // Créer un tableau associatif pour chaque habitat, incluant le nom du domaine
  $habitats[$row['animal_domaine_id']]['domaine'] = htmlspecialchars($row['domaine_name']);
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race_id'] = htmlspecialchars($row['animal_race_id']);
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race'] = htmlspecialchars($row['race_nom']);
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['animaux'][$row['animal_id']] = $animal;


  $animaux[] = $animal;
}

// Fermer la connexion à la base de données
$db = null;
// Fermer la requête préparée
$stmt = null;
