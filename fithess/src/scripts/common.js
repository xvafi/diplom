const tariffCardsBlock = document.querySelectorAll(".tariff-cards-block");
tariffCardsBlock.forEach((e, index) => {
  e.addEventListener("mouseover", () => {
    if (e.children.length === 3) {
      e.children[0].style.display = "none";
      e.children[1].style.display = "none";
      e.children[2].style.display = "none";
    } else if (e.children.length === 2) {
      e.children[0].style.display = "none";
      e.children[1].style.display = "none";
    }
    const div = document.createElement("div");
    const form = document.createElement("form");
    const inputCard = document.createElement("input");
    const inputUser = document.createElement("input");
    const inputTimeToday = document.createElement("input");
    const inputTimeNext = document.createElement("input");
    // form.style.display = 'none'
    inputCard.name = "numTarif";
    inputTimeToday.name = "dateToday";
    inputTimeNext.name = "dateNext";
    inputUser.name = "userId";
    inputCard.type = "text";
    inputTimeToday.type = "text";
    inputTimeNext.type = "text";
    inputUser.type = "text";
    tariffCardsBlock[2].style.height = "287px";
    div.textContent = "Купить";
    // div.style.fontSize = '5em'
    // div.style.fontWeight = '600'
    // div.style.pointerEvents = 'none'
    div.classList.add("btn-buy");
    div.dataset.card = index;
    e.style.alignItems = "center";
    if (document.title === "Профиль") {
      form.action = "../php/buyTariff.php";
    } else if (document.title === "Fitness") {
      form.action = "./src/php/buyTariff.php";
    }
    form.method = "POST";
    form.style.display = "none";
    const num = index + 1;
    const date = new Date();
    inputCard.value = num;
    if (document.querySelector(".profile")) {
      inputUser.value = document.querySelector(".profile").dataset.userid;
      inputTimeToday.value = `${date.getFullYear()}-${
        date.getMonth() + 1
      }-${date.getDate()}`;
      inputTimeNext.value = `${date.getFullYear()}-${
        date.getMonth() + 2
      }-${date.getDate()}`;
      e.dataset.card = num;
    }
    form.appendChild(inputUser);
    form.appendChild(inputCard);
    form.appendChild(inputTimeToday);
    form.appendChild(inputTimeNext);
    div.appendChild(form);
    e.appendChild(div);
  });
  e.addEventListener("click", () => {
    e.querySelector(".btn-buy");
    e.querySelector("form").submit();
    alert("Спс что купили");
  });
  e.addEventListener("mouseout", () => {
    if (e.children.length === 4) {
      e.children[0].style.display = "block";
      e.children[1].style.display = "block";
      e.children[2].style.display = "block";
      e.children[3].remove();
      e.style.alignItems = "flex-start";
    } else if (e.children.length === 3) {
      e.children[0].style.display = "flex";
      e.children[1].style.display = "flex";
      e.children[2].remove();
      e.style.flexDirection = "column";
    }
  });
});
window.addEventListener("DOMContentLoaded", () => {
  // Переменные для input range - Ползунок
  const rangeMin = document.getElementById("rangeMin");
  const rangeMax = document.getElementById("rangeMax");
  const slider = document.getElementById("slider");
  const minValue = document.getElementById("minValue");
  const maxValue = document.getElementById("maxValue");

  const rangeMin2 = document.getElementById("rangeMin2");
  const rangeMax2 = document.getElementById("rangeMax2");
  const slider2 = document.getElementById("slider2");
  const minValue2 = document.getElementById("minValue2");
  const maxValue2 = document.getElementById("maxValue2");
  if (
    rangeMin != undefined &&
    rangeMax != undefined &&
    slider != undefined &&
    minValue != undefined &&
    maxValue != undefined &&
    rangeMin2 != undefined &&
    rangeMax2 != undefined &&
    slider2 != undefined &&
    minValue2 != undefined &&
    maxValue2 != undefined
  ) {
    rangeMin.addEventListener("input", updateSlider);
    rangeMax.addEventListener("input", updateSlider);
    rangeMin2.addEventListener("input", updateSlider2);
    rangeMax2.addEventListener("input", updateSlider2);
    // Инициализируем слайдер при загрузке страницы
    updateSlider();
    updateSlider2();
  }
});
function updateSlider() {
  const min = parseInt(rangeMin.value);
  const max = parseInt(rangeMax.value);
  // Обеспечиваем, чтобы минимальное значение не превышало максимальное
  if (min > max) {
    rangeMin.value = max;
  }
  // Обновляем положение ползунка
  const minPercent = (rangeMin.value / rangeMin.max) * 100;
  const maxPercent = (rangeMax.value / rangeMax.max) * 100;
  slider.style.left = `${minPercent}%`;
  slider.style.width = `${maxPercent - minPercent}%`;
  // Обновляем отображаемые значения
  minValue.textContent = rangeMin.value;
  maxValue.textContent = rangeMax.value;
}
function updateSlider2() {
  const min = parseInt(rangeMin2.value);
  const max = parseInt(rangeMax2.value);
  // Обеспечиваем, чтобы минимальное значение не превышало максимальное
  if (min > max) {
    rangeMin2.value = max;
  }
  // Обновляем положение ползунка
  const minPercent = (rangeMin2.value / rangeMin2.max) * 100;
  const maxPercent = (rangeMax2.value / rangeMax2.max) * 100;
  slider2.style.left = `${minPercent}%`;
  slider2.style.width = `${maxPercent - minPercent}%`;
  // Обновляем отображаемые значения
  minValue2.textContent = rangeMin2.value;
  maxValue2.textContent = rangeMax2.value;
}

