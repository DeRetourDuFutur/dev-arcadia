<?php
// require_once '../app/admin/check_session.php';

match ($_SESSION['access']) {
  'admin' => $fileName = 'gestion_users.php',
  'veto' => $fileName = 'gestion_animaux.php',
  'employee' => $fileName = 'gestion_avis.php',
};
?>

<?php require_once $fileName; ?>