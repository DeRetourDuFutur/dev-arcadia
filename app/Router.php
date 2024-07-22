<?php

class Router
{
  private static array $routes;
  private static array $currentRoute;

  public static function handleRequest(): void
  {
    $requestUri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    self::$routes = json_decode(file_get_contents('../config/routes.json'), true);

    // Supprime BASE_URL de $requestUri
    $requestUri = str_replace(BASE_URL, '', $requestUri);
    $template = self::$routes[$requestUri];

    self::$currentRoute = ['uri' => $requestUri, 'template' => $template];
  }

  public static function getCurrentRoute(): array
  {
    return self::$currentRoute;
  }

  public static function getRoutes(): array
  {
    return self::$routes;
  }
}
