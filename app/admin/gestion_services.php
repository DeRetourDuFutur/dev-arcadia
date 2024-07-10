<?php
// Initialize the $db variable
$db = db_connect();

// Requête pour récupérer tous les liens de la navbar
$sql = "SELECT * FROM services";
$stmt = $db->query($sql);
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Si le formulaire est soumis      
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupérer les données du formulaire
  $id = $_POST['id'];
  $statut = $_POST['statut'];
  $contenu = $_POST['contenu'];
  $nom = $_POST['nom'];
  // $visuel = $_POST['visuel'];


  // Requête pour récupérer tous les services
  $sql = "SELECT * FROM services ORDER BY statut DESC";
  $stmt = $db->query($sql);
  $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
  if (isset($_FILES["visuel"]) && !empty($_FILES['visuel']['tmp_name'])) {

    $filepath = $_FILES['visuel']['tmp_name'];
    $fileSize = filesize($filepath);
    $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
    $filetype = finfo_file($fileinfo, $filepath);

    if ($fileSize === 0) {
      die("The file is empty.");
    }

    if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
      die("The file is too large");
    }

    $allowedTypes = [
      'image/png' => 'png',
      'image/jpeg' => 'jpg',
      'image/webp' => 'webp'
    ];

    if (!in_array($filetype, array_keys($allowedTypes))) {
      die("File not allowed.");
    }

    $filename = pathinfo($_FILES['visuel']['name'], PATHINFO_FILENAME);
    $extension = $allowedTypes[$filetype];
    $targetDirectory = "./assets/uploads/services";

    $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

    if (!copy($filepath, $newFilepath)) { // Copy the file, returns false if failed
      die("Can't move file.");
    }
    unlink($filepath); // Delete the temp file

    echo "File uploaded successfully :)";

    $db->query('UPDATE services SET visuel = "' .  '/public/' . $newFilepath . '" WHERE id = ' . $id);
  }

  // Requête pour mettre à jour le contenu du service
  $sql = "UPDATE services SET statut = :statut, contenu = :contenu, nom = :nom WHERE id = :id";
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':statut', $statut);
  $stmt->bindValue(':contenu', $contenu);
  $stmt->bindValue(':id', $id);
  $stmt->bindValue(':nom', $nom);
  // $stmt->bindValue(':visuel', $visuel);
  $stmt->execute();
}

$db = null;
$stmt = null;
