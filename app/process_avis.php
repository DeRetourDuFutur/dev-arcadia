<?php

// Initialize the $db variable
$db = db_connect();

$form_submited = false;

if (isset($_POST['pseudo']) && isset($_POST['note']) && isset($_POST['commentaire']) && isset($_POST['date_com'])) {
  $pseudo = $_POST['pseudo'];
  $note = $_POST['note'];
  $commentaire = $_POST['commentaire'];
  $date_com = $_POST['date_com'];

  $sql = "INSERT INTO commentaires (pseudo, note, commentaire, date_com, statut) VALUES (:pseudo, :note, :commentaire, :date_com, 0)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':pseudo', $pseudo);
  $stmt->bindParam(':note', $note);
  $stmt->bindParam(':commentaire', $commentaire);
  $stmt->bindParam(':date_com', $date_com);

  $stmt->execute();
  $form_submited = true;
}

// Requête pour récupérer tous les commentaires
$sql = "SELECT * FROM commentaires ORDER BY date_com DESC";
$stmt = $db->query($sql);
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Envoyer l'email
if ($form_submited) {
  $to = 'antonymasson.dev@gmail.com';
  $subject = 'Nouveau commentaire via Arcadia';
  $message = "Pseudo : $pseudo\n";
  $message .= "Commentaire : $commentaire\n";
  $message .= "Note donnée : $note\n";
  $message .= "Posté le : $date_com\n";

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
