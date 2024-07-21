const form = document.getElementById("contactForm");
const inputs = document.querySelectorAll(
  "#contactForm input, #contactForm textarea"
);
const errors = document.querySelectorAll(".error");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  let isValid = true;

  inputs.forEach((input) => {
    const errorSpan = document.getElementById(input.id + "Error");
    errorSpan.textContent = "";

    if (input.value.trim() === "") {
      errorSpan.textContent = "Ce champ est obligatoire";
      isValid = false;
    }

    if (input.type === "contact_email" && !validateEmail(input.value)) {
      errorSpan.textContent = "Adresse email invalide";
      isValid = false;
    }
  });

  if (isValid) {
    form.submit();
  }
});

function validateEmail(contact_email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(contact_email);
}

// document.addEventListener("DOMContentLoaded", function () {
//   // Assurez-vous que votre code s'exécute après le chargement complet du DOM.

//   const form = document.getElementById("contact_action");

//   const newContactForm = (event) => {
//     event.preventDefault();
//     let prenom = document.getElementById("contact_prenom").value;
//     let nom = document.getElementById("contact_nom").value;
//     let email = document.getElementById("contact_email").value;
//     let message = document.getElementById("contact_message").value;

//     let formHasErrors = false;
//     let p;

//     /*
//       - Verifier que l'email est bien un email et non autre chose
//       - Vérifier que le prénom ne contient que des caractères et non des chiffres ou autre
//       - Idem pour le nom
//       - (facultatif) Vérifier que le mot de passe soit suffisament long (sécurité)
//       - Vérifier que la correspondance des mots de passe
//       - Vérifier que l'user_role renseigné correspond bien à un des user_role présent dans le <select>
//     */

//     // Vérifier que les champs ne sont pas vides
//     if (email === "") {
//       p = document.createElement("p");
//       p.textContent = "L'email renseigné est vide";
//       p.style.color = "red";
//       document
//         .getElementById("contact_email")
//         .insertAdjacentElement("beforebegin", p);
//       formHasErrors = true;
//     }

//     if (prenom === "") {
//       p = document.createElement("p");
//       p.textContent = "Le prénom renseigné est vide";
//       p.style.color = "red";
//       document
//         .getElementById("contact_prenom")
//         .insertAdjacentElement("beforebegin", p);
//       formHasErrors = true;
//     }

//     if (nom === "") {
//       p = document.createElement("p");
//       p.textContent = "Le nom renseigné est vide";
//       p.style.color = "red";
//       document
//         .getElementById("contact_nom")
//         .insertAdjacentElement("beforebegin", p);
//       formHasErrors = true;
//     }

//     if (message === "") {
//       p = document.createElement("p");
//       p.textContent = "Veuillez saisir un message";
//       p.style.color = "red";
//       document
//         .getElementById("contact_message")
//         .insertAdjacentElement("beforebegin", p);
//       formHasErrors = true;
//     }

//     if (!formHasErrors) form.submit();
//   };

//   // Ajoutez ici l'écouteur d'événements pour votre formulaire si nécessaire, par exemple :

//   form.addEventListener("submit", newContactForm);
// });
