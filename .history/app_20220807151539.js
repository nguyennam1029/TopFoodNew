$(document).ready(() => {
  $("#hamburger-menu").click(() => {
    $("#hamburger-menu").toggleClass("active");
    $("#nav-menu").toggleClass("active");
  });

  // setting owl carousel

  let navText = [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-right'></i>",
  ];

  $("#hero-carousel").owlCarousel({
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    navText: navText,
    autoplay: true,
    autoplayHoverPause: true,
  });

  $("#top-movies-slide").owlCarousel({
    items: 2,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      500: {
        items: 3,
      },
      1200: {
        items: 5,
      },
      1600: {
        items: 6,
      },
    },
  });

  $(".movies-slide").owlCarousel({
    items: 2,
    loop: true,
    dots: false,
    nav: true,
    navText: navText,
    margin: 15,
    responsive: {
      500: {
        items: 3,
      },
      1200: {
        items: 6,
      },
      1600: {
        items: 6,
      },
    },
  });

  $(".movies-slide2").owlCarousel({
    items: 2,
    loop: true,
    dots: false,
    nav: true,
    navText: navText,
    margin: 15,
    responsive: {
      500: {
        items: 3,
      },
      1200: {
        items: 4,
      },
      1600: {
        items: 6,
      },
    },
  });
});
const menuItems = document.querySelectorAll(".nav-link");
const navMenu = document.querySelector("#nav-menu");
const navMenuIcon = document.querySelector("#hamburger-menu");
menuItems.forEach((item) =>
  item.addEventListener("click", function () {
    navMenu.classList.remove("active");
    navMenuIcon.classList.remove("active");
  })
);
// ---------scroll--------
function debounceFn(func, wait, immediate) {
  let timeout;
  return function () {
    let context = this,
      args = arguments;
    let later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    let callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

document.body.addEventListener("click", handelClickModal);
function handelClickModal(e) {
  // console.log(e.target);
  if (e.target.matches(".modal-close")) {
    const modalClose = e.target.parentNode.parentNode;
    modalClose.parentNode.removeChild(modalClose);
  } else if (e.target.matches(".modal-overlay")) {
    // console.log(e.target.parentNode)
    const overModal = e.target.parentNode;
    overModal.parentNode.removeChild(overModal);
  }
}

// ---------BACKTOTOP---------
const backToTop = document.querySelector(".backtotop");
window.addEventListener(
  "scroll",
  debounceFn(function () {
    if (window.pageYOffset > 400) {
      backToTop.classList.add("active");
    } else {
      backToTop.classList.remove("active");
    }
  })
);

// ---------DAY-NIGHT---------
const dayNight = document.querySelector(".day-night");
const bgNav = document.querySelector(".nav-wrapper");
const bgBody = document.querySelector(".app");
const bgFooter = document.querySelector(".footer-bg");
const headingTypes = document.querySelectorAll(".booton-text");
const bgItems = document.querySelectorAll(".tab-item");
const bgBtns = document.querySelectorAll(".btn-11");
dayNight.addEventListener("click", function (e) {
  console.log(e.target);
  bgNav.classList.toggle("active");
  bgBody.classList.toggle("active");
  bgFooter.classList.toggle("active");
  headingTypes.forEach((item) => item.classList.toggle("active"));
  bgItems.forEach((item) => item.classList.toggle("bgdark"));
  bgBtns.forEach((item) => item.classList.toggle("btn-drak"));
});
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 1200) {
    dayNight.classList.add("active");
  } else {
    dayNight.classList.remove("active");
  }
});
// ------------SEARCH-------
$(".searchBtn").click(function () {
  $(".icon-search").toggleClass("searchbtnActive");
  $("form").toggleClass("active");
});

const header = document.querySelector(".nav-wrapper");
const headerHeight = header && header.offsetHeight;
window.addEventListener(
  "scroll",
  debounceFn(function (e) {
    const scrollY = window.pageYOffset;
    if (scrollY >= headerHeight) {
      header && header.classList.add("is-fixed");
      document.body.style.paddingTop = `${headerHeight}px`;
      // if (header) {
      //   header.classList.add("is-fixed");
      // }
    } else {
      header && header.classList.remove("is-fixed");
      document.body.style.paddingTop = 0;
    }
  }, 100)
);

///Noti
const notiTextCount = document.querySelector(".nav-link--cart--noti");
const cartItem = document.querySelectorAll(".cart-item");
console.log("cartItem", cartItem);
for (let i = 0; i < cartItem.length; i++) {
  notiTextCount.textContent = i;
}
