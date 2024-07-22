<?php

class CsrfToken
{
  private static string $token;

  public static function generateToken()
  {
    self::$token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = self::$token;
  }

  public static function getToken()
  {
    return self::$token;
  }

  public static function isTokenValid(): bool
  {
    if ($_SESSION['csrf_token'] !== $_POST['csrf_token']) {
      return true;
    }
    return false;
  }
}
