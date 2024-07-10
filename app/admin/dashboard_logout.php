<?php

$_SESSION['loggedIn'] = false;
header('Location: ' . BASE_URL . '/login');
die();
