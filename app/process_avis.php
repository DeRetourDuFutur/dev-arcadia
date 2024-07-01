<?php
require_once('../config/db_config.php');
$form_submited = false;

if (isset($_POST['pseudo']) && isset($_POST['note']) && isset($_POST['commentaire']) && isset($_POST['date_com'])) {
  $pseudo = $_POST['pseudo'];
  $note = $_POST['note'];
  $commentaire = $_POST['commentaire'];
  $date_com = $_POST['date_com'];


  $sql = "INSERT INTO commentaires (pseudo, note, commentaire, date_com, statut) VALUES (:pseudo, :note, :commentaire, :date_com, 1)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':pseudo', $pseudo);
  $stmt->bindParam(':note', $note);
  $stmt->bindParam(':commentaire', $commentaire);
  $stmt->bindParam(':date_com', $date_com);


  $stmt->execute();
  $form_submited = true;
}

// Requête pour récupérer tous les commentaires
$sql = "SELECT * FROM commentaires WHERE statut=1 ORDER BY date_com DESC LIMIT 30";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

$db = null;
$stmt = null;
