<?php
// INITIALISER LA VARIABLE $DB
$db = Database::$pdo;

// SI UN FORMULAIRE A ÉTÉ ENVOYÉ, ON TRAITE LES DONNÉES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // RÉCUPÉRER LES DONNÉES DU FORMULAIRE
  $logo_id = isset($_POST['logo_id']) ? $_POST['logo_id'] : null;
  $logo_txtg = isset($_POST['logo_txtg']) ? $_POST['logo_txtg'] : null;
  $logo_txtd = isset($_POST['logo_txtd']) ? $_POST['logo_txtd'] : null;
  $logo_ico = isset($_POST['logo_ico']) ? $_POST['logo_ico'] : null;
  $logo_lien = isset($_POST['logo_lien']) ? $_POST['logo_lien'] : null;
  $logo_title = isset($_POST['logo_title']) ? $_POST['logo_title'] : null;
  $logo_attribut = isset($_POST['logo_attribut']) ? $_POST['logo_attribut'] : null;
  $logo_img = isset($_FILES['logo_img']) ? $_FILES['logo_img'] : null;

  //  VÉRIFIER SI UN FICHIER A ÉTÉ SOUMIS
  $isFileSubmitted = isset($logo_img['error']) && $logo_img['error'] !== 4;

  // SI UN FICHIER A ÉTÉ SOUMIS (UPLOADÉ)
  if ($isFileSubmitted) {
    if (isset($_FILES['logo_img'])) {
      try {
        $newFilepath = uploadFile($_FILES['logo_img'], 'logos');
        $alertMessages[] = 'Les fichiers ont bien été uploadés.';
      } catch (Exception $e) {
        $alertMessages[] = 'L\'upload des fichiers a échoué.';
      }
    } else {
      $alertMessages[] = 'Aucun fichier n\'a été soumis.';
    }
  }

  // PRÉPARER LA REQUÊTE SQL
  $sqlFields = [
    'logo_txtg = :logo_txtg',
    'logo_txtd = :logo_txtd',
    'logo_ico = :logo_ico',
    'logo_lien = :logo_lien',
    'logo_title = :logo_title',
    'logo_attribut = :logo_attribut',
  ];

  if ($isFileSubmitted) {
    $sqlFields[] = 'logo_img = :logo_img';
  }

  // MISE À JOUR DE LA TABLE DOLOGOSMAINES
  $sql = 'UPDATE logos SET ' . implode(', ', $sqlFields) . ' WHERE logo_id = :logo_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':logo_txtg', $logo_txtg);
  $stmt->bindParam(':logo_txtd', $logo_txtd);
  $stmt->bindParam(':logo_ico', $logo_ico);
  $stmt->bindParam(':logo_lien', $logo_lien);
  $stmt->bindParam(':logo_title', $logo_title);
  $stmt->bindParam(':logo_id', $logo_id);
  $stmt->bindParam(':logo_attribut', $logo_attribut);

  if ($isFileSubmitted) {
    $stmt->bindParam(':logo_img', $newFilepath);
  }

  // EXÉCUTER LA REQUÊTE
  try {
    $stmt->execute();
  } catch (PDOException $e) {
    echo 'Error executing query: ' . $e->getMessage();
    exit();
  }
}

// REQUÊTE SQL POUR RÉCUPÉRER TOUS LES LOGOS
$sql = "SELECT * FROM logos";

// EXÉCUTER LA REQUÊTE
$stmt = $db->query($sql);

// INITIALISER LA VARIABLE LOGOS
$logos = [];

// STOCKER LES RÉSULTATS DANS LA VARIABLE $LOGOS
if (isset($stmt)) {
  $logos = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// FERMER LA CONNEXION
$db = null;
$stmt = null;
