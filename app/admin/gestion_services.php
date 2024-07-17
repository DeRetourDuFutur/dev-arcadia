<?php
// Initialiser la variable $db
$db = db_connect();

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $service_id = $_POST['service_id'];
  $service_statut = $_POST['service_statut'];
  $service_contenu = $_POST['service_contenu'];
  $service_nom = $_POST['service_nom'];
  $service_aside = $_POST['service_aside'];
  $service_visuel = $_FILES['service_visuel'];

  // Si le fichier a été uploadé ... 
  $isFileSubmitted = $service_visuel['error'] !== 4;

  if ($isFileSubmitted) {
    try {
      $newFilepath = uploadFile($_FILES['service_visuel'], 'services');
      $alertMessages[] = 'Les fichiers ont bien été uploadés.';
    } catch (Exception $e) {
      $alertMessages[] = 'L\'upload des fichiers à échoué';
    }
  }

  $sqlFields = [
    'service_id = :service_id',
    'service_statut = :service_statut',
    'service_contenu = :service_contenu',
    'service_nom = :service_nom',
    'service_aside = :service_aside',
  ];

  if ($isFileSubmitted) {
    $sqlFields[] = 'service_visuel = :service_visuel';
  }

  $sql = 'UPDATE services SET ' . implode(', ', $sqlFields) . ' WHERE service_id = :service_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':service_id', $service_id);
  $stmt->bindParam(':service_statut', $service_statut);
  $stmt->bindParam(':service_contenu', $service_contenu);
  $stmt->bindParam(':service_nom', $service_nom);
  $stmt->bindParam(':service_aside', $service_aside);


  if ($isFileSubmitted) {
    $stmt->bindParam(':sservice_visuel', $newFilepath);
  }

  $stmt->execute();
}


// Requête pour récupérer tous les services
$sql = "SELECT * FROM services ORDER BY service_aside ASC, service_statut DESC, service_nom ASC";
$stmt = $db->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
