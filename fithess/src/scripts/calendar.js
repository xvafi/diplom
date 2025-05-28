const primeBlock = document.querySelector(".datetime-content");
function createWeekCalendar(startDate) {
  // Преобразуем строку в объект Date
  const start = new Date(startDate);
  const weekDays = [];
  // Заполняем массив днями недели
  for (let i = 0; i < 7; i++) {
    const day = new Date(start);
    day.setDate(start.getDate() + i);
    console.log(window.outerWidth);
    if (window.outerWidth < 900) {
      weekDays.push(
        day.toLocaleDateString("ru-RU", {
          weekday: "short",
          day: "numeric",
          month: "numeric",
          year: "numeric",
        })
      );
    } else {
      weekDays.push(
        day.toLocaleDateString("ru-RU", {
          weekday: "long",
          day: "numeric",
          month: "numeric",
          year: "numeric",
        })
      );
    }
  }
  return weekDays;
}

// Пример использования функции
const startDateInput = new Date(); // Укажите начальную дату
const weekCalendar = createWeekCalendar(startDateInput);
weekCalendar.forEach((day) => {
  const divBlock = document.createElement("div");
  divBlock.classList.add("datetime-content-block");
  divBlock.dataset.fulldate = `${day.split(",")[1].split(".")[0]}.${
    day.split(",")[1].split(".")[1]
  }.${day.split(",")[1].split(".")[2].split(" ")[0]}`;
  const divDay = document.createElement("div");
  divDay.classList.add("datetime-day");
  divDay.textContent = day.split(", ")[0];

  const divNumber = document.createElement("div");
  divNumber.classList.add("datetime-day");
  divNumber.textContent = day.split(",")[1].split(".")[0];

  primeBlock.appendChild(divBlock);
  divBlock.appendChild(divDay);
  divBlock.appendChild(divNumber);
});
const parentDays = document.querySelector(".datetime-content");
const days = parentDays.querySelectorAll(".datetime-content-block");
document.addEventListener("DOMContentLoaded", () => {
  const activeDay = document.querySelector(".datetime-content-block-active");
  let timeCalendar = activeDay.dataset.fulldate.trim();
  programCards(timeCalendar);
});

days[0].classList.add("datetime-content-block-active");
days.forEach((e) => {
  e.addEventListener("click", () => {
    document
      .querySelector(".datetime-content-block-active")
      .classList.remove("datetime-content-block-active");
    e.classList.add("datetime-content-block-active");
    let timeCalendar = e.dataset.fulldate.trim();
    programCards(timeCalendar);
  });
});
function programCards(timeCalendar) {
  document.querySelectorAll(".programs-record-block").forEach((i) => {
    let timeProgram = i.children[0].children[0].dataset.days;
    if (timeProgram == timeCalendar) {
      i.style.display = "flex";
    } else {
      i.style.display = "none";
    }
  });
}
function createWeekCalendar(startDate) {
  // Преобразуем строку в объект Date
  const start = new Date(startDate);
  const weekDays = [];
  // Заполняем массив днями недели
  for (let i = 0; i < 7; i++) {
    const day = new Date(start);
    day.setDate(start.getDate() + i);
    console.log(window.outerWidth);
    weekDays.push(
      day.toLocaleDateString("ru-RU", {
        weekday: "long",
        day: "numeric",
        month: "numeric",
        year: "numeric",
      })
    );
  }
  return weekDays;
}