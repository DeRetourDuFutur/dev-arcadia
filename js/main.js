(function ($) {
  ("use strict");

  spinner;
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
    if ($(this).scrollTop() > 200) {
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

  

  // Portfolio Animaux

  /* Porfolio */

  function tabsFilters() {
    const tabs = document.querySelectorAll(".portfolio-filters a");
    const domaines = document.querySelectorAll(".portfolio .card");

    const resetActiveLinks = () => {
      tabs.forEach((elem) => {
        elem.classList.remove("active");
      });
    };

    const showDomaines = (elem) => {
      console.log(elem);
      domaines.forEach((domaine) => {
        let filter = domaine.getAttribute("data-category");

        if (elem === "all") {
          domaine.parentNode.classList.remove("hide");
          return;
        }

        filter !== elem
          ? domaine.parentNode.classList.add("hide")
          : domaine.parentNode.classList.remove("hide");
      });
    };

    tabs.forEach((elem) => {
      elem.addEventListener("click", (event) => {
        event.preventDefault();
        let filter = elem.getAttribute("data-filter");
        showDomaines(filter);
        resetActiveLinks();
        elem.classList.add("active");
      });
    });
  }

  tabsFilters();

  function showDomainesDetails() {
    const links = document.querySelectorAll(".card__link");
    const modals = document.querySelectorAll(".modal");
    const btns = document.querySelectorAll(".modal__close");

    const hideModals = () => {
      modals.forEach((modal) => {
        modal.classList.remove("show");
      });
    };

    links.forEach((elem) => {
      elem.addEventListener("click", (event) => {
        event.preventDefault();

        document.querySelector(`[id=${elem.dataset.id}]`).classList.add("show");
      });
    });

    btns.forEach((btn) => {
      btn.addEventListener("click", (_) => {
        hideModals();
      });
    });
  }

  showDomainesDetails();

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 20000,
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
  console.log($videoSrc);
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
