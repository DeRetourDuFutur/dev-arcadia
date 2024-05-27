/* Portfolio Animaux | Début */
function showAnimalDetails() {
  const links = document.querySelectorAll(".card-animals__link");
  const modals = document.querySelectorAll(".modal");
  const btns = document.querySelectorAll(".modal__close");

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

  btns.forEach((btn) => {
    btn.addEventListener("click", () => {
      hideModals();
    });
  });
}

showAnimalDetails();
/* Portfolio Animaux | Fin */