window.addEventListener("click", (e) => {
  console.log(e.target);
  if (e.target.className === "del-program") {
    const inpUser = document.querySelector("#userId");
    const inpProgram = document.querySelector("#programId");
    console.log(
      document.querySelector(".profile").dataset.userid,
      e.target.dataset.progid
    );
    inpUser.value = document.querySelector(".profile").dataset.userid;
    inpProgram.value = e.target.dataset.progid;
    console.log(document.querySelector(".del-user-record-program"));
    document.querySelector(".del-user-record-program").submit();
  }
  if (
    e.target.className === "window-img-training" ||
    e.target.className === "window-training"
  ) {
    document.querySelector(".back-div").style.display = "none";
    document.querySelector(".window-training").style.display = "none";
  }
  if (e.target.classList[1] === "my-training") {
    document.querySelector(".back-div").style.display = "block";
    document.querySelector(".window-training").style.display = "flex";
  }
  if (e.target.className === "programs-record-btn") {
    inpProg = document.querySelector("#programId");
    inpUser = document.querySelector("#usersId");
    document.querySelector(".profile").dataset.userid;
    inpProg.value = e.target.parentElement.dataset.progid;
    inpUser.value = document.querySelector(".profile").dataset.userid;
    document.querySelector(".record-program").submit();
  }
  if (e.target.className === "programs-record-btn-reg") {
    document.location = "http://fithess/src/views/profile.php";
  }
  if (
    e.target.classList[0] == "tariff-cards-block-no-reg" ||
    e.target.className == "btn-login-img" ||
    e.target.className === "header-sidenav-item btn-login" ||
    e.target.className === "check-login-title"
  ) {
    document.querySelector(".back-div").style.display = "block";
    document.querySelector(".window").style.display = "flex";
  }
  if (
    e.target.className === "window-account" ||
    e.target.className === "window-account-img"
  ) {
    document.querySelector(".back-div").style.display = "none";
    document.querySelector(".window-account").style.display = "none";
  }
  if (
    e.target.className === "back-div" ||
    e.target.className === "window" ||
    e.target.className === "window-img"
  ) {
    document.querySelector(".back-div").style.display = "none";
    document.querySelector(".window").style.display = "none";
  }
  if (e.target.className === "login-form-to-reg") {
    document.querySelector(".window-login").style.display = "none";
    document.querySelector(".window-registration").style.display = "flex";
  }
  if (e.target.className === "registration-form-to-login") {
    document.querySelector(".window-login").style.display = "flex";
    document.querySelector(".window-registration").style.display = "none";
  }
  if (
    e.target.className === "profile-settings" ||
    e.target.className === "profile-settings-img"
  ) {
    document.querySelector(".back-div").style.display = "block";
    document.querySelector(".window-account").style.display = "flex";
  }
  if (e.target.className === "treners-card-end") {
    closeFilter();
    document.querySelectorAll(".filter-gender-win-item").forEach((e, index) => {
      e.classList.remove("gender-item-win-active");
      e.classList.remove("gender-item-win-active");
      document
        .querySelectorAll(".filter-gender-win-item")[0]
        .classList.add("gender-item-win-active");
    });
    document.querySelectorAll(".filter-category-win-item").forEach((e) => {
      e.classList.remove("category-win-item-active");
    });
    if (e.target.dataset.tren === "personal") {
      const parent = document.querySelectorAll(".personal-treners-card-all");
      document
        .querySelectorAll(".filter-category-win-item")[0]
        .classList.add("category-win-item-active");
      parent.forEach((e, index) => {
        e.querySelector(".personal-treners-card-profile").textContent;
        parent[index].style.display = "flex";
        if (
          e.querySelector(".personal-treners-card-profile").textContent !=
          "Персональный тренер"
        ) {
          parent[index].style.display = "none";
        }
      });
    } else if (e.target.dataset.tren === "trener") {
      const parent = document.querySelectorAll(".personal-treners-card-all");
      document
        .querySelectorAll(".filter-category-win-item")[1]
        .classList.add("category-win-item-active");
      parent.forEach((e, index) => {
        e.querySelector(".personal-treners-card-profile").textContent;
        parent[index].style.display = "flex";
        if (
          e.querySelector(".personal-treners-card-profile").textContent !=
          "Тренер"
        ) {
          parent[index].style.display = "none";
        }
      });
    }
  }
  if (
    e.target.className === "window-treners" ||
    e.target.className === "window-treners-img" ||
    e.target.className === "treners-card-end-img"
  ) {
    document.querySelector(".back-div").style.display = "none";
    document.querySelector(".window-treners").style.display = "none";

    if (document.querySelector(".treners-filter").style.display === "flex") {
      document.querySelector(".treners-filter").style.display = "none";
      const filter = document.querySelector(".treners-filter-img");
      filter.src = "../../resources/img/setting.png";
      filter.classList.remove("filter-active");
    }
  }
  if (e.target.className === "programs-record-block") {
    programLevel("../../resources/img/thunder-fill.png");
    document.querySelector(".back-div").style.display = "block";
    document.querySelector(".window-program").style.display = "flex";
    document.querySelectorAll(".programs-card-title")[0].textContent =
      e.target.children[1].textContent;
    document.querySelectorAll(".programs-card-title")[1].textContent =
      e.target.children[1].textContent;
    document.querySelector(".programs-card-info-category").textContent =
      e.target.children[1].dataset.category;
    document.querySelector(".programs-card-info-power").dataset.level =
      e.target.children[0].dataset.level;
    document.querySelector(".programs-card-trener-name").textContent =
      e.target.children[2].children[1].textContent;
    document.querySelector(".programs-card-info-day").textContent =
      e.target.children[0].children[0].textContent;
    document.querySelector(".programs-card-info-time").textContent =
      e.target.children[0].children[0].dataset.days;
    document.querySelector(".programs-card-note").textContent =
      e.target.children[3].textContent;
  }
  if (
    e.target.className === "window-program-img" ||
    e.target.className === "window-program"
  ) {
    document.querySelector(".back-div").style.display = "none";
    document.querySelector(".window-program").style.display = "none";
  }

  // Фильтрация в окне
  if (e.target.className === "filter-block-btn-win") {
    let category3 = "";
    let category4 = "";
    let gender2 = "";
    let ageMin2 = 0;
    let ageMax2 = 0;
    const filCategory = document.querySelectorAll(".filter-category-win-item");
    filCategory.forEach((e) => {
      if (e.classList.contains("category-win-item-active")) {
        if (e.textContent === "Тренер групповых программ") {
          category3 = "Тренер";
        } else if (e.textContent === "Персональный тренер") {
          category4 = "Персональный тренер";
        }
      }
    });
    const filGender = document.querySelectorAll(".filter-gender-win-item");
    filGender.forEach((e, index) => {
      if (e.classList.contains("gender-item-win-active")) {
        gender2 = e.textContent;
      }
    });
    ageMin2 = document.querySelector("#minValue2").textContent;
    ageMax2 = document.querySelector("#maxValue2").textContent;
    const parent = document.querySelectorAll(".personal-treners-card-all");
    parent.forEach((e, index) => {
      const ageTreners = e.querySelector(
        ".personal-treners-card-years"
      ).textContent;
      if (
        gender2 === "Неважно" &&
        "" === category3 &&
        "" === category4 &&
        +ageMin2 <= +ageTreners &&
        +ageTreners <= +ageMax2
      ) {
        document.querySelectorAll(".filter-category-win-item").forEach((e) => {
          e.classList.remove("category-win-item-active");
        });
        e.style.display = "flex";
      } else if (
        gender2 === "Неважно" &&
        e.querySelector(".personal-treners-card-profile").textContent !=
          category3 &&
        "" === category4 &&
        +ageMin2 <= +ageTreners &&
        +ageTreners <= +ageMax2
      ) {
        categoryCheck(category3, category4);
        e.style.display = "none";
      } else if (
        gender2 === "Неважно" &&
        e.querySelector(".personal-treners-card-profile").textContent !=
          category4 &&
        "" === category3 &&
        +ageMin2 <= +ageTreners &&
        +ageTreners <= +ageMax2
      ) {
        categoryCheck(category3, category4);
        e.style.display = "none";
      } else if (
        (gender2 === "Неважно" &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category3 &&
          +ageMin2 <= +ageTreners &&
          +ageTreners <= +ageMax2) ||
        (gender2 === "Неважно" &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category4 &&
          +ageMin2 <= +ageTreners &&
          +ageTreners <= +ageMax2)
      ) {
        categoryCheck(category3, category4);
        e.style.display = "flex";
      } else if (
        gender2 === e.dataset.sex &&
        e.querySelector(".personal-treners-card-profile").textContent ===
          category3 &&
        "" === category4 &&
        +ageMin2 <= +ageTreners &&
        +ageTreners <= +ageMax2
      ) {
        genderCheck(gender2);
        categoryCheck(category3, category4);
        e.style.display = "flex";
      } else if (
        gender2 === e.dataset.sex &&
        e.querySelector(".personal-treners-card-profile").textContent ===
          category4 &&
        "" === category3 &&
        +ageMin2 <= +ageTreners &&
        +ageTreners <= +ageMax2
      ) {
        genderCheck(gender2);
        categoryCheck(category3, category4);
        e.style.display = "flex";
      } else if (
        (gender2 === e.dataset.sex &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category4 &&
          +ageMin2 <= +ageTreners &&
          +ageTreners <= +ageMax2) ||
        (gender2 === e.dataset.sex &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category3 &&
          +ageMin2 <= +ageTreners &&
          +ageTreners <= +ageMax2)
      ) {
        genderCheck(gender2);
        categoryCheck(category3, category4);
        e.style.display = "flex";
      } else if (
        gender2 === e.dataset.sex &&
        "" === category3 &&
        "" === category4 &&
        +ageMin2 <= +ageTreners &&
        +ageTreners <= +ageMax2
      ) {
        genderCheck(gender2);
        categoryCheck(category3, category4);
        e.style.display = "flex";
      } else {
        e.style.display = "none";
      }
      minValue2.textContent = ageMin2;
      maxValue2.textContent = ageMax2;
    });
  }
  // Фильтрация
  if (e.target.className === "filter-block-btn") {
    closeFilter();
    let category1 = "";
    let category2 = "";
    let gender = "";
    let ageMin = 0;
    let ageMax = 0;
    const filCategory = document.querySelectorAll(".filter-category-item");
    filCategory.forEach((e) => {
      if (e.classList.contains("category-item-active")) {
        if (e.textContent === "Тренер групповых программ") {
          category1 = "Тренер";
        } else if (e.textContent === "Персональный тренер") {
          category2 = "Персональный тренер";
        }
      }
    });
    const filGender = document.querySelectorAll(".filter-gender-item");
    filGender.forEach((e, index) => {
      if (e.classList.contains("gender-item-active")) {
        gender = e.textContent;
      }
    });
    ageMin = document.querySelector("#minValue").textContent;
    ageMax = document.querySelector("#maxValue").textContent;
    const parent = document.querySelectorAll(".personal-treners-card-all");
    parent.forEach((e, index) => {
      const ageTreners = e.querySelector(
        ".personal-treners-card-years"
      ).textContent;
      if (
        gender === "Неважно" &&
        "" === category1 &&
        "" === category2 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        document.querySelectorAll(".filter-category-win-item").forEach((e) => {
          e.classList.remove("category-win-item-active");
        });
        e.style.display = "flex";
      } else if (
        gender === "Неважно" &&
        e.querySelector(".personal-treners-card-profile").textContent !=
          category1 &&
        "" === category2 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        categoryCheck(category1, category2);
        e.style.display = "none";
      } else if (
        gender === "Неважно" &&
        e.querySelector(".personal-treners-card-profile").textContent !=
          category2 &&
        "" === category1 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        categoryCheck(category1, category2);
        e.style.display = "none";
      } else if (
        (gender === "Неважно" &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category1 &&
          +ageMin <= +ageTreners &&
          +ageTreners <= +ageMax) ||
        (gender === "Неважно" &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category2 &&
          +ageMin <= +ageTreners &&
          +ageTreners <= +ageMax)
      ) {
        categoryCheck(category1, category2);
        e.style.display = "flex";
      } else if (
        gender === e.dataset.sex &&
        e.querySelector(".personal-treners-card-profile").textContent ===
          category1 &&
        "" === category2 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        // Мужской тренер (груповых)
        genderCheck(gender);
        categoryCheck(category1, category2);
        e.style.display = "flex";
      } else if (
        gender === e.dataset.sex &&
        e.querySelector(".personal-treners-card-profile").textContent ===
          category2 &&
        "" === category1 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        // Мужской тренер (груповых)
        genderCheck(gender);
        categoryCheck(category1, category2);
        e.style.display = "flex";
      } else if (
        gender === e.dataset.sex &&
        e.querySelector(".personal-treners-card-profile").textContent ===
          category2 &&
        "" === category1 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        // Мужской/женский тренер (перс)
        genderCheck(gender);
        categoryCheck(category1, category2);
        e.style.display = "flex";
      } else if (
        (gender === e.dataset.sex &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category2 &&
          +ageMin <= +ageTreners &&
          +ageTreners <= +ageMax) ||
        (gender === e.dataset.sex &&
          e.querySelector(".personal-treners-card-profile").textContent ===
            category1 &&
          +ageMin <= +ageTreners &&
          +ageTreners <= +ageMax)
      ) {
        // Мужской/Женский тренер (перс+групп)
        genderCheck(gender);
        categoryCheck(category1, category2);
        e.style.display = "flex";
      } else if (
        gender === e.dataset.sex &&
        "" === category1 &&
        "" === category2 &&
        +ageMin <= +ageTreners &&
        +ageTreners <= +ageMax
      ) {
        // Мужской/Женский тренер (перс+групп)(неотмеченное)
        genderCheck(gender);
        categoryCheck(category1, category2);
        e.style.display = "flex";
      } else {
        e.style.display = "none";
      }
      minValue2.textContent = ageMin;
      maxValue2.textContent = ageMax;
    });
  }
});
function genderCheck(gender) {
  document.querySelectorAll(".filter-gender-win-item").forEach((e) => {
    if (e.textContent === gender) {
      e.classList.add("gender-item-win-active");
    } else {
      e.classList.remove("gender-item-win-active");
    }
  });
}
function categoryCheck(category1, category2) {
  document.querySelectorAll(".filter-category-win-item").forEach((e) => {
    if (e.textContent === category2) {
      e.classList.add("category-win-item-active");
    } else if (
      category1 != "" &&
      e.textContent === "Тренер групповых программ"
    ) {
      e.classList.add("category-win-item-active");
    } else {
      e.classList.remove("category-win-item-active");
    }
  });
}
function closeFilter() {
  document.querySelector(".back-div").style.display = "block";
  document.querySelector(".window-treners").style.display = "flex";
  if (document.querySelector(".treners-staff-img.filter-active")) {
    document.querySelector(".treners-staff-img.filter-active").src =
      "../../resources/img/setting.png";
    document
      .querySelector(".treners-staff-img.filter-active")
      .classList.remove("filter-active");
    document.querySelector(".filter").style.display = "none";
  }
}
function programLevel(photo) {
  const block = document.querySelectorAll(".programs-card-info-power");
  block.forEach((e) => {
    let img = e.querySelectorAll(".programs-card-power");
    if (e.dataset.level == 1) {
      img[0].src = photo;
    }
    if (e.dataset.level == 2) {
      img[0].src = photo;
      img[1].src = photo;
    }
    if (e.dataset.level == 3) {
      img[0].src = photo;
      img[1].src = photo;
      img[2].src = photo;
    }
  });
}
