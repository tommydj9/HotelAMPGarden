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
// HERO SLIDER
// =============================
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = 0;
        slide.style.transform = 'scale(0.95)';
        slide.style.transition = 'opacity 1.5s ease, transform 1.5s ease';
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

let slideInterval = setInterval(nextSlide, 7000); // più lento (7s)

// Optional: pause slider on hover
document.querySelector('.hero').addEventListener('mouseenter', () => clearInterval(slideInterval));
document.querySelector('.hero').addEventListener('mouseleave', () => slideInterval = setInterval(nextSlide, 7000));

// =============================
// CARD HOVER EFFECTS + ENTRY ANIMATION
// =============================
const roomCards = document.querySelectorAll('.room-card');
roomCards.forEach(card => {
    // hover effetto
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px) scale(1.02)';
        card.style.boxShadow = '0 20px 40px rgba(0,0,0,0.3)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0) scale(1)';
        card.style.boxShadow = '0 8px 25px rgba(0,0,0,0.1)';
    });

    // effetto entrata al caricamento
    card.style.opacity = 0;
    card.style.transform = 'translateY(30px)';
    setTimeout(() => {
        card.style.transition = 'all 1s ease';
        card.style.opacity = 1;
        card.style.transform = 'translateY(0)';
    }, 100);
});

// =============================
// SCROLL AL MESSAGGIO DI SUCCESSO
// =============================
document.addEventListener('DOMContentLoaded', () => {
    const successMessage = document.querySelector('.booking-success');
    if (successMessage) {
        setTimeout(() => {
            window.scrollTo({
                top: successMessage.offsetTop - 50,
                behavior: 'smooth'
            });
        }, 600); // leggero ritardo
    }
});
