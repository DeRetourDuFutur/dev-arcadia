<?php

/**
 * Upload un fichier
 * 
 * @param array $file Le fichier a upload (ex : $_FILES['mon_nom_de_fichier'])
 * @param string $directory Le nom du dossier dans le répertoire 'public/assets/uploads' où le fichier sera sauvegardé
 */
function uploadFile(array $file, string $directory): string
{
  $filepath = $file['tmp_name'];
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

  $filename = pathinfo($file['name'], PATHINFO_FILENAME);
  $extension = $allowedTypes[$filetype];
  $targetDirectory = "assets/uploads/" . $directory;

  $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

  if (!copy($filepath, $newFilepath)) { // Copy the file, returns false if failed
    die("Can't move file.");
  }
  unlink($filepath); // Delete the temp file

  $newFilepath = '/public/' . $newFilepath;

  return $newFilepath;
}

function dump(mixed $value): void
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}
