/*** Jeu De Mémoire | Début ***/

// On cible  la div #gameMemory
const gameMemory = document.getElementById("gameMemory");

// Si la div #gameMemory existe, alors on défini le chemin des images
if (gameMemory) {
  const cardsPathName = [
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory1.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory2.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory3.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory4.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory5.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory6.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory7.jpg",
    "https://techno2main.fr/dev/arcadia/public/assets/img/memory-game/arc-an-memory8.jpg",
  ];

  // Je déclare les deux variables qui me serviront plus tard
  let selectedCards, cards;

  // Fonction qui va créer une carte
  function createCard(cardUrl) {
    const card = document.createElement("div");
    card.classList.add("card");
    card.dataset.value = cardUrl;

    // Créer le contenu de la carte (image)
    const cardContent = document.createElement("img");
    cardContent.classList.add("card-content");
    cardContent.src = cardUrl;

    // Ajouter le contenu à la carte
    card.appendChild(cardContent);

    // Ajouter un événement au click sur la carte
    card.addEventListener("click", onCardClick);
    return card;
  }

  // Fonction qui va dupliquer les cartes du tableau
  function duplicateArray(arraySimple) {
    let arrayDouble = [];
    arrayDouble.push(...arraySimple);
    arrayDouble.push(...arraySimple);

    return arrayDouble;
  }

  // Fonction qui va mélanger les cartes
  function shuffleArray(arrayToshuffle) {
    const arrayShuffled = arrayToshuffle.sort(() => 0.5 - Math.random());
    return arrayShuffled;
  }

  // Fonction qui va gérer le click sur une carte en ajoutant la class flip (retourner la carte)
  function onCardClick(e) {
    const card = e.target.parentElement;
    card.classList.add("flip");

    // On ajoute la carte cliquée dans le tableau selectedCards
    selectedCards.push(card);
    if (selectedCards.length === 2) {
      cards.forEach((card) => {
        card.removeEventListener("click", onCardClick);
      });
      setTimeout(() => {
        if (selectedCards[0].dataset.value == selectedCards[1].dataset.value) {
          // Quand 2 cartes sont identiques, on enlève la possibilité de cliquer dessus à nouveau
          selectedCards[0].classList.add("matched");
          selectedCards[1].classList.add("matched");
          selectedCards[0].removeEventListener("click", onCardClick);
          selectedCards[1].removeEventListener("click", onCardClick);

          // On vérifie si les cartes sont identiques
          const cardsNotMatched = document.querySelectorAll(
            ".card:not(.matched)"
          );
          if (cardsNotMatched.length === 0) {
            // On affiche le message de victoire dans la div #win-game
            document.getElementById("win-game").classList.remove("d-none");
            document
              .querySelector("#btn-restart")
              .addEventListener("click", restartGame);
          }
        } else {
          // Si les 2 cartes ne sont pas identiques, on les retourne à nouveau
          selectedCards[0].classList.remove("flip");
          selectedCards[1].classList.remove("flip");
        }
        selectedCards = [];

        // On réactive la possibilité de cliquer sur les cartes non retournées
        const unmatchedCards = document.querySelectorAll(".card:not(.matched)");
        unmatchedCards.forEach((card) => {
          card.addEventListener("click", onCardClick);
        });
      }, 1000);
    }
  }

  // Fonction qui va (re)créer le jeu du début
  function createGame() {
    selectedCards = [];
    let duplicatedCardsPathName = duplicateArray(cardsPathName);
    // Mélanger le tableau
    duplicatedCardsPathName = shuffleArray(duplicatedCardsPathName);
    duplicatedCardsPathName.forEach((card) => {
      const cardHtml = createCard(card);
      gameMemory.appendChild(cardHtml);
    });

    cards = document.querySelectorAll(".card");
  }
  // Fonction qui va redémarrer le jeu
  function restartGame() {
    cards.forEach((card) => {
      card.remove();
    });
    document.getElementById("win-game").classList.add("d-none");

    createGame();
  }
  // Lancement du jeu
  createGame();
}
/*** Jeu De Mémoire | Fin ***/
