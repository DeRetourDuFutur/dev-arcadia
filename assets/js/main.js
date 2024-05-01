(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").addClass("shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
    }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Header carousel
  $(".header-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    items: 1,
    dots: true,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
		autoplayTimeout: 12000,
    smartSpeed: 2000, // Change the value to adjust the transition speed
    center: true,
    dots: false,
    loop: true,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
    },
  });

  // Modal Video
  var $videoSrc;
  $(".btn-play").click(function () {
    $videoSrc = $(this).data("src");
  });
  $("#videoModal").on("shown.bs.modal", function (e) {
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
    );
  });
  $("#videoModal").on("hide.bs.modal", function (e) {
    $("#video").attr("src", $videoSrc);
  });
})(jQuery);

/*** Jeu De Mémoire | Début ***/

const gameBoard = document.getElementById("game-board");

if(gameBoard) {
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
  let selectedCards = [];
  
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
          if (cardsNotMatched.length === 0) {
            //Le joueur a gagné
            // alert("Bravo, vous avez gagné");
            const winDialog = document.getElementById("win-dialog");
            const bonusDialog = document.getElementById("bonus-dialog");
  
            const closeDialogBtn = winDialog.querySelector("#close-win-dialog");
            const restartGameBtn = winDialog.querySelector("#restart-game");
            const secretPageBtn = winDialog.querySelector("#open-secret-page");
  
            winDialog.showModal();
  
            // Events de la modale WinDialog
            closeDialogBtn.addEventListener("click", () => {
              winDialog.close();
            });
            restartGameBtn.addEventListener("click", () => {
              restartGame();
            });
            secretPageBtn.addEventListener("click", () => {
              winDialog.close();
              bonusDialog.showModal();
            });
  
            // Events de la modale bonusDialog
            bonusDialog
              .querySelector("#close-bonus-dialog")
              .addEventListener("click", () => {
                bonusDialog.close();
              });
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
  
  function restartGame() {
    window.location.reload();
  }
  
  let duplicatedCardsPathName = duplicateArray(cardsPathName);
  //Mélanger le tableau
  duplicatedCardsPathName = shuffleArray(duplicatedCardsPathName);
  duplicatedCardsPathName.forEach((card) => {
    const cardHtml = createCard(card);
    gameBoard.appendChild(cardHtml);
  });
  
  const cards = document.querySelectorAll(".card");
}
  /*** Jeu De Mémoire | Fin ***/
