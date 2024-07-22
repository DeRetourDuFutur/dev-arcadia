<?php

// Classe pour la redirection des routes
class Router
{
  // Propriétés de la classe
  private static array $routes;
  private static array $currentRoute;

  // Méthode pour gérer la requête
  public static function handleRequest(): void
  {
    // Récupère l'URI de la requête
    $requestUri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    // Récupère les routes à partir du fichier JSON (config/routes.json)
    self::$routes = json_decode(file_get_contents('../config/routes.json'), true);

    // Supprime BASE_URL de $requestUri
    $requestUri = str_replace(BASE_URL, '', $requestUri);
    // Vérifie si la route existe
    $template = self::$routes[$requestUri];

    self::$currentRoute = ['uri' => $requestUri, 'template' => $template];
  }

  // Méthode pour obtenir la route actuelle
  public static function getCurrentRoute(): array
  {
    return self::$currentRoute;
  }

  // Méthode pour obtenir toutes les routes
  public static function getRoutes(): array
  {
    return self::$routes;
  }
}
