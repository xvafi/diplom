const slides = document.querySelector('.slides');
let currentIndex = 0;

function showSlide(index) {
    const totalSlides = document.querySelectorAll('.slide').length;
    if (index >= totalSlides) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
    }
    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
}
let startX, endX;
slides.addEventListener('mousedown', (event) => {
    startX = event.clientX;
    slides.style.transition = 'none'; // Отключаем плавный переход
    
    const mouseMoveHandler = (e) => {
        endX = e.clientX;
        const diff = startX - endX;
        slides.style.transform = `translateX(-${currentIndex * 100 - (diff / slides.clientWidth) * 100}%)`;
    };

    const mouseUpHandler = () => {
        const diff = startX - endX;
        if (diff > 50) {
            currentIndex++;
        } else if (diff < -50) {
            currentIndex--;
        }
        showSlide(currentIndex);
        slides.removeEventListener('mousemove', mouseMoveHandler);
        slides.removeEventListener('mouseup', mouseUpHandler);
        slides.style.transition = ''; // Включаем плавный переход обратно
    };

    slides.addEventListener('mousemove', mouseMoveHandler);
    slides.addEventListener('mouseup', mouseUpHandler);
});
slides.addEventListener('touchmove', (event) => {
  
    startX = event.touches[0].clientX;
    slides.style.transition = 'none'; // Отключаем плавный переход
    
    const touchMoveHandler = (e) => {
      console.log(e.touches)
        endX = e.touches[0].clientX;
        const diff = startX - endX;
        slides.style.transform = `translateX(-${currentIndex * 100 - (diff / slides.clientWidth) * 100}%)`;
    };

    const touchEndHandler = () => {
        const diff = startX - endX;
        if (diff > 50) {
            currentIndex++;
        } else if (diff < -50) {
            currentIndex--;
        }
        showSlide(currentIndex);
        slides.removeEventListener('touchmove', touchMoveHandler);
        slides.removeEventListener('touchend', touchEndHandler);
        slides.style.transition = ''; // Включаем плавный переход обратно
    };
    slides.addEventListener('touchmove', touchMoveHandler);
    slides.addEventListener('touchend', touchEndHandler);
});
