// =============================
// NAVBAR MOBILE TOGGLE
// =============================
const navToggle = document.getElementById('nav-toggle');
const mainNav = document.getElementById('main-nav');

navToggle.addEventListener('click', () => {
    navToggle.classList.toggle('open');
    mainNav.classList.toggle('active');
});

// =============================
// HERO SLIDER - Fade + Scale fluido
// =============================
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = 0;
        slide.style.transform = 'scale(0.95)';
        slide.style.transition = 'opacity 1.8s ease, transform 1.8s ease';
        slide.classList.remove('active');
    });
    slides[index].style.opacity = 1;
    slides[index].style.transform = 'scale(1)';
    slides[index].classList.add('active');
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

let slideInterval = setInterval(nextSlide, 8000); // più lento e morbido

document.querySelector('.hero').addEventListener('mouseenter', () => clearInterval(slideInterval));
document.querySelector('.hero').addEventListener('mouseleave', () => slideInterval = setInterval(nextSlide, 8000));

// =============================
// CARD HOVER + Staggered Entry
// =============================
const roomCards = document.querySelectorAll('.room-card');

roomCards.forEach((card, index) => {
    card.style.opacity = 0;
    card.style.transform = 'translateY(50px) scale(0.95)';
    card.style.transition = 'all 0.8s ease';

    // Animazione staggered
    setTimeout(() => {
        card.style.opacity = 1;
        card.style.transform = 'translateY(0) scale(1)';
    }, 200 * index); // 200ms tra una card e l'altra

    // Hover effetto
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px) scale(1.05)';
        card.style.boxShadow = '0 25px 45px rgba(0,0,0,0.35)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
        card.style.boxShadow = '0 8px 25px rgba(0,0,0,0.1)';
    });
});

// =============================
// SCROLL + ANIMAZIONE MESSAGGIO SUCCESSO
// =============================
document.addEventListener('DOMContentLoaded', () => {
    const successMessage = document.querySelector('.booking-success');
    if (successMessage) {
        successMessage.style.opacity = 0;
        successMessage.style.transform = 'translateY(100px)';
        successMessage.style.transition = 'all 1.2s ease-out';

        // Delay leggero per scroll + animazione
        setTimeout(() => {
            window.scrollTo({
                top: successMessage.offsetTop - 170,
                behavior: 'smooth'
            });

            successMessage.style.opacity = 1;
            successMessage.style.transform = 'translateY(0)';
        }, 600);
    }
});
