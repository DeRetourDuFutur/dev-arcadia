<?php
include('../inc/header.php');
?>
<!-- Contact Début -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4 mb-5">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="h-100 bg-light d-flex align-items-center p-5">
        
          <div class="ms-4">
            <p class="mb-2">
              <span class="text-primary me-2"><a href="https://www.google.com/maps/place/For%C3%AAt+de+Broceliande,+Val+sans+Retour/@48.004798,-2.288173,16z/data=!4m6!3m5!1s0x480fb38fd5df5933:0x23f241c31b5da661!8m2!3d48.0047975!4d-2.2881727!16s%2Fg%2F11b7hk4_j7?hl=fr&entry=ttu" target="_blank"><i class="fa fa-map-marker-alt text-primary"></i></a></span>Venez nous voir
            </p>
            <h5 class="mb-0">Forêt de Brocéliande <br /></h5>
            (Val sans retour)<br />
            <h5 class="mb-0">56430 Tréhorenteuc</h5>

            <br />
            (3ème arbre sur la droite et tout droit jusqu'au matin)
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="h-100 bg-light d-flex align-items-center p-5">
        
          <div class="ms-4">
            <p class="mb-2">
              <span class="text-primary me-2"><i class="fa fa-phone-alt text-primary"></i></span>Appelez-nous
            </p>
            <h5 class="mb-0">+33 2 88 88 88 88</h5>
            de 10h00 à 19h00 <br /><br />
            <span class="text-primary">Sauf pendant les heures de sieste, </span
            >pour ne pas déranger nos animaux !
          </div>
        </div>
      </div>
      <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100 bg-light d-flex align-items-center p-5">
       
          <div class="ms-4">
            <p class="mb-2">
              <span class="text-primary me-2"><a href="#contact"><i class="fa fa-envelope-open text-primary"></i></a></span>Écrivez-nous
            </p>
            <h5 class="mb-0">contact@arcadia.com</h5>
            <br />
            <span class="text-primary"
              >Ajoutez notre adresse à votre répertoire,</span
            >
            pour être sûr de recevoir nos communications. <br />
          </div>
        </div>
      </div>
    </div>
    <!-- Horaires Début -->
    <div
      class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">Heures d'ouverture</h1>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span>Lundi</span>
                <span>9:00 - 18:30</span>
              </li>
              <li class="list-group-item">
                <span>Mardi</span>
                <span>9:00 - 18:30</span>
              </li>
              <li class="list-group-item">
                <span>Mercredi</span>
                <span>9:00 - 19:30</span>
              </li>
              <li class="list-group-item">
                <span>Jeudi</span>
                <span>9:00 - 18:30</span>
              </li>
              <li class="list-group-item">
                <span>Vendredi</span>
                <span>9:00 - 22:00</span>
              </li>
              <li class="list-group-item">
                <span>Samedi</span>
                <span>10:00 - 22:00</span>
              </li>
              <li class="list-group-item">
                <span>Dimanche</span>
                <span>Fermeture</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Horaires Fin -->
    <div class="row g-5">
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <p><span class="text-primary me-2">#</span>Contactez-nous</p>
        <h5 class="mb-4">
          Une demande particulière ? Un simple renseignement ? <br />Une
          réservation ? Nous sommes à votre écoute !
        </h5>

 
 <!-- Formulaire de contact Début -->
        <form id="contact" onsubmit="return verifForm(this)">
          <div class="row g-3">
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control bg-light border-0"
                  id="name"
                  placeholder="Votre Nom"
                />
                <label for="name">Votre Nom</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control bg-light border-0"
                  id="email"
                  placeholder="Votre Email"
                />
                <label for="email">Votre Email</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control bg-light border-0"
                  id="subject"
                  placeholder="Objet"
                />
                <label for="subject">Objet</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <textarea
                  class="form-control bg-light border-0"
                  placeholder="Leave a message here"
                  id="message"
                  style="height: 100px"
                ></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100 py-3" type="submit">
                Envoyer le message
              </button>
            </div>
          </div>
           <div class="erreur"></div>
        </form>
        <!-- Formulaire de contact Fin -->
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100" style="min-height: 400px">
          <iframe
            id="map"
            class="rounded w-100 h-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2669.4610913711135!2d-2.2907476232937705!3d48.00480106039504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480fb38fd5df5933%3A0x23f241c31b5da661!2sFor%C3%AAt%20de%20Broceliande%2C%20Val%20sans%20Retour!5e0!3m2!1sfr!2sfr!4v1711529259282!5m2!1sfr!2sfr"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            >" frameborder="0" allowfullscreen="" aria-hidden="false"
            tabindex="0" ></iframe
          >
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Fin -->
<?php
include('../inc/footer.php');
?>