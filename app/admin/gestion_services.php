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

  $service_newFilepath = uploadFile($FILES['service_visuel'], 'services');

  $db->query('UPDATE services SET service_visuel = ' . $service_newFilepath . ' WHERE service_id = ' . $service_id);

  // Requête pour mettre à jour le contenu du service
  $sql = "UPDATE services SET service_statut = :service_statut, service_contenu = :service_contenu, service_nom = :service_nom, service_aside = :service_aside WHERE service_id = :service_id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':service_statut', $service_statut);
  $stmt->bindValue(':service_contenu', $service_contenu);
  $stmt->bindValue(':service_id', $service_id);
  $stmt->bindValue(':service_nom', $service_nom);
  $stmt->bindValue(':service_aside', $service_aside);
  $stmt->execute();
}

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM services ORDER BY service_aside ASC, service_statut DESC, service_nom ASC";
$stmt = $db->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
