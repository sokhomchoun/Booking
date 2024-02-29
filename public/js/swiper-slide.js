// Home page slide
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 16,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        1025: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        769: {
            slidesPerView : 4,
        }
    },
});

// Properties page slide
const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper01 = new Swiper(".mySwiper01", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
    },
    
});
var swiper = new Swiper(".mySwiper02", {
    slidesPerView: 3,
    spaceBetween: 16,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        1025: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        // 769: {
        //     slidesPerView : 4,
        // }
    },
});

var swiper = new Swiper(".mySwiper03", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper04", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });