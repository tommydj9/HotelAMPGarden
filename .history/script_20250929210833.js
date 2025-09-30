// Menu toggle
document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('nav-toggle');
    const mainNav = document.getElementById('main-nav');
    navToggle && navToggle.addEventListener('click', () => {
        mainNav.classList.toggle('open');
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', (e) => {
            const href = a.getAttribute('href');
            if (href.length > 1) {
                e.preventDefault();
                const el = document.querySelector(href);
                if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                // close mobile nav
                if (mainNav.classList.contains('open')) mainNav.classList.remove('open');
            }
        });
    });

    // Simple hero slider (auto)
    const slides = document.querySelectorAll('.hero .slide');
    let cur = 0;
    if (slides.length > 1) {
        setInterval(() => {
            slides[cur].style.transform = 'translateX(-100%)';
            slides[(cur + 1) % slides.length].style.transform = 'translateX(0)';
            slides[cur].style.opacity = 0;
            cur = (cur + 1) % slides.length;
            // reset previous after small delay
            setTimeout(() => {
                slides.forEach((s, i) => {
                    s.style.transform = `translateX(${(i - cur) * 100}%)`;
                    s.style.opacity = 1;
                });
            }, 600);
        }, 6000);
        // initialize positions
        slides.forEach((s, i) => s.style.transform = `translateX(${(i) * 100}%)`);
    }

    // Lightbox
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lbClose = document.querySelector('.lightbox-close');
    document.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const src = item.getAttribute('href');
            lightboxImg.src = src;
            lightbox.setAttribute('aria-hidden', 'false');
        });
    });
    lbClose && lbClose.addEventListener('click', () => {
        lightbox.setAttribute('aria-hidden', 'true');
        lightboxImg.src = '';
    });
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) { lightbox.setAttribute('aria-hidden', 'true'); lightboxImg.src = ''; }
    });

    // Prefill form when clicking "Richiedi preventivo" on a room card
    document.querySelectorAll('.btn-open-preventivo').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const room = btn.dataset.room || '';
            const sel = document.getElementById('camera');
            if (sel && room) {
                sel.value = room;
            }
            document.querySelector('#prenota').scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    // Basic client-side validation
    const form = document.getElementById('booking-form');
    if (form) {
        form.addEventListener('submit', (e) => {
            // simple required fields
            const required = ['nome', 'cognome', 'email', 'arrivo', 'partenza'];
            let ok = true;
            required.forEach(id => {
                const el = document.getElementById(id);
                if (!el || !el.value.trim()) {
                    el && el.classList.add('invalid');
                    ok = false;
                } else {
                    el && el.classList.remove('invalid');
                }
            });

            // date logic: partenza > arrivo
            const arr = document.getElementById('arrivo').value;
            const part = document.getElementById('partenza').value;
            if (arr && part && new Date(part) <= new Date(arr)) {
                alert('La data di partenza deve essere successiva alla data di arrivo.');
                ok = false;
            }

            if (!ok) {
                e.preventDefault();
                window.scrollTo({ top: document.getElementById('prenota').offsetTop - 60, behavior: 'smooth' });
            } else {
                // allow submit -> send_mail.php will handle sending
            }
        });
    }

});
