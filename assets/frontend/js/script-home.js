document.addEventListener('DOMContentLoaded', () => {
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;

    function updateCarousel() {
      const width = carouselItems[0].clientWidth;
      carouselInner.style.transform = `translateX(-${currentIndex * width}px)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % carouselItems.length;
      updateCarousel();
    }

    setInterval(nextSlide, 3000);
  });

