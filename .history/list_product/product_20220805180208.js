// -------tab---
const tabList = document.querySelectorAll(".tab-item");
const tabConten = document.querySelectorAll(".tab-item--product");
const search = document.getElementById("search");
const itemName = document.querySelectorAll(".product-item-title");

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

// Tim kiem
search.addEventListener("keyup", searchItem);

function searchItem() {
  let valueItem = search.value.toLowerCase();
  Array.from(tabConten).forEach(function (ele) {
    let nameItem = ele.querySelector(".product-item-title").lastChild
      .textContent;
    // .textContent;
    console.log("nameItem=========", nameItem);
    if (nameItem.toLowerCase().indexOf(valueItem) !== -1) {
      ele.style.display = "block";
    } else {
      ele.style.display = "none";
    }
    checkEmpty(block_product);
  });
}
