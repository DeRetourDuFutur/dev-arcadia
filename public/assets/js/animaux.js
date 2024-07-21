// Initialiser le slider
$(document).ready(function () {
  $("#carouselDomaines").carousel({
    interval: 3000,
  });
});

// L'utilisateur clique sur un domaine et on affiche la section correspondante:
// Rendre cliquables les domaines de notre slider domaines
document.querySelectorAll("a[data-domaine]").forEach((item) => {
  item.addEventListener("click", () => {
    // Fermer toutes les sections
    document.querySelectorAll(".section-domaines").forEach((section) => {
      section.classList.add("d-none");
    });

    // Afficher la section correspondante
    const domaine = item.getAttribute("data-domaine");
    const section = document.querySelector("#" + domaine);
    if (section) {
      section.classList.remove("d-none");
    }
  });
});
