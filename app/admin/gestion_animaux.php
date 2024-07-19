<?php
// Initialiser la variable $db
$db = db_connect();

// Un formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $animal_id = $_POST['animal_id'];
  $animal_prenom = $_POST['animal_prenom'];
  $animal_race_id = $_POST['animal_race_id'];
  $animal_age = $_POST['animal_age'];
  $animal_poids = $_POST['animal_poids'];
  $animal_domaine_id = $_POST['animal_domaine_id'];
  $animal_visuel = $_FILES['animal_visuel'];
  $animal_statut = $_POST['animal_statut'];

  // Si le fichier a été uploadé ... 
  $isFileSubmitted = $animal_visuel['error'] !== 4;

  if ($isFileSubmitted) {
    try {
      $newFilepath = uploadFile($_FILES['animal_visuel'], 'animaux');
      $alertMessages[] = 'Les fichiers ont bien été uploadés.';
    } catch (Exception $e) {
      $alertMessages[] = 'L\'upload des fichiers à échoué';
    }
  }

  $sqlFields = [
    'animal_id = :animal_id',
    'animal_prenom = :animal_prenom',
    'animal_race_id = :animal_race_id',
    'animal_age = :animal_age',
    'animal_poids = :animal_poids',
    'animal_domaine_id = :animal_domaine_id',
    'animal_statut = :animal_statut',
  ];

  if ($isFileSubmitted) {
    $sqlFields[] = 'animal_visuel = :animal_visuel';
  }

  $sql = 'UPDATE animaux SET ' . implode(', ', $sqlFields) . ' WHERE animal_id = :animal_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':animal_id', $animal_id);
  $stmt->bindParam(':animal_prenom', $animal_prenom);
  $stmt->bindParam(':animal_race_id', $animal_race_id);
  $stmt->bindParam(':animal_age', $animal_age);
  $stmt->bindParam(':animal_poids', $animal_poids);
  $stmt->bindParam(':animal_domaine_id', $animal_domaine_id);
  $stmt->bindParam(':animal_statut', $animal_statut);

  if ($isFileSubmitted) {
    $stmt->bindParam(':animal_visuel', $newFilepath);
  }

  $stmt->execute();
}

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
    'animal_id' => $row['animal_id'],
    'animal_prenom' => $row['animal_prenom'],
    'animal_race_id' => $row['animal_race_id'],
    'animal_age' => $row['animal_age'],
    'animal_poids' => $row['animal_poids'],
    // 'animal_food_id' => $row['animal_food_id'],
    // 'animal_unite_id' => $row['animal_unite_id'],
    // 'animal_food_quantite' => $row['animal_food_quantite'],
    // 'animal_etat_id' => $row['animal_etat_id'],
    'animal_domaine_id' => $row['animal_domaine_id'],
    'animal_visuel' => $row['animal_visuel'],
    'animal_statut' => $row['animal_statut'],
    'domaine_id' => $row['domaine_id'],
    'domaine_name' => $row['domaine_name'],
    'race_id' => $row['race_id'],
    'race_nom' => $row['race_nom'],
    // 'etat_id' => $row['etat_id'],
    // 'etat_type' => $row['etat_type'],
    // 'food_id' => $row['food_id'],
    // 'food_type' => $row['food_type'],
    // 'unite_id' => $row['unite_id'],
    // 'unite_type' => $row['unite_type'],

  ];

  // Créer un tableau associatif pour chaque habitat, incluant le nom du domaine
  $habitats[$row['animal_domaine_id']]['domaine'] = $row['domaine_name'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race_id'] = $row['animal_race_id'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['race'] = $row['race_nom'];
  $habitats[$row['animal_domaine_id']]['races'][$row['animal_race_id']]['animaux'][$row['animal_id']] = $animal;

  $animaux[] = $animal;
  $habitats[] = $habitat;
}

// Fermer la connexion à la base de données
$db = null;
// Fermer la requête préparée
$stmt = null;
