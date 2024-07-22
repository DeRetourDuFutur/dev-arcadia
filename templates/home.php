<!-- Section HOME | Début -->
<?php
require_once('inc/hero.php');
?>
<!-- Contenu HOME | Début -->
<div class="home-content">
  <p>
    <span class="text-primary me-2">#</span>Bienvenue chez Arcadia
  </p>
  <h1>Plongez au cœur de la <span class="text-primary">nature sauvage</span></h1>
  <p>
    <span class="text-primary"><b>Un havre de paix pour la faune et la flore</b></span> <br>
    Imaginez un lieu où la nature s'épanouit librement, où les animaux évoluent dans des espaces vastes et préservés, loin de l'agitation du monde moderne. Niché au cœur de la Bretagne, à proximité de la légendaire forêt de Brocéliande, le <span class="text-primary"><b>Zoo Arcadia</b></span> vous ouvre ses portes et vous invite à un voyage extraordinaire à travers la faune et la flore de notre planète.
    <br /><br />
    Depuis 1960, notre parc animalier s'engage à offrir un refuge à une multitude d'espèces animales, réparties aujourd'hui sur trois vastes domaines : <br>
  <ul>
    <li><span class="text-primary"><b>La Savane,</b></span> où Eléphants, Girafes, Léopards, Lions, Rhinocéros et Zèbres évoluent en liberté, vous transportant au cœur de l'Afrique sauvage dans toute sa splendeur.</li>
    <li><span class="text-primary"><b>La Jungle,</b></span> où Gorilles, Jaguars, Panthères, Paresseux, Tigres et Singes se fondent dans un écrin de verdure préservé.</li>
    <li><span class="text-primary"><b>Les Marais,</b></span> où Crocodiles, Hippopotames, Grenouilles, Râton Laveurs, Salamandres et Serpents rythment la vie paisible de ce sanctuaire humide.</li>
  </ul>
  <span class="text-primary"><b>Une invitation à un voyage extraordinaire</b></span>
  <br>
  Au-delà d'une simple visite, Arcadia vous propose une véritable immersion au cœur du monde animal :
  <ul>
    <li>Partez à la rencontre des animaux, observez leurs comportements fascinants et laissez-vous transporter par la beauté fragile de leurs environnements naturels.</li>
    <li>Participez aux visites pédagogiques, animées par des guides passionnés qui vous dévoileront les secrets de la faune et de la flore et la richesse de la biodiversité.</li>
    <li>Savourez un moment de détente dans nos restaurants et boutiques, où vous pourrez déguster des produits locaux et trouver des souvenirs uniques de votre visite. </li>
  </ul>
  <span class="text-primary">Arcadia,</span> c'est bien plus qu'un simple Zoo, c'est une expérience inoubliable à partager en famille ou entre amis. <br><br>
  Venez vous émerveiller, apprendre et surtout, vous reconnecter à la nature, nous vous attendons avec impatience !
  </p>
  <p><a href="<?= BASE_URL . '/animaux' ?>" class="btn btn-primary-color ">Nos Animaux <i class="fa-solid fa-paw fa-sm ms-2"></i></a></p>
  <br>
  <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
    <div class="img-border">
      <img class="img-fluid" src="<?= BASE_URL ?>/public/assets/img/home-slider/arcadia.webp" alt="Zoo Arcadia" />
    </div>
  </div>
  <div class="mt-5">
    <h6 class="mb-2">
      <i class="far fa-check-circle text-primary me-3"></i>Un univers sauvage préservé, des habitats reconstitués.
    </h6>
    <h6 class="mb-2">
      <i class="far fa-check-circle text-primary me-3"></i>Des animaux attachants venus des quatre coins du globe.
    </h6>
    <h6 class="mb-2">
      <i class="far fa-check-circle text-primary me-3"></i>Un engagement fort pour la conservation de la biodiversité et le bien-être animal.
    </h6>
  </div>
  <a class="btn btn-primary-color mt-4" href="<?= BASE_URL . '/label' ?>">En savoir +</a>
</div>
<!-- Contenu HOME | Fin -->

<?php include('avis.php'); ?>

<!-- Section HOME | Fin -->