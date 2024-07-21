<?php

// Initialize the $db variable
$db = Database::$pdo;

$form_submited = false;

if (isset($_POST['commentaire_pseudo']) && isset($_POST['commentaire_note']) && isset($_POST['commentaire_avis']) && isset($_POST['commentaire_date'])) {
  $commentaire_pseudo = $_POST['commentaire_pseudo'];
  $commentaire_note = $_POST['commentaire_note'];
  $commentaire_avis = $_POST['commentaire_avis'];
  $commentaire_date = $_POST['commentaire_date'];

  $sql = "INSERT INTO commentaires (commentaire_pseudo, commentaire_note, commentaire_avis, commentaire_date, commentaire_statut) VALUES (:commentaire_pseudo, :commentaire_note, :commentaire_avis, :commentaire_date, 0)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':commentaire_pseudo', $commentaire_pseudo);
  $stmt->bindParam(':commentaire_note', $commentaire_note);
  $stmt->bindParam(':commentaire_avis', $commentaire_avis);
  $stmt->bindParam(':commentaire_date', $commentaire_date);

  $stmt->execute();
  $form_submited = true;
}

// Requête pour récupérer tous les commentaires
$sql = "SELECT * FROM commentaires ORDER BY commentaire_date DESC";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Envoyer l'email
if ($form_submited) {
  $to = 'antonymasson.dev@gmail.com';
  $subject = 'Nouveau commentaire via Arcadia';
  $message = "Pseudo : $commentaire_pseudo\n";
  $message .= "Commentaire : $commentaire_avis\n";
  $message .= "Note donnée : $commentaire_note\n";
  $message .= "Posté le : $commentaire_date\n";

  $headers = "Content-Type: text/plain; charset=utf-8\r\n";
  $headers .= "From: Arcadia | Avis <contact@techno2main.fr>\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Votre message a bien été envoyé, merci !";
  } else {
    echo "Le message n'a pas pu être envoyé, désolé !";
  }
}


$db = null;
$stmt = null;
