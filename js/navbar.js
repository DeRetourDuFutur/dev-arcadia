const navbar = document.querySelector("#navbarNav");
navbar.addEventListener("click", hideNavBar);

function hideNavBar(ev) {
  const navLinks = Array.from(navbar.querySelectorAll("a"));
  // Si l'élement cliqué (ev.target) appartient au tableau 'navLinks' alors ...
  if (
    navLinks.some((navLink) => {
      return navLink === ev.target;
    })
  ) {
    // navbar.style.display = "none";
    navbar.classList.remove("show");
  }
}
