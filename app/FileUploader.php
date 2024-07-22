<?php

// Classe pour uploader des fichiers
class FileUploader
{
  // Propriété statique (accessible sans instancier la classe)
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
    // Récupère le type MIME du fichier
    $filepath = $file['tmp_name'];
    $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
    $filetype = finfo_file($fileinfo, $filepath);

    // Vérifie la taille du fichier
    self::checkFileSize($filepath);

    // Vérifie si le type MIME est autorisé
    self::checkAllowedTypes($filetype);

    // Vérifie si le dossier existe, sinon le crée (avec les permissions 0777)
    $filename = pathinfo($file['name'], PATHINFO_FILENAME);
    $extension = self::$allowedTypes[$filetype];
    $targetDirectory = "assets/uploads/" . $directory;

    // Crée le dossier s'il n'existe pas
    $newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

    // Copier le fichier dans le dossier
    if (!copy($filepath, $newFilepath)) { // Si le fichier n'a pas été copié
      die("Can't move file.");
    }
    // Supprime le fichier temporaire
    unlink($filepath);

    // Retourne le chemin du fichier sauvegardé
    $newFilepath = '/public/' . $newFilepath;
    return $newFilepath;
  }

  // Méthode pour vérifier la taille du fichier
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

  // Méthode pour vérifier si le type MIME est autorisé
  private static function checkAllowedTypes(string $filetype): void
  {
    if (!in_array($filetype, array_keys(self::$allowedTypes))) {
      die("File not allowed.");
    }
  }
}
