<?php
// menu_redirect.php
session_start();
$_SESSION['access_granted'] = true;
header('Location: ' . $_GET['page']);
exit;
