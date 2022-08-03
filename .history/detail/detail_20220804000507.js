$(document).ready(() => {
  $("#hamburger-menu").click(() => {
    $("#hamburger-menu").toggleClass("active");
    $("#nav-menu").toggleClass("active");
  });

  // setting owl carousel

  let navText = [
    "<i class='fa-solid fa-angle-left'></i>",
    "<i class='fa-solid fa-angle-left'></i>",
  ];

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
const backToTop = document.querySelector(".backtotop");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 400) {
    backToTop.classList.add("active");
  } else {
    backToTop.classList.remove("active");
  }
});

// ----------storyline-cốt truyện-----------
const storylinebtn = document.querySelector(".storyline-block");
const storylineInfo = document.querySelector(".storyline-info--none");
console.log(storylineInfo);
storylinebtn.addEventListener("click", function (e) {
  const titel = e.target.querySelector(".storyline-block--titel");
  const icon = e.target.querySelector(".storyline-block--icon");
  console.log(icon);
  storylineInfo.style.height = `${storylineInfo.scrollHeight}px`;
  storylineInfo.classList.toggle("active");
  if (titel.textContent === "Xem Thêm") {
    titel.textContent = "Ẩn Bớt";
    icon.classList.add("bx-chevron-up");
  } else {
    titel.textContent = "Xem Thêm";
    storylineInfo.style.height = "0px";
    icon.classList.remove("bx-chevron-up");
  }
});

// ----------navLink active-------
const navItems = document.querySelectorAll(".nav-link");
navItems.forEach((item) =>
  item.addEventListener("click", function (e) {
    navItems.forEach((item) => {
      item.classList.remove("active");
    });
    e.target.classList.add("active");
  })
);
window.addEventListener("load", function () {
  // -----------Type-DROPDOWN---------

  const navType = document.querySelector(".nav-link--type");
  const dropdownListNav = document.querySelector(".type-list");
  const icon = document.querySelector(".nav-link-icon");
  const navItems = document.querySelectorAll(".type-item");

  navType.addEventListener("click", function (e) {
    dropdownListNav.classList.toggle("active");
    icon.classList.toggle("fa-caret-up");
    dropdownListNav.style.height = `${dropdownListNav.scrollHeight}px`;

    if (!dropdownListNav.classList.contains("active")) {
      dropdownListNav.style.height = "0px";
    }
  });
});
