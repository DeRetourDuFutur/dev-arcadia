/*** Jeu De Mémoire | Début ***/

const gameMemory = document.getElementById("gameMemory");

if (gameMemory) {
  const cardsPathName = [
    "assets/img/memory-game/arc-an-memory1.jpg",
    "assets/img/memory-game/arc-an-memory2.jpg",
    "assets/img/memory-game/arc-an-memory3.jpg",
    "assets/img/memory-game/arc-an-memory4.jpg",
    "assets/img/memory-game/arc-an-memory5.jpg",
    "assets/img/memory-game/arc-an-memory6.jpg",
    "assets/img/memory-game/arc-an-memory7.jpg",
    "assets/img/memory-game/arc-an-memory8.jpg",
  ];
  let selectedCards, cards;

  function createCard(cardUrl) {
    const card = document.createElement("div");
    card.classList.add("card");
    card.dataset.value = cardUrl;

    const cardContent = document.createElement("img");
    cardContent.classList.add("card-content");
    cardContent.src = cardUrl;

    card.appendChild(cardContent);

    card.addEventListener("click", onCardClick);
    return card;
  }

  function duplicateArray(arraySimple) {
    let arrayDouble = [];
    arrayDouble.push(...arraySimple);
    arrayDouble.push(...arraySimple);

    return arrayDouble;
  }

  function shuffleArray(arrayToshuffle) {
    const arrayShuffled = arrayToshuffle.sort(() => 0.5 - Math.random());
    return arrayShuffled;
  }

  function onCardClick(e) {
    const card = e.target.parentElement;
    card.classList.add("flip");

    selectedCards.push(card);
    if (selectedCards.length === 2) {
      cards.forEach((card) => {
        card.removeEventListener("click", onCardClick);
      });
      setTimeout(() => {
        if (selectedCards[0].dataset.value == selectedCards[1].dataset.value) {
          //on a trouvé une paire
          selectedCards[0].classList.add("matched");
          selectedCards[1].classList.add("matched");
          selectedCards[0].removeEventListener("click", onCardClick);
          selectedCards[1].removeEventListener("click", onCardClick);

          const cardsNotMatched = document.querySelectorAll(
            ".card:not(.matched)"
          );
          if (cardsNotMatched.length === 14) {
            //Le joueur a gagné
            document.getElementById("win-game").classList.remove("d-none");
            document
              .querySelector("#btn-restart")
              .addEventListener("click", restartGame);
          }
        } else {
          //on s'est trompé
          selectedCards[0].classList.remove("flip");
          selectedCards[1].classList.remove("flip");
        }
        selectedCards = [];

        const unmatchedCards = document.querySelectorAll(".card:not(.matched)");
        unmatchedCards.forEach((card) => {
          card.addEventListener("click", onCardClick);
        });
      }, 1000);
    }
  }

  function createGame() {
    selectedCards = [];
    let duplicatedCardsPathName = duplicateArray(cardsPathName);
    //Mélanger le tableau
    duplicatedCardsPathName = shuffleArray(duplicatedCardsPathName);
    duplicatedCardsPathName.forEach((card) => {
      const cardHtml = createCard(card);
      gameMemory.appendChild(cardHtml);
    });

    cards = document.querySelectorAll(".card");
  }

  function restartGame() {
    cards.forEach((card) => {
      card.remove();
    });
    document.getElementById("win-game").classList.add("d-none");

    createGame();
  }

  createGame();
}
/*** Jeu De Mémoire | Fin ***/
