<?php

class FileUploader
{
  // Propriété statique
  private static array $allowedTypes = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg',
    'image/webp' => 'webp'
  ];
  /**
   * Upload un fichier
   * 
   * @param array $file Le fichier à uploader (ex : $_FILES['mon_nom_de_fichier'])
   * @param string $directory Le nom du dossier dans le répertoire 'public/assets/uploads' où le fichier sera sauvegardé
   * @return string Le chemin du fichier sauvegardé
   */

  // Méthode statique (pas besoin d'instancier la classe pour l'utiliser)
  public static function uploadFile(array $file, string $directory): string
  {
    $filepath = $file['tmp_name'];
    $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
    $filetype = finfo_file($fileinfo, $filepath);

    self::checkFileSize($filepath);

    self::checkAllowedTypes($filetype);

    $filename = pathinfo($file['name'], PATHINFO_FILENAME);
    $extension = self::$allowedTypes[$filetype];
    $targetDirectory = "assets/uploads/" . $directory;

    $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

    if (!copy($filepath, $newFilepath)) { // Copy the file, returns false if failed
      die("Can't move file.");
    }
    unlink($filepath); // Delete the temp file

    $newFilepath = '/public/' . $newFilepath;

    return $newFilepath;
  }

  private static function checkFileSize(string $filepath): void
  {
    $fileSize = filesize($filepath);

    if ($fileSize === 0) {
      die("The file is empty.");
    }

    if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
      die("The file is too large");
    }
  }

  private static function checkAllowedTypes(string $filetype): void
  {
    if (!in_array($filetype, array_keys(self::$allowedTypes))) {
      die("File not allowed.");
    }
  }
}
