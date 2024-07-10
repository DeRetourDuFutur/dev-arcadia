<?php

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $statut = $_POST['statut'];
  $id = $_POST['id'];
}

$db = null;
$stmt = null;
