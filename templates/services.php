<!-- Services | Début -->
<div class="container-xxl py-5" id="services">
  <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="col">
        <p><span class="text-primary me-2">#</span>Nos services</p>
        <h3>Services proposés aux <span class="text-primary">Arcadien(ne)s</span></h3>
      </div>
    </div>

    <?php   // Requête pour récupérer tous les services
    $sql = "SELECT * FROM services ORDER BY id ASC";
    $stmt = $db->query($sql);
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $db = null;
    $stmt = null;
    ?>

    <div class="row gy-5 gx-4 portfolio-container">
      <?php foreach ($services as $service) : ?>
        <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
          <a class="animal-item" href="<?= BASE_URL ?><?= ($service['visuel']); ?>" data-lightbox="animal"><img class="img-fluid mb-3 img-services" src="<?= BASE_URL ?><?= ($service['visuel']); ?>" alt="Parking Gratuit" /></a>
          <h6 class="mb-3"><?= ($service['nom']); ?></h6>
          <span><?= ($service['description']); ?></span>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<!-- Services | Fin -->