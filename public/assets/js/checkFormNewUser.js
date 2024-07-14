document.addEventListener("DOMContentLoaded", function () {
  // Assurez-vous que votre code s'exécute après le chargement complet du DOM.

  const form = document.getElementById("newUserForm");

  const addUserForm = (event) => {
    event.preventDefault();
    let user_role = document.getElementById("user_role").value;
    let email = document.getElementById("user_email").value;
    let prenom = document.getElementById("user_prenom").value;
    let nom = document.getElementById("user_nom").value;
    let password = document.getElementById("user_pwd").value;
    let passwordConfirm = document.getElementById("user_confirm_pwd").value;

    let formHasErrors = false;
    let p;

    /*
      - Verifier que l'email est bien un email et non autre chose
      - Vérifier que le prénom ne contient que des caractères et non des chiffres ou autre
      - Idem pour le nom
      - (facultatif) Vérifier que le mot de passe soit suffisament long (sécurité)
      - Vérifier que la correspondance des mots de passe
      - Vérifier que l'user_role renseigné correspond bien à un des user_role présent dans le <select>
    */

    // Vérifier que les champs ne sont pas vides
    if (email === "") {
      p = document.createElement("p");
      p.textContent = "L'email renseigné est vide";
      p.style.color = "red";
      document
        .getElementById("user_email")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (prenom === "") {
      p = document.createElement("p");
      p.textContent = "Le prenom renseigné est vide";
      p.style.color = "red";
      document
        .getElementById("user_prenom")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (nom === "") {
      p = document.createElement("p");
      p.textContent = "Le nom renseigné est vide";
      p.style.color = "red";
      document
        .getElementById("user_nom")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (password === "") {
      p = document.createElement("p");
      p.textContent = "Le mot de passe renseigné est vide";
      p.style.color = "red";
      document
        .getElementById("user_pwd")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (passwordConfirm === "") {
      p = document.createElement("p");
      p.textContent = "La confirmation de mot de passe renseigné est vide";
      p.style.color = "red";
      document
        .getElementById("user_confirm_pwd")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (passwordConfirm === password) {
      p = document.createElement("p");
      p.textContent = "La mot de passe a mal été confirmé";
      p.style.color = "red";
      document
        .getElementById("user_confirm_pwd")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_role === "") {
      p = document.createElement("p");
      p.textContent = "Le role renseigné est vide";
      p.style.color = "red";
      document
        .getElementById("user_role")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (!formHasErrors) form.submit();
  };

  // Ajoutez ici l'écouteur d'événements pour votre formulaire si nécessaire, par exemple :

  form.addEventListener("submit", addUserForm);
});
