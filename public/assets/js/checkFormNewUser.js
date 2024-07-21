document.addEventListener("DOMContentLoaded", function () {
  // Assurez-vous que votre code s'exécute après le chargement complet du DOM.

  const form = document.getElementById("newUserForm");

  const addUserForm = (event) => {
    event.preventDefault();
    let user_role = document.getElementById("user_role").value;
    let user_email = document.getElementById("user_email").value;
    let user_prenom = document.getElementById("user_prenom").value;
    let user_nom = document.getElementById("user_nom").value;
    let user_pwd = document.getElementById("user_pwd").value;
    let user_confirm_pwd = document.getElementById("user_confirm_pwd").value;

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
    if (user_role === "") {
      p = document.createElement("p");
      p.textContent = "Le rôle n'a pas été sélectionné";
      p.style.color = "red";
      document
        .getElementById("user_role")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_email === "") {
      p = document.createElement("p");
      p.textContent = "L'email doit être renseigné";
      p.style.color = "red";
      document
        .getElementById("user_email")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_prenom === "") {
      p = document.createElement("p");
      p.textContent = "Le prénom doit être renseigné";
      p.style.color = "red";
      document
        .getElementById("user_prenom")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_nom === "") {
      p = document.createElement("p");
      p.textContent = "Le nom doit être renseigné";
      p.style.color = "red";
      document
        .getElementById("user_nom")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_pwd === "") {
      p = document.createElement("p");
      p.textContent = "Le mot de passe  doit être renseigné";
      p.style.color = "red";
      document
        .getElementById("user_pwd")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_confirm_pwd === "") {
      p = document.createElement("p");
      p.textContent = "Vous devez confirmer votre mot de passe";
      p.style.color = "red";
      document
        .getElementById("user_confirm_pwd")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (user_confirm_pwd !== user_pwd) {
      p = document.createElement("p");
      p.textContent = "Les mots de passe ne correspondent pas";
      p.style.color = "red";
      document
        .getElementById("user_confirm_pwd")
        .insertAdjacentElement("beforebegin", p);
      formHasErrors = true;
    }

    if (!formHasErrors) form.submit();
  };

  // Ajoutez ici l'écouteur d'événements pour votre formulaire si nécessaire, par exemple :

  form.addEventListener("submit", addUserForm);
});
