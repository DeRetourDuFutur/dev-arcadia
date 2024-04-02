const nameInput = document.getElementById('name');
const subjectInput = document.getElementById('subject');
const messageInput = document.getElementById('message');
const submitBtn = document.getElementById('submit-btn');
const errorDisplay = document.querySelector('.erreur');

function validateName(input) {
  const name = input.value.trim();
  const nameError = document.getElementById('name-error');
  if (name === '') {
    nameError.textContent = 'Le champ Nom est obligatoire.';
    input.classList.add('is-invalid');
  } else {
    nameError.textContent = '';
    input.classList.remove('is-invalid');
  }
  validateForm();
}

function validateSubject(input) {
  const subject = input.value.trim();
  const subjectError = document.getElementById('subject-error');
  if (subject === '') {
    subjectError.textContent = 'Le champ Objet est obligatoire.';
    input.classList.add('is-invalid');
  } else {
    subjectError.textContent = '';
    input.classList.remove('is-invalid');
  }
  validateForm();
}

function validateMessage(input) {
  const message = input.value.trim();
  const messageError = document.getElementById('message-error');
  if (message === '') {
    messageError.textContent = 'Le champ Message est obligatoire.';
    input.classList.add('is-invalid');
  } else {
    messageError.textContent = '';
    input.classList.remove('is-invalid');
  }
  validateForm();
}

function validateEmail(input) {
  const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  return emailRegex.test(input);
}

// Utilisation dans un formulaire
const emailInput = document.getElementById("email");
const emailError = document.getElementById("email-error");

emailInput.addEventListener("keyup", () => {
  const email = emailInput.value.trim();
  if (validateEmail(email)) {
    emailError.textContent = "";
    emailInput.classList.remove("is-invalid");
  } else {
    emailError.textContent = "L'adresse email saisie est invalide.";
    emailInput.classList.add("is-invalid");
  }
});

function validateForm() {
  const isNameValid = nameInput.classList.contains('is-invalid');
  const isEmailValid = emailInput.classList.contains('is-invalid');
  const isSubjectValid = subjectInput.classList.contains('is-invalid');
  const isMessageValid = messageInput.classList.contains('is-invalid');
  if (isNameValid || isEmailValid || isSubjectValid || isMessageValid) {
    submitBtn.disabled = true;
  } else {
    submitBtn.disabled = false;
  }
}