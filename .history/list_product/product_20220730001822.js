const listTab = document.querySelectorAll(".tab-item");
const tabItem = document.querySelectorAll(".tab-item--product");
console.log("2item", listTab, tabItem);
tabList;
// -------tab---
const tabList = document.querySelectorAll(".tab-item");
const tabConten = document.querySelectorAll(".tab-item--product");
// Sap xep

const search_btn = document.getElementById("btn-searcha");
const block_filter = document.querySelectorAll(".filter button");
const block_product = document.querySelectorAll(".product-block");
Array.from(tabList).forEach(function (element) {
  element.addEventListener("click", function (event) {
    for (let i = 0; i < tabList.length; i++) {
      tabList[i].classList.remove("is-active");
    }
    this.classList.add("is-active");

    let name_filter = element.dataset.tab;
    // console.log(name_filter)

    Array.from(tabConten).forEach(function (item) {
      if (item.dataset.item === name_filter || name_filter === "all") {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  });
});
