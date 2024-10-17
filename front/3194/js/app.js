const slides = document.querySelector('.slides');
const indicators = document.querySelectorAll('.indicator');
let currentIndex = 0;

function showSlide(index) {
    currentIndex = index;
    slides.style.transform = `translateX(-${index * 100}%)`;
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === index);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % indicators.length;
    showSlide(currentIndex);
}

indicators.forEach(indicator => {
    indicator.addEventListener('click', () => {
        showSlide(parseInt(indicator.dataset.index));
    });
});

setInterval(nextSlide, 3000); // Chuyển slide mỗi 3 giây