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
        slide.style.transition = 'opacity 1s ease, transform 1s ease';
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

let slideInterval = setInterval(nextSlide, 5000); // auto-slide

// Optional: pause slider on hover
document.querySelector('.hero').addEventListener('mouseenter', () => clearInterval(slideInterval));
document.querySelector('.hero').addEventListener('mouseleave', () => slideInterval = setInterval(nextSlide, 5000));

// =============================
// CARD HOVER EFFECTS
// =============================
const roomCards = document.querySelectorAll('.room-card');
roomCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-10px)';
        card.style.boxShadow = '0 15px 30px rgba(0,0,0,0.25)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0)';
        card.style.boxShadow = '0 8px 25px rgba(0,0,0,0.1)';
    });
});

// =============================
// SCROLL E FADE-IN AUTOMATICO
// =============================
document.addEventListener('DOMContentLoaded', () => {
    const successMessage = document.querySelector('.booking-success');
    if (successMessage) {
        // Partenza nascosta
        successMessage.style.opacity = 0;
        successMessage.style.transform = 'translateY(20px)';
        successMessage.style.transition = 'opacity 0.8s ease, transform 0.8s ease';

        setTimeout(() => {
            // Scroll fluido verso il messaggio
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            // Animazione fade-in
            successMessage.style.opacity = 1;
            successMessage.style.transform = 'translateY(0)';
        }, 500); // ritardo per far partire animazione
    }
});
