 // Portfolio Animaux Début

  function tabsFilters() {
    const tabs = document.querySelectorAll(".portfolio-filters a");
    const domaines = document.querySelectorAll(".portfolio .card");

    const resetActiveLinks = () => {
      tabs.forEach((elem) => {
        elem.classList.remove("active");
      });
    };

    const showDomaines = (elem) => {
      console.log(elem);
      domaines.forEach((domaine) => {
        let filter = domaine.getAttribute("data-category");

        if (elem === "all") {
          domaine.parentNode.classList.remove("hide");
          return;
        }

        filter !== elem
          ? domaine.parentNode.classList.add("hide")
          : domaine.parentNode.classList.remove("hide");
      });
    };

    tabs.forEach((elem) => {
      elem.addEventListener("click", (event) => {
        event.preventDefault();
        let filter = elem.getAttribute("data-filter");
        showDomaines(filter);
        resetActiveLinks();
        elem.classList.add("active");
      });
    });
  }

  tabsFilters();

  function showDomainesDetails() {
    const links = document.querySelectorAll(".card__link");
    const modals = document.querySelectorAll(".modal");
    const buttons = document.querySelectorAll(".modal__close");

    const hideModals = () => {
      modals.forEach((modal) => {
        modal.classList.remove("show");
      });
    };


    links.forEach((elem) => {
      elem.addEventListener("click", (event) => {
        event.preventDefault();

        document.querySelector(`[id=${elem.dataset.id}]`).classList.add("show");
      });
    });

    buttons.forEach((btn) => {
      buttons.addEventListener("click", (event) => {
        hideModals();
      });
    });
 
  }

  showDomainesDetails();

  // Portfolio Animaux Fin