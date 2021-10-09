"use strict";
//swiper
var Swiper = new Swiper(".swiper-container", {
  loop: true,
  speed: 400,
  slidesPerView: 4,
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
});

//自作関数
//fade in
function fadeIn(targetElement, duration) {
  if (!targetElement) return;

  const fadeTime = duration ? duration : 250;
  const roopTime = fadeTime / 10;
  let initialOpacity = 0;

  const addOpacity = setInterval(function () {
    if (initialOpacity > 1) {
      clearInterval(addOpacity);
      targetElement.style.opacity = 1;
    } else {
      initialOpacity = initialOpacity + 0.1;
      targetElement.style.opacity = initialOpacity;
    }
  }, roopTime);

  targetElement.style.opacity = 0;
  targetElement.style.display = "block";
  addOpacity;
}
//fede out
function fadeOut(targetElement, duration) {
  if (!targetElement) return;

  const fadeTime = duration ? duration : 200;
  const roopTime = fadeTime / 10;
  let initialOpacity = 1;

  const decreaseOpacity = setInterval(function () {
    if (initialOpacity < 0) {
      clearInterval(decreaseOpacity);
      targetElement.style.opacity = 0;
      targetElement.style.display = "none";
    } else {
      initialOpacity = initialOpacity - 0.1;
      targetElement.style.opacity = initialOpacity;
    }
  }, roopTime);

  decreaseOpacity;
}
//カートの商品数
function countSum() {
  const modalFigs = Array.from(modalBody.getElementsByTagName("figure"));
  const quantity = document.getElementById("quantity");
  let valsArray = [];
  let sum = 0;

  modalFigs.forEach(function (thisfig) {
    const counterInput = thisfig.getElementsByTagName("input");
    const thisVal = counterInput[0].value;
    valsArray.push(thisVal);
  });
  valsArray.forEach((number) => {
    number = parseInt(number);
    sum += number;
  });

  const pop = document.getElementById("pop");
  if (sum != 0) {
    pop.style.display = "none";
  } else {
    pop.style.display = "block";
  }

  quantity.textContent = sum;
}
//カートの合計金額
function displayTotal() {
  let sum = 0;
  let array = [];
  const modalFigs = Array.from(modalBody.getElementsByTagName("figure"));
  modalFigs.forEach(function (el) {
    const priceHolder = el.getElementsByClassName("price");
    const countNum = el.getElementsByClassName("count");
    let num = parseInt(countNum[0].value);
    let thisPrice = priceHolder[0].textContent;
    thisPrice = parseInt(thisPrice.replace(/￥/g, "").replace(/,/g, ""));

    let thisTotal = num * thisPrice;
    array.push(thisTotal);
  });
  array.forEach((number) => {
    sum += number;
  });

  total.textContent = sum;
}

