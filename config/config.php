<?php

// Définir le nom de domaine et l'URL de base 
if ($_SERVER['SERVER_NAME'] === 'localhost') {
  define('DOMAIN_NAME', 'http://localhost');
  define('BASE_URL', '');
} else {
  define('DOMAIN_NAME', 'https://techno2main.fr');
  define('BASE_URL', '/dev/arcadia');
}
