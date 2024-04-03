// Fonction pour filtrer les animaux
function tabsFilters() {
  const tabs = document.querySelectorAll('.portfolio-filters a');
  const domaines = document.querySelectorAll('.portfolio .card');

  // Fonction pour réinitialiser les liens actifs
  const resetActiveLinks = () => {
    tabs.forEach(elem => elem.classList.remove('active'));
  };

  // Fonction pour afficher les domaines
  const showDomaines = (elem) => {
    console.log(elem);
    domaines.forEach(domaine => {
      let filter = domaine.getAttribute('data-category');

      if (elem === 'all') {
        domaine.parentNode.classList.remove('hide');
        return;
      }

      filter !== elem ? domaine.parentNode.classList.add('hide') : domaine.parentNode.classList.remove('hide');
    });
  };

  // Ajout d'écouteurs d'événements sur les liens de filtre
  tabs.forEach(elem => {
    elem.addEventListener('click', (event) => {
      event.preventDefault();
      let filter = elem.getAttribute('data-filter');
      showDomaines(filter);
      resetActiveLinks();
      elem.classList.add('active');
    });
  });
}

// Fonction pour afficher les détails d'un domaine
function showDomainesDetails() {
  const links = document.querySelectorAll('.card__link');
  const modals = document.querySelectorAll('.modal');
  const buttons = document.querySelectorAll('.modal__close');

  // Fonction pour cacher les modales
  const hideModals = () => {
    modals.forEach(modal => modal.classList.remove('show'));
  };

  // Ajout d'écouteurs d'événements sur les liens d'ouverture de modale
  links.forEach(elem => {
    elem.addEventListener('click', (event) => {
      event.preventDefault();

      // Affichage de la modale correspondante
      document.querySelector(`[id=${elem.dataset.id}]`).classList.add('show');
    });
  });

  // Ajout d'écouteurs d'événements sur les boutons de fermeture de modale
  buttons.forEach(btn => {
    btn.addEventListener('click', (event) => {
      hideModals();
    });
  });
}

// Appel des fonctions
tabsFilters();
showDomainesDetails();