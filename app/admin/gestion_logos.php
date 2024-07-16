<?php

// Initialiser la variable $db
$db = db_connect();

// Vérifier si le formulaire de MAJ du logo a été soumis
if (isset($_POST['logo_action'])) {
  $logo_id = $_POST['logo_id'];
  $logo_txtg = $_POST['logo_txtg'];
  $logo_txtd = $_POST['logo_txtd'];
  $logo_ico = $_POST['logo_ico'];
  $logo_lien = $_POST['logo_lien'];
  $logo_title = $_POST['logo_title'];
  $logo_attribut = $_POST['logo_attribut'];
  $logo_img = $_FILES['logo_img'];

  // Si le fichier a été uploadé ... 
  $isFileSubmitted = $logo_img['error'] !== 4;

  if ($isFileSubmitted) {
    try {
      $logo_imgPath = uploadFile($logo_img, 'logos');
      $alertMessages[] = 'Les fichiers ont bien été uploadés.';
    } catch (Exception $e) {
      $alertMessages[] = 'L\'upload des fichiers à échoué';
    }
  }

  $sqlFields = [
    'logo_txtg = :logo_txtg',
    'logo_txtd = :logo_txtd',
    'logo_ico = :logo_ico',
    'logo_lien = :logo_lien',
    'logo_title = :logo_title',
    'logo_attribut = :logo_attribut',
  ];

  if ($isFileSubmitted) {
    $sqlFields['logo_img'] = ':logo_img';
  }
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
    $stmt->bindParam(':logo_img', $logo_img);
  }

  $stmt->execute();
}

// Requête pour récupérer le logo du site
$sql = "SELECT * FROM logos";
$stmt = $db->query($sql);
$logos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fermeture de la connexion
$db = null;
$stmt = null;
