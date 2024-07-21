<?php
// INITIALISER LA VARIABLE $DB
$db = db_connect();


// SI UN FORMULAIRE A ÉTÉ ENVOYÉ, ON TRAITE LES DONNÉES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $domaine_id = $_POST['domaine_id'];
  $domaine_name = $_POST['domaine_name'];
  // $domaine_cover = $_FILES['domaine_cover'];
  // $domaine_thumbnail = $_FILES['domaine_thumbnail'];

  // INITIALISER LA VARIABLE DOMAINES
  $domaines = [
    'domaine_id' => $domaine_id,
    'domaine_name' => $domaine_name,
    // 'domaine_cover' => $domaine_cover,
    // 'domaine_thumbnail' => $domaine_thumbnail,
  ];

  // SI UN FICHIER A ÉTÉ SOUMIS (UPLOADÉ)
  // $isFileSubmitted = $domaine_cover['error'] !== 4;
  // $isFileSubmitted = $domaine_thumbnail['error'] !== 4;

  // if ($isFileSubmitted) {
  //   try {
  //     $newFilepath = uploadFile($_FILES['domaine_cover'], 'domaines');
  //     $newFilepath = uploadFile($_FILES['domaine_thumbnail'], 'domaines');
  //     $alertMessages[] = 'Les fichiers ont bien été uploadés.';
  //   } catch (Exception $e) {
  //     $alertMessages[] = 'L\'upload des fichiers à échoué';
  //   }
  // }

  // PRÉPARER LA REQUÊTE SQL
  $sqlFields = [
    'domaine_id = :domaine_id',
    'domaine_name = :domaine_name',
    // 'domaine_cover = :domaine_cover',
    // 'domaine_thumbnail = :domaine_thumbnail',
  ];

  // if ($isFileSubmitted) {
  //   $sqlFields[] = 'domaine_cover = :domaine_cover';
  //   $sqlFields[] = 'domaine_thumbnail = :domaine_thumbnail';
  // }

  // MISE À JOUR DE LA TABLE DOMAINES
  $sql = 'UPDATE domaines SET ' . implode(', ', $sqlFields) . ' WHERE domaine_id = :domaine_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':domaine_id', $domaine_id);
  $stmt->bindParam(':domaine_name', $domaine_name);
  $stmt->bindParam(':domaine_cover', $domaine_cover);
  $stmt->bindParam(':domaine_thumbnail', $domaine_thumbnail);

  // if ($isFileSubmitted) {
  //   $stmt->bindParam(':domaine_cover', $newFilepath);
  //   $stmt->bindParam(':domaine_thumbnail', $newFilepath);
  // }

  // EXÉCUTER LA REQUÊTE
  $stmt->execute();

  // REQUÊTE SQL POUR RÉCUPÉRER TOUS LES DOMAINES
  $sql = 'SELECT * FROM domaines';

  // EXÉCUTER LA REQUÊTE
  $stmt = $db->query($sql);
  $domaines = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// FERMER LA REQUÊTE  
$stmt = null;
// FERMER LA CONNEXION
$db = null;
