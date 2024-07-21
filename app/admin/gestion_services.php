<?php
// INITIALISER LA VARIABLE $DB
$db = Database::$pdo;

// SI UN FORMULAIRE A ÉTÉ ENVOYÉ, ON TRAITE LES DONNÉES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // RÉCUPÉRER LES DONNÉES DU FORMULAIRE
  $service_id = $_POST['service_id'];
  $service_statut = $_POST['service_statut'];
  $service_contenu = $_POST['service_contenu'];
  $service_nom = $_POST['service_nom'];
  $service_main = $_POST['service_main'];
  $service_visuel = $_FILES['service_visuel'];

  //  VÉRIFIER SI UN FICHIER A ÉTÉ SOUMIS
  $isFileSubmitted = $service_visuel['error'] !== 4;

  // SI UN FICHIER A ÉTÉ SOUMIS (UPLOADÉ)
  if ($isFileSubmitted) {
    try {
      $newFilepath = uploadFile($_FILES['service_visuel'], 'services');
      $alertMessages[] = 'Les fichiers ont bien été uploadés.';
    } catch (Exception $e) {
      $alertMessages[] = 'L\'upload des fichiers à échoué';
    }
  }

  // PRÉPARER LA REQUÊTE SQL
  $sqlFields = [
    'service_id = :service_id',
    'service_statut = :service_statut',
    'service_contenu = :service_contenu',
    'service_nom = :service_nom',
    'service_main = :service_main',
  ];

  if ($isFileSubmitted) {
    $sqlFields[] = 'service_visuel = :service_visuel';
  }

  // MISE À JOUR DE LA TABLE DOMAINES
  $sql = 'UPDATE services SET ' . implode(', ', $sqlFields) . ' WHERE service_id = :service_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':service_id', $service_id);
  $stmt->bindParam(':service_statut', $service_statut);
  $stmt->bindParam(':service_contenu', $service_contenu);
  $stmt->bindParam(':service_nom', $service_nom);
  $stmt->bindParam(':service_main', $service_main);

  if ($isFileSubmitted) {
    $stmt->bindParam(':service_visuel', $newFilepath);
  }

  // EXÉCUTER LA REQUÊTE
  try {
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Error executing query: ' . $e->getMessage();
    exit();
  }
}

// REQUÊTE SQL POUR RÉCUPÉRER TOUS LES SERVICES
$sql = "SELECT * FROM services ORDER BY service_main DESC";

// EXÉCUTER LA REQUÊTE
$stmt = $db->query($sql);

// INITIALISER LA VARIABLE SERVICES
$services = [];

// STOCKER LES RÉSULTATS DANS LA VARIABLE $SERVICES
if (isset($stmt)) {
  $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// FERMER LA CONNEXION
$db = null;
$stmt = null;
