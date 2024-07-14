<?php
// Menu redirection
session_start();
$_SESSION['user_role_granted'] = true;
header('Location: ' . $_GET['page']);
exit;
