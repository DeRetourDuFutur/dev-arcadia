<?php
// INITIALISER LA VARIABLE $DB
$db = db_connect();

// SI UN FORMULAIRE A ÉTÉ ENVOYÉ, ON TRAITE LES DONNÉES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $animal_id = $_POST['animal_id'];
  $animal_prenom = $_POST['animal_prenom'];
  $animal_race_id = $_POST['animal_race_id'];
  $animal_age = $_POST['animal_age'];
  $animal_poids = $_POST['animal_poids'];
  $animal_domaine_id = $_POST['animal_domaine_id'];
  $animal_visuel = $_FILES['animal_visuel'];
  $animal_statut = $_POST['animal_statut'];

  // SI UN FICHIER A ÉTÉ SOUMIS (UPLOADÉ)
  $isFileSubmitted = $animal_visuel['error'] !== 4;

  if ($isFileSubmitted) {
    try {
      $newFilepath = uploadFile($_FILES['animal_visuel'], 'animaux');
      $alertMessages[] = 'Les fichiers ont bien été uploadés.';
    } catch (Exception $e) {
      $alertMessages[] = 'L\'upload des fichiers à échoué';
    }
  }

  // PRÉPARER LA REQUÊTE SQL
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

  // MISE À JOUR DE LA TABLE ANIMAUX
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

  // EXÉCUTER LA REQUÊTE
  $stmt->execute();
}

// RÉCUPÉRER LES DOMAINES
$sql = 'SELECT * FROM domaines';
$stmt = $db->query($sql);
$domaines = $stmt->fetchAll(PDO::FETCH_ASSOC);

$selected_domaine_id = intval($_GET['domaine_id'] ?? $domaines[0]['domaine_id']);

// RÉCUPÉRER LES RACES
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

// RÉCUPÉRER LES ANIMAUX AVEC LEURS RAPPORTS (JOINTURES)
$sql = "SELECT animaux.*, races.*, domaines.*, rapports.rapport_food_quantite, rapports.rapport_date, etats.etat_type, foods.food_type, races.race_nom, domaines.domaine_name, etats.etat_type, foods.food_type, unites.unite_type
        FROM animaux 
        JOIN races ON animaux.animal_race_id = races.race_id
        JOIN domaines ON animaux.animal_domaine_id = domaines.domaine_id
        LEFT JOIN rapports ON rapports.rapport_animal_id = animaux.animal_id
        LEFT JOIN etats ON rapports.rapport_etat_animal = etats.etat_id
        LEFT JOIN foods ON rapports.rapport_food_type_id = foods.food_id
        LEFT JOIN unites ON rapports.rapport_food_unite_type_id  = unites.unite_id
        WHERE domaines.domaine_id = :domaine_id AND races.race_id = :race_id";

// PRÉPARER LA REQUÊTE
$stmt = $db->prepare($sql);
// LIER LES PARAMÈTRES
$stmt->bindValue(':domaine_id', $selected_domaine_id, PDO::PARAM_INT);
$stmt->bindValue(':race_id', $selected_race_id, PDO::PARAM_INT);

// EXÉCUTER LA REQUÊTE
$stmt->execute();

// PRÉPARER LES ANIMAUX AVEC LEURS RAPPORTS (JOINTURES)
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    'domaine_name' => $row['domaine_name'],
    'rapport_date' => $row['rapport_date'] ?? 'Aucun',
    'etat_type' => $row['etat_type'] ?? 'Aucun',
    'food_type' => $row['food_type'] ?? 'Aucun',
    'unite_type' => $row['unite_type'] ?? 'Aucun',
    'animal_food_quantite' => $row['rapport_food_quantite'] ?? 'Aucun',
  ];
}

// FERMER LA CONNEXION
$db = null;
// FERMER LA REQUÊTE  
$stmt = null;
