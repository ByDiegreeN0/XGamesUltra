




let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-images img'); // SECCION DE CODIGO PARA EL CAROUSEL
const totalSlides = slides.length;

function showSlide(index) {
  if (index < 0) {
    currentIndex = totalSlides - 1;
  } else if (index >= totalSlides) {
    currentIndex = 0;
  } else {
    currentIndex = index;
  }
  const slideWidth = slides[0].clientWidth;
  const offset = -currentIndex * slideWidth;
  document.querySelector('.carousel-images').style.transform = `translateX(${offset}px)`;
}

function prevSlide() {
  showSlide(currentIndex - 1);
}

function nextSlide() {
  showSlide(currentIndex + 1);
}

setInterval(nextSlide, 3000); 
