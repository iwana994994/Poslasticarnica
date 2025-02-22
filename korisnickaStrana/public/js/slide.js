let index = 0;  // Početni indeks slajda

// Funkcija za pomeranje slajda
function moveSlide(direction) {
    let slides = document.querySelector('.swiper-wrapper');
    let totalSlides = document.querySelectorAll('.swiper-slide').length;

    // Pomeranje indeksa slajda
    index = (index + direction + totalSlides) % totalSlides;

    // Pomeranje wrapper-a za odgovarajući broj slajdova
    slides.style.transform = `translateX(-${index * 100}%)`;
}

// Automatski prelaz na sledeći slajd svakih 5 sekundi
setInterval(() => moveSlide(1), 5000);