//headerとmodalの処理
const openCart = document.getElementById("openCart");
const closeCart = document.getElementById("closeCart");
const modalWrapper = document.getElementById("modalWrapper");
const faUser = document.getElementById("faUser");
const userMenu = document.getElementById("userMenu");
const modalBody = document.getElementById("modalBody");
const total = document.getElementById("total");
countSum();
displayTotal();
openCart.addEventListener("click", function () {
  countSum();
  displayTotal();
  fadeIn(modalWrapper);
});
closeCart.addEventListener("click", function () {
  countSum();
  fadeOut(modalWrapper);
});
faUser.addEventListener("click", function () {
  fadeIn(userMenu);
});
userMenu.addEventListener("mouseleave", function () {
  fadeOut(userMenu);
});
// look sectionの処理
const selecter = document.getElementById("selecter");
const category = document.getElementById("category");
const selecterLi = Array.from(selecter.getElementsByTagName("li"));
const categoryLi = Array.from(category.getElementsByTagName("li"));
const swichedArea = document.getElementById("swichedArea");
const swichedArticle = swichedArea.getElementsByTagName("article");
//selecterLiを押した時の処理
selecterLi.forEach((el) => {
  el.addEventListener("click", function () {
    //selecterLiの切り替え
    const getGender = this.textContent;
    for (let i = 0; i < selecterLi.length; i++) {
      const judge = selecterLi[i].classList.contains(getGender);
      if (judge) {
        selecterLi[i].classList.add("active");
      } else {
        selecterLi[i].classList.remove("active");
      }
    }
    //swiched-areaの切り替え
    const active = Array.from(category.getElementsByClassName("active"));
    const getTgt = active[0].getAttribute("data-target");
    for (let i = 0; i < swichedArticle.length; i++) {
      const judge1 = swichedArticle[i].classList.contains(getGender);
      const judge2 = swichedArticle[i].classList.contains(getTgt);
      if (judge1 && judge2) {
        fadeIn(swichedArticle[i], 300);
      } else {
        swichedArticle[i].style.display = "none";
      }
    }
  });
});
//categoryLiを押した時の処理
categoryLi.forEach((el) => {
  el.addEventListener("click", function () {
    //categoryLiの切り替え
    const getTgt = this.getAttribute("data-target");
    for (let i = 0; i < categoryLi.length; i++) {
      const judge = categoryLi[i].classList.contains(getTgt);
      if (judge) {
        categoryLi[i].classList.add("active");
      } else {
        categoryLi[i].classList.remove("active");
      }
    }
    // swiched-areaの切り替え
    const active = Array.from(selecter.getElementsByClassName("active"));
    const getGender = active[0].textContent;
    for (let i = 0; i < swichedArticle.length; i++) {
      const judge1 = swichedArticle[i].classList.contains(getGender);
      const judge2 = swichedArticle[i].classList.contains(getTgt);
      if (judge1 && judge2) {
        fadeIn(swichedArticle[i], 300);
      } else {
        swichedArticle[i].style.display = "none";
      }
    }
  });
});
//カートに入れる処理
const CartPlus = Array.from(swichedArea.getElementsByTagName("button"));
CartPlus.forEach((el) => {
  el.addEventListener("click", function () {
    const thisFig = el.closest("figure");
    el.style.display = "none";
    let copyFig = thisFig.cloneNode(true);
    const counter =
      '<div class="counter-wrap"><div class="counter"><span class="minus count-btn">-</span><input class="count" type="numelic" value="1"><span class="plus count-btn">+</span></div><button type="button" name="button" class="delete">削除</button></div>';

    copyFig.insertAdjacentHTML("beforeend", counter);
    el.style.display = "block";
    el.setAttribute("disabled", "true");
    el.style.backgroundColor = "#eee";
    el.style.boderColor = "#fff";
    modalBody.appendChild(copyFig);
    countSum();

    //＋-押した時の処理の付与
    const signBtn = Array.from(copyFig.getElementsByClassName("count-btn"));
    const countNum = copyFig.getElementsByClassName("count");
    let num = parseInt(countNum[0].value);

    signBtn.forEach(function (thisBtn) {
      thisBtn.addEventListener("click", function () {
        if (thisBtn.classList.contains("minus")) {
          if (num > 1) {
            num -= 1;
            countNum[0].value = num;
            countSum();
            displayTotal();
          }
        } else {
          if (num < 50) {
            num += 1;
            countNum[0].value = num;
            countSum();
            displayTotal();
          }
        }
      });
    });
    //削除押した時の処理の付与
    const deleteBtn = copyFig.getElementsByClassName("delete");

    deleteBtn[0].addEventListener("click", function () {
      const thisData = this.closest("figure").dataset.id;
      const figArray = Array.from(swichedArea.getElementsByTagName("figure"));
      figArray.forEach(function (thisFig) {
        const getData = thisFig.dataset.id;
        if (getData == thisData) {
          el.removeAttribute("disabled");
          el.style.borderColor = "";
          el.style.backgroundColor = "";
        }
      });
      modalBody.removeChild(this.closest("figure"));
      countSum();
      displayTotal();
    });
  });
});
