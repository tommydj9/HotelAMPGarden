/* =========================
   MENU MOBILE
========================= */
const navToggle = document.getElementById('nav-toggle');
const mainNav = document.getElementById('main-nav');

navToggle.addEventListener('click', () => {
    mainNav.classList.toggle('open');
    navToggle.classList.toggle('open');
});

/* =========================
   HERO SLIDER
========================= */
const slides = document.querySelectorAll('.hero-slider .slide');
let currentSlide = 0;

function showSlide(index) {
    const slider = document.querySelector('.hero-slider');
    slider.style.transform = `translateX(-${index * 100}%)`;
}

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
