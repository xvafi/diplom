const rangeMin = document.getElementById('rangeMin');
const rangeMax = document.getElementById('rangeMax');
const slider = document.getElementById('slider');
const minValue = document.getElementById('minValue');
const maxValue = document.getElementById('maxValue');

const rangeMin2 = document.getElementById('rangeMin2');
const rangeMax2 = document.getElementById('rangeMax2');
const slider2 = document.getElementById('slider2');
const minValue2 = document.getElementById('minValue2');
const maxValue2 = document.getElementById('maxValue2');

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
rangeMin.addEventListener('input', updateSlider);
rangeMax.addEventListener('input', updateSlider);

// Инициализируем слайдер при загрузке страницы
updateSlider();

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
rangeMin2.addEventListener('input', updateSlider2);
rangeMax2.addEventListener('input', updateSlider2);

updateSlider2();
