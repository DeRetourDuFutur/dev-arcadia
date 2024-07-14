<?php
// Menu redirection
session_start();
$_SESSION['access_granted'] = true;
header('Location: ' . $_GET['page']);
exit;
