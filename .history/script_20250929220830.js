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
// CARD HOVER EFFECTS (optional extra)
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

// Auto slider ogni 5 secondi
setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 5000);

/* =========================
   GALLERY LIGHTBOX
========================= */
const galleryItems = document.querySelectorAll('.gallery-item img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxClose = document.querySelector('.lightbox-close');

galleryItems.forEach(img => {
    img.addEventListener('click', e => {
        lightboxImg.src = e.target.parentElement.href;
        lightbox.setAttribute('aria-hidden', 'false');
    });
});

lightboxClose.addEventListener('click', () => {
    lightbox.setAttribute('aria-hidden', 'true');
    lightboxImg.src = '';
});

lightbox.addEventListener('click', e => {
    if (e.target === lightbox) {
        lightbox.setAttribute('aria-hidden', 'true');
        lightboxImg.src = '';
    }
});

/* =========================
   RICHIESTA PREVENTIVO
========================= */
const preventivoBtns = document.querySelectorAll('.btn-open-preventivo');
const cameraSelect = document.getElementById('camera');
const bookingSection = document.getElementById('prenota');

preventivoBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Scorri fino al form
        bookingSection.scrollIntoView({ behavior: 'smooth' });
        // Seleziona la camera nel form
        const room = btn.dataset.room;
        cameraSelect.value = room;
    });
});

/* =========================
   SCROLL SU NAV LINK
========================= */
const navLinks = document.querySelectorAll('a[href^="#"]');
navLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(link.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
            if (mainNav.classList.contains('open')) mainNav.classList.remove('open');
        }
    });
});
