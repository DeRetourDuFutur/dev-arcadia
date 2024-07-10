<?php

// Vérifier si une session est connectée
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] === false) {
  // Rediriger vers la page de login si aucune session n'est connectée
  header('Location: ' . BASE_URL . '/login');
}
