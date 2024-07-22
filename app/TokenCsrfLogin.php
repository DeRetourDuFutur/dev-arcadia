<?php

class TokenCsrfLogin
{
  private $token;

  public function __construct()
  {
    $this->token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $this->token;
  }

  public function generateToken()
  {
    $this->token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $this->token;
  }

  public function getToken()
  {
    return $this->token;
  }

  public function validateToken()
  {
    if ($_SESSION['csrf_token'] !== $_POST['csrf_token']) {
      return true;
    }
    return false;
  }
}
