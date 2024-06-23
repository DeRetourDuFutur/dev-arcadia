<?php
require_once('../config/db_config.php');
$form_submited = false;

if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['texte'])) {
  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $texte = $_POST['texte'];


  $sql = "INSERT INTO contacts (prenom, nom, email, texte) VALUES (:prenom, :nom, :email, :texte)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':texte', $texte);

  $stmt->execute();
  $form_submited = true;
}

// Envoyer l'email
if ($form_submited) {
  $to = 'avis-arcadia@techno2main.fr';
  $subject = 'Nouveau mail via le formulaire de contact Arcadia';
  $message = "Prénom: $prenom\n";
  $message .= "NOM: $nom\n";
  $message .= "Email: $email\n";
  $message .= "Message: $texte\n";

  $headers = "From: contact@techno2main.fr\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Votre message a bien été envoyé, merci !";
  } else {
    echo "Le message n'a pas pu être envoyé, désolé !";
  }
}

$db = null;
$stmt = null;
