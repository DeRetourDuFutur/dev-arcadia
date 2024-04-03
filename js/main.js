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

  // Initialiser le WOW.js
  new WOW().init();

  // Sticky Navbar Début
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").addClass("shadow-sm").css("top", "0px");
    } else {
      $(".sticky-top").removeClass("shadow-sm").css("top", "-100px");
    }
  });
  // Sticky Navbar Fin

  // Back To Top Début
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
// Back To Top Fin

  // Chiffres Début
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });
 // Chiffres Fin

  // Header Carousel Début
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
 // Header Carousel Fin
 
  // Témoignages Carousel Début
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
  // Témoignages Carousel Fin

    // Modale Vidéo (hero) Début
  // var $videoSrc;
  // $(".btn-play").click(function () {
  //   $videoSrc = $(this).data("src");
  // });
  // console.log($videoSrc);
  // $("#videoModal").on("shown.bs.modal", function (e) {
  //   $("#video").attr(
  //     "src",
  //     $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
  //   );
  // });
  // $("#videoModal").on("hide.bs.modal", function (e) {
  //   $("#video").attr("src", $videoSrc);
  // });


})(jQuery);
  // Modale Vidéo (hero) Fin