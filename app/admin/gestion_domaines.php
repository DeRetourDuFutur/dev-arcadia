<?php
// INITIALISER LA VARIABLE $DB
$db = db_connect();

// REQUÊTE POUR RÉCUPÉRER TOUS LES DOMAINES
$sql = "SELECT * FROM domaines";
$stmt = $db->query($sql);
$domaines = $stmt->fetchAll(PDO::FETCH_ASSOC);

// SI UN FORMULAIRE A ÉTÉ ENVOYÉ, ON TRAITE LES DONNÉES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // RÉCUPÉRER LES DONNÉES DU FORMULAIRE
  $domaine_id = $_POST['domaine_id'];
  $domaine_name = $_POST['domaine_name'];
  $domaine_slogan = $_POST['domaine_slogan'];
  $domaine_cover = $_FILES['domaine_cover'];
  $domaine_thumbnail = $_FILES['domaine_thumbnail'];

  //  VÉRIFIER SI UN FICHIER A ÉTÉ SOUMIS
  $isCoverSubmitted = isset($domaine_cover['error']) && $domaine_cover['error'] !== 4;
  $isThumbnailSubmitted = isset($domaine_thumbnail['error']) && $domaine_thumbnail['error'] !== 4;

  // SI UN FICHIER COVER A ÉTÉ SOUMIS (UPLOADÉ)
  if ($isCoverSubmitted) {
    if (isset($_FILES['domaine_cover'])) {
      try {
        $coverFilepath = uploadFile($_FILES['domaine_cover'], 'domaines');
        $alertMessages[] = 'Les fichiers ont bien été uploadés.';
      } catch (Exception $e) {
        $alertMessages[] = 'L\'upload des fichiers a échoué.';
      }
    } else {
      $alertMessages[] = 'Aucun fichier n\'a été soumis.';
    }
  }

  // SI UN FICHIER THUMBNAIL A ÉTÉ SOUMIS (UPLOADÉ)
  if ($isThumbnailSubmitted) {
    if (isset($_FILES['domaine_thumbnail'])) {
      try {
        $thumbnailFilepath = uploadFile($_FILES['domaine_thumbnail'], 'domaines');
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
    'domaine_id = :domaine_id',
    'domaine_name = :domaine_name',
    'domaine_slogan = :domaine_slogan',

  ];

  if ($isCoverSubmitted) {
    $sqlFields[] = 'domaine_cover = :domaine_cover';
  }

  if ($isThumbnailSubmitted) {
    $sqlFields[] = 'domaine_thumbnail = :domaine_thumbnail';
  }


  // MISE À JOUR DE LA TABLE DOMAINES
  $sql = 'UPDATE domaines SET ' . implode(', ', $sqlFields) . ' WHERE domaine_id = :domaine_id';

  $stmt = $db->prepare($sql);
  $stmt->bindParam(':domaine_id', $domaine_id);
  $stmt->bindParam(':domaine_name', $domaine_name);
  $stmt->bindParam(':domaine_slogan', $domaine_slogan);

  if ($isCoverSubmitted) {
    $stmt->bindParam(':domaine_cover', $coverFilepath);
  }

  if ($isThumbnailSubmitted) {
    $stmt->bindParam(':domaine_thumbnail', $thumbnailFilepath);
  }

  // EXÉCUTER LA REQUÊTE
  $stmt->execute();

  // RAFRAÎCHIR LA PAGE
  header('Location: ' . $_SERVER['REQUEST_URI']);
}

// FERMER LA CONNEXION
$db = null;
$stmt = null;
