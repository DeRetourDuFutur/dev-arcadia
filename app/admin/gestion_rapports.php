<?php
// INITIALISER LA VARIABLE $DB
$db = Database::$pdo;

// SI UN FORMULAIRE A ÉTÉ ENVOYÉ, ON TRAITE LES DONNÉES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // RÉCUPÉRER LES DONNÉES DU FORMULAIRE
  $rapport_id = $_POST['rapport_id'];
  $rapport_animal_id = $_POST['rapport_animal_id'];
  $rapport_date = $_POST['rapport_date'];
  $rapport_etat_animal = $_POST['rapport_etat_animal'];
  $rapport_food_type_id = $_POST['rapport_food_type_id'];
  $rapport_food_unite_type_id = $_POST['rapport_food_unite_type_id'];
  $rapport_food_quantite = $_POST['rapport_food_quantite'];

  // PRÉPARER LA REQUÊTE SQL
  $sqlFields = [
    'rapport_id = :rapport_id',
    'rapport_animal_id = :rapport_animal_id',
    'rapport_date = :rapport_date',
    'rapport_etat_animal = :rapport_etat_animal',
    'rapport_food_type_id = :rapport_food_type_id',
    'rapport_food_unite_type_id = :rapport_food_unite_type_id',
    'rapport_food_quantite = :rapport_food_quantite',
  ];

  // MISE À JOUR DE LA TABLE RAPPORTS
  $sql = 'UPDATE rapports SET ' . implode(', ', $sqlFields) . ' WHERE rapport_id = :rapport_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':rapport_id', $rapport_id);
  $stmt->bindParam(':rapport_animal_id', $rapport_animal_id);
  $stmt->bindParam(':rapport_date', $rapport_date);
  $stmt->bindParam(':rapport_etat_animal', $rapport_etat_animal);
  $stmt->bindParam(':rapport_food_type_id', $rapport_food_type_id);
  $stmt->bindParam(':rapport_food_unite_type_id', $rapport_food_unite_type_id);
  $stmt->bindParam(':rapport_food_quantite', $rapport_food_quantite);

  // EXÉCUTER LA REQUÊTE
  $stmt->execute();
}

// REQUÊTE SQL POUR RÉCUPÉRER TOUS LES ANIMAUX
$sql = 'SELECT * FROM animaux';
$stmt = $db->query($sql);
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);

// REQUÊTE SQL POUR RÉCUPÉRER TOUS LES ÉTATS
$sql = 'SELECT * FROM etats';
$stmt = $db->query($sql);
$etats = $stmt->fetchAll(PDO::FETCH_ASSOC);

// REQUÊTE SQL POUR RÉCUPÉRER TOUS LES NOURRITURES
$sql = 'SELECT * FROM foods';
$stmt = $db->query($sql);
$foods = $stmt->fetchAll(PDO::FETCH_ASSOC);

// REQUÊTE SQL POUR RÉCUPÉRER TOUTES LES UNITÉS
$sql = 'SELECT * FROM unites';
$stmt = $db->query($sql);
$unites = $stmt->fetchAll(PDO::FETCH_ASSOC);

// REQUÊTE SQL POUR RÉCUPÉRER TOUS LES RAPPORTS AVEC LES ANIMAUX, LES NOURRITURES, LES UNITÉS ET LES ÉTATS
$sql = "SELECT rapports.*, animaux.animal_id, animaux.animal_prenom, animaux.animal_visuel, foods.food_id, foods.food_type, unites.unite_id, unites.unite_type, etats.etat_id, etats.etat_type
  FROM rapports   
  JOIN animaux ON rapports.rapport_animal_id = animaux.animal_id
  JOIN foods ON rapport_food_type_id = foods.food_id
  JOIN etats ON rapport_etat_animal = etats.etat_id 
  JOIN unites ON rapport_food_unite_type_id = unites.unite_id
  ORDER BY rapport_date DESC";

// EXÉCUTER LA REQUÊTE
$stmt = $db->query($sql);

// INITIALISER LA VARIABLE RAPPORTS
$rapports = [];

// STOCKER LES RÉSULTATS DANS LA VARIABLE $RAPPORTS
if (isset($stmt)) {
  $rapports = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// FERMER LA CONNEXION
$db = null;
$stmt = null;
