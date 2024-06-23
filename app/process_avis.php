<?php
require_once('../config/db_config.php');
$form_submited = false;

if (isset($_POST['pseudo']) && isset($_POST['note']) && isset($_POST['commentaire'])) {
  $pseudo = $_POST['pseudo'];
  $note = $_POST['note'];
  $commentaire = $_POST['commentaire'];

  $sql = "INSERT INTO commentaires (pseudo, note, commentaire, statut) VALUES (:pseudo, :note, :commentaire, 1)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':pseudo', $pseudo);
  $stmt->bindParam(':note', $note);
  $stmt->bindParam(':commentaire', $commentaire);

  $stmt->execute();
  $form_submited = true;
}

// Requête pour récupérer tous les commentaires
$sql = "SELECT * FROM commentaires ORDER BY id DESC LIMIT 30";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
