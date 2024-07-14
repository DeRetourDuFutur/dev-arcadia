<?php
// Initialiser la variable $db
$db = db_connect();

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM services ORDER BY service_aside ASC, service_statut DESC, service_nom ASC";
$stmt = $db->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $service_id = $_POST['service_id'];
  $service_statut = $_POST['service_statut'];
  $service_contenu = $_POST['service_contenu'];
  $service_nom = $_POST['service_nom'];
  $service_aside = $_POST['service_aside'];

  // $visuel = $_POST['service_visuel'];


  // Requête pour récupérer tous les services
  $sql = "SELECT * FROM services ORDER BY service_statut DESC";
  $stmt = $db->query($sql);
  $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (isset($_FILES["service_visuel"]) && !empty($_FILES['service_visuel']['service_tmp_name'])) {

    $service_filepath = $_FILES['service_visuel']['service_tmp_name'];
    $service_fileSize = filesize($service_ilepath);
    $service_fileinfo = finfo_open(FILEINFO_MIME_TYPE);
    $service_filetype = finfo_file($service_fileinfo, $service_filepath);

    if ($service_fileSize === 0) {
      die("The file is empty.");
    }

    if ($service_fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
      die("The file is too large");
    }

    $service_allowedTypes = [
      'image/png' => 'png',
      'image/jpeg' => 'jpg',
      'image/webp' => 'webp'
    ];

    if (!in_array($service_filetype, array_keys($service_allowedTypes))) {
      die("File not allowed.");
    }

    $service_filename = pathinfo($_FILES['service_visuel']['service_name'], PATHINFO_FILENAME);
    $service_extension = $service_allowedTypes[$service_filetype];
    $service_targetDirectory = "./assets/uploads/services";

    $service_newFilepath = $service_targetDirectory . "/" . $service_filename . "." . $service_extension;

    if (!copy($service_filepath, $service_newFilepath)) { // Copy the file, returns false if failed
      die("Can't move file.");
    }
    unlink($service_filepath); // Delete the temp file

    echo "File uploaded successfully :)";

    $db->query('UPDATE services SET service_visuel = "' .  '/public/' . $service_newFilepath . '" WHERE service_id = ' . $service_id);
  }

  // Requête pour mettre à jour le contenu du service
  $sql = "UPDATE services SET service_statut = :service_statut, service_contenu = :service_contenu, service_nom = :service_nom, service_aside = :service_aside WHERE service_id = :service_id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':service_statut', $service_statut);
  $stmt->bindValue(':service_contenu', $service_contenu);
  $stmt->bindValue(':service_id', $service_id);
  $stmt->bindValue(':service_nom', $service_nom);
  $stmt->bindValue(':service_aside', $service_aside);
  $stmt->execute();
  // Rafraichir la page automatiquement
  header("Refresh:0");
}

$db = null;
$stmt = null;
