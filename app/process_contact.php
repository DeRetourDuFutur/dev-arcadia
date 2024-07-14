<?php
require_once('../config/db_config.php');
$form_submited = false;

if (isset($_POST['contact_prenom']) && isset($_POST['contact_nom']) && isset($_POST['contact_email']) && isset($_POST['contact_message']) && isset($_POST['contact_date'])) {
  $contact_prenom = $_POST['contact_prenom'];
  $contact_nom = $_POST['contact_nom'];
  $contact_email = $_POST['contact_email'];
  $contact_message = $_POST['contact_message'];
  $contact_date = $_POST['contact_date'];


  $sql = "INSERT INTO contacts (contact_prenom, contact_nom, contact_email, contact_message, contact_date) VALUES (:contact_prenom, :contact_nom, :contact_email, :contact_message, :contact_date)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':contact_prenom', $contact_prenom);
  $stmt->bindParam(':contact_nom', $contact_nom);
  $stmt->bindParam(':contact_email', $contact_email);
  $stmt->bindParam(':contact_message', $contact_message);
  $stmt->bindParam(':contact_date', $contact_date);

  $stmt->execute();
  $form_submited = true;
}

$db = null;
$stmt = null;

// Envoyer l'email
if ($form_submited) {
  $to = 'antonymasson.dev@gmail.com';
  $subject = 'Nouveau mail de contact via Arcadia';
  $message = "Prénom: $contact_prenom\n";
  $message .= "NOM: $contact_nom\n";
  $message .= "Email: $contact_email\n";
  $message .= "Message: $contact_message\n";
  $message .= "Date: $contact_date\n";

  $headers = "Content-Type: text/plain; charset=utf-8\r\n";
  $headers .= "From: Arcadia <contact@techno2main.fr>\r\n";
  $headers .= "Reply-To: $contact_email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Votre message a bien été envoyé, merci !";
  } else {
    echo "Le message n'a pas pu être envoyé, désolé !";
  }
}
