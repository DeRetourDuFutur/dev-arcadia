const burgerMenu = document.getElementById("burger-menu");
const menu = document.getElementById("menu");
const links = menu.querySelectorAll("a");
// const links = document.querySelectorAll(".menu-link");
burgerMenu.addEventListener("click", () => {
  menu.style.display = menu.style.display === "block" ? "none" : "block";
});

// burgerMenu.addEventListener("click", function () {
//   menu.style.display = menu.style.display === "block" ? "none" : "block";
// });

links.forEach((link) => {
  link.addEventListener("click", () => {
    menu.style.display = "none";
  });
});

// Fonction pour fermer le menu
function closeMenu() {
  menu.classList.remove("open");
}

// Ajoutez un gestionnaire d'événements à chaque lien du menu
// links.forEach(link => {
//   link.addEventListener('click', closeMenu);
// });

// Ajoutez un gestionnaire d'événements au bouton du menu burger pour ouvrir/fermer le menu
// burgerMenu.addEventListener('click', () => {
//   menu.classList.toggle('open');
// });
