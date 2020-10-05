document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    document.querySelector("body").style.visibility = "hidden";
    document.querySelector("#loader").style.visibility = "visible";
  } else {
    document.querySelector("#loader").style.display = "none";
    document.querySelector("body").style.visibility = "visible";
  }
};

var mySwiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    1200: {
      slidesPerView: 2,
    },
    2200: {
      slidesPerView: 3,
    },
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  debugger: true,
});

// Carousel Container

const Swiper1 = new Swiper(".swiper-container1", {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  slidesPerColumn: 1,
  spaceBetween: 10,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination2",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next2",
    prevEl: ".swiper-button-prev2",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".carousel-scrollbar2",
  },
  debugger: true,
});

var slugSwiper = new Swiper(".swiper-container-slug", {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    500: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
    1500: {
      slidesPerView: 4,
    },
    2000: {
      slidesPerView: 5,
    },
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
  debugger: true,
});

const scheduleContainer = new Swiper(".swiper-container-schedule", {
  loop: true,
  slidesPerView: 1,
  breakpoints: {
    550: {
      slidesPerView: 2,
    },
    750: {
      slidesPerView: 3,
    },
    1000: {
      slidesPerView: 4,
    },
    1300: {
      slidesPerView: 5,
    },
  },
});
