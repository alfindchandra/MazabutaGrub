const carousel = document.getElementById("sectionSlider");
const items = carousel.querySelectorAll(".carousel-item");
let currentIndex = 0;

function showSlide(index) {
    items.forEach((item, i) => {
        item.classList.toggle("active", i === index);
    });
}

document.querySelector("[data-carousel-prev]").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + items.length) % items.length;
    showSlide(currentIndex);
});

document.querySelector("[data-carousel-next]").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide(currentIndex);
});

// Optional Auto Slide
setInterval(() => {
    currentIndex = (currentIndex + 1) % items.length;
    showSlide(currentIndex);
}, 5000); // Change every 5 seconds
