//step 1: get DOM
let nextDom = document.getElementById("next");
let prevDom = document.getElementById("prev");

let carouselDom = document.querySelector(".slider-animals");
let SliderDom = carouselDom.querySelector(
  ".slider-animals .list-slider-animals"
);
let thumbnailBorderDom = document.querySelector(
  ".slider-animals .thumbnail-slider-animals"
);
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll(
  ".item-slider-animals"
);
let timeDom = document.querySelector(".slider-animals .time-slider-animals");

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
let timeRunning = 3000;
let timeAutoNext = 5000;

nextDom.onclick = function () {
  showSlider("next");
};

prevDom.onclick = function () {
  showSlider("prev");
};
let runTimeOut;
let runNextAuto = setTimeout(() => {
  next.click();
}, timeAutoNext);
function showSlider(type) {
  let SliderItemsDom = SliderDom.querySelectorAll(
    ".slider-animals .list-slider-animals .item-slider-animals"
  );
  let thumbnailItemsDom = document.querySelectorAll(
    ".slider-animals .thumbnail-slider-animals .item-slider-animals"
  );

  if (type === "next") {
    SliderDom.appendChild(SliderItemsDom[0]);
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    carouselDom.classList.add("next");
  } else {
    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
    carouselDom.classList.add("prev");
  }
  clearTimeout(runTimeOut);
  runTimeOut = setTimeout(() => {
    carouselDom.classList.remove("next");
    carouselDom.classList.remove("prev");
  }, timeRunning);

  clearTimeout(runNextAuto);
  runNextAuto = setTimeout(() => {
    next.click();
  }, timeAutoNext);
}
