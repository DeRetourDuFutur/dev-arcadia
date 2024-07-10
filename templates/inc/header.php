<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Bienvenue dans l'univers d'Arcadia, le plus grand zoo écologique de France. 
  Venez visiter nos 3 domaines (Savane, Jungle & Marais) et rencontrer nos animaux exceptionnels !" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= BASE_URL ?>/public/assets/ico/favicon.ico?v=1" type="image/x-icon" />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Icon Font Stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <!-- Libraries Stylesheet -->
  <link href="<?= BASE_URL ?>/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= BASE_URL ?>/public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Template Stylesheet -->
  <link href="<?= BASE_URL ?>/public/assets/css/arcadia.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/public/assets/css/nav_admin.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/public/assets/css/animaux.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/public/assets/css/memory-game.css" rel="stylesheet" />
  <link href="<?= BASE_URL ?>/public/assets/css/rating.css" rel="stylesheet" />
  <title>Bienvenue dans l'univers d'Arcadia</title>
</head>

<body>
  <?php
  require_once('spinner.php');
  if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] === false) {
    require_once('topbar.php');
  }
  require_once('navbar.php');
  ?>