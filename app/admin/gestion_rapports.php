<?php
// Initialiser la variable $db
$db = db_connect();


// Un formulaire a été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $rapport_id = $_POST['rapport_id'];
  $rapport_animal_id = $_POST['rapport_animal_id'];
  $rapport_date = $_POST['rapport_date'];
  $rapport_etat_animal = $_POST['rapport_etat_animal'];
  $rapport_food_type_id = $_POST['rapport_food_type_id'];
  $rapport_food_unite_type_id = $_POST['rapport_food_unite_type_id'];
  $rapport_food_quantite = $_POST['rapport_food_quantite'];


  $sqlFields = [
    'rapport_id = :rapport_id',
    'rapport_animal_id = :rapport_animal_id',
    'rapport_date = :rapport_date',
    'rapport_etat_animal = :rapport_etat_animal',
    'rapport_food_type_id = :rapport_food_type_id',
    'rapport_food_unite_type_id = :rapport_food_unite_type_id',
    'rapport_food_quantite = :rapport_food_quantite',
  ];
  $sql = 'UPDATE rapports SET ' . implode(', ', $sqlFields) . ' WHERE rapport_id = :rapport_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':rapport_id', $rapport_id);
  $stmt->bindParam(':rapport_animal_id', $rapport_animal_id);
  $stmt->bindParam(':rapport_date', $rapport_date);
  $stmt->bindParam(':rapport_etat_animal', $rapport_etat_animal);
  $stmt->bindParam(':rapport_food_type_id', $rapport_food_type_id);
  $stmt->bindParam(':rapport_food_unite_type_id', $rapport_food_unite_type_id);
  $stmt->bindParam(':rapport_food_quantite', $rapport_food_quantite);

  $stmt->execute();
}

// Requête SQL avec double jointure pour inclure les rapports et les animaux
$sql = "SELECT rapports.*, animaux.animal_id, animaux.animal_prenom, animaux.animal_visuel, foods.food_id, foods.food_type, unites.unite_id, unites.unite_type, etats.etat_id, etats.etat_type
        FROM rapports   
        JOIN animaux ON rapports.rapport_animal_id = animaux.animal_id
        JOIN foods ON rapport_food_type_id = foods.food_id
        JOIN etats ON rapport_etat_animal = etats.etat_id 
        JOIN unites ON rapport_food_unite_type_id = unites.unite_id";

// Exécution de la requête
$stmt = $db->query($sql);

// Récupération des résultats
$rapports = [];

// Stocker les rapports dans une variable
$rapports = $stmt->fetchAll(PDO::FETCH_ASSOC);
