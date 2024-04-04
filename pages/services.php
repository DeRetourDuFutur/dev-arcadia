<?php
include('../inc/header.php');
?>

<?php
// ** Définir les variables de connexion à la base de données **
$host = "mysql-dev-am.alwaysdata.net";
$database = "dev-am_bdd-studi";
$username = "dev-am";
$password = "UnstoppABLE!2908!KOP!pwd-alw"; 
$port = "3306";

// ** Se connecter à la base de données **
// ** Utiliser mysqli à la place de mysql (obsolète) **
$mysqli = new mysqli($host, $username, $password, $database, $port);

// ** Vérifier la connexion **
if ($mysqli->connect_errno) {
  echo "Échec de la connexion à la base de données : " . $mysqli->connect_error;
  exit();
}
// ** Préparer la requête **
// ** Sélectionner tous les champs de la table "services" **
$sql = "SELECT * FROM services";

// ** Exécuter la requête **
// ** L'objet `stmt` n'est pas défini **
$result = $mysqli->query($sql);

// ** Vérifier le résultat **
if (!$result) {
  echo "Échec de la requête : " . $mysqli->error;
  exit();
}
?>
<?php
// Services Début
echo "<div class=\"container-xxl py-5\">";
  echo "<div class=\"container\">";
    echo "<div class=\"row g-5 mb-5 wow fadeInUp\" data-wow-delay=\"0.1s\">";
      echo "<div class=\"col-lg-6\">";
        echo "<p><span class=\"text-primary me-2\">#</span>Nos Services</p>";
        echo "<h1 class=\"display-5 mb-0\">
                Services réservés aux
                <span class=\"text-primary\">Arcadien(ne)s</span>
              </h1>";
      echo "</div>";
      echo "<div class=\"col-lg-6\">";
        echo "<div
                class=\"bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5\"
              >";
        echo "<i class=\"fa fa-3x fa-mobile-alt text-white\"></i>";
        echo "<div class=\"ms-4\">";
          echo "<p class=\"text-white mb-0\">Une demande particulière ?</p>";
          echo "<h2 class=\"text-white mb-0\">+ 33 2 88 88 88 88</h2>";
        echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";

    // Try-catch block for error handling (optional)
    try {
      // ** Assuming database connection and $result is set **
      while ($row = $result->fetch_assoc()) {
        echo "<div class=\"row gy-5 gx-4\">";
          echo "<div class=\"col-lg-3 col-md-4 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.1s\">";
            echo "<img class=\"img-fluid mb-3\" src=\"" . $row["ico"] . "\" alt=\"" . $row["titre"] . "\" />";
            echo "<h5 class=\"mb-3\">" . $row["titre"] . "</h5>";
            echo "<p class=\"mb-5\">" . $row["texte"] . "</p>";
          echo "</div>";
        echo "</div>";
      }
    } catch (Exception $e) {
      echo "Une erreur est survenue lors de la récupération des services.";
    }

// Services Fin
// ** Fermer les ressources **
$result->close();
$mysqli->close();
?>
<?php
echo "</div>";
echo "</div>";
echo "</div>";
?>
<?php
include('../inc/testimonials.php');
?>
<?php
include('../inc/footer.php');
?>