//swiper
var Swiper = new Swiper(".swiper-container", {
  loop: true,
  speed: 400,
  slidesPerView: 1,
  autoplay: {
    delay: 2500,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  effect: "coverflow",
});
