<?php

match ($_SESSION['user_role']) {
  'admin' => $fileName = 'gestion_users.php',
  'employee' => $fileName = 'gestion_avis.php',
  'veto' => $fileName = 'gestion_rapports.php',
};
?>

<?php require_once $fileName; ?>