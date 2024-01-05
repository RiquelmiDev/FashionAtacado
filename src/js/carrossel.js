const slide = document.querySelector(".carousel-slide");
const slides = document.querySelectorAll(".carousel-slide img");
const totalSlides = slides.length;
let slideIndex = 0;

function changeSlide(n) {
    showSlide(slideIndex += n);
}

function showSlide(index) {
    if (index < 0) {
        slideIndex = totalSlides - 1;
    } else if (index >= totalSlides) {
        slideIndex = 0;
    }

    // Esconde todas as imagens
    slides.forEach((img) => {
        img.style.display = "none";
    });

    // Mostra apenas a imagem atual
    slides[slideIndex].style.display = "block";
}

// Automatizar a troca de imagens a cada 3 segundos (opcional)
function autoSlide() {
    changeSlide(1);
    setTimeout(autoSlide, 3000);
}

autoSlide(); // Descomente esta linha se quiser que o carrossel mude automaticamente







