<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel AMP Garden - La tua vacanza da sogno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- HEADER -->
    <header class="site-header">
        <div class="wrap">
            <a href="#" class="brand">🌴 Hotel AMP Garden</a>
            <nav class="main-nav">
                <ul>
                    <li><a href="#camere">Camere</a></li>
                    <li><a href="#servizi">Servizi</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contatti" class="cta">Prenota</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-inner">
            <h1>Vivi il mare, il sole, la libertà ☀️</h1>
            <p class="lead">Una vacanza colorata e piena di emozioni, a due passi dal mare.</p>
            <div class="hero-ctas">
                <a href="#camere" class="btn btn-primary">Scopri le nostre camere</a>
                <a href="#contatti" class="btn btn-outline">Prenota ora</a>
            </div>
        </div>
    </section>

    <!-- CAMERE -->
    <section id="camere" class="section">
        <h2 class="section-title">🏡 Le nostre camere</h2>
        <p class="section-sub">Colori, comfort e vista mare: scegli la tua!</p>
        <div class="rooms-grid">
            <div class="room-card">
                <img src="https://source.unsplash.com/400x250/?hotel,room" alt="Camera vista mare">
                <div class="room-body">
                    <h3>Camera Vista Mare</h3>
                    <p>Ideale per chi vuole svegliarsi con il suono delle onde 🌊</p>
                    <span class="price">Da 120€/notte</span>
                    <a href="#contatti" class="btn btn-primary">Prenota</a>
                </div>
            </div>
            <div class="room-card">
                <img src="https://source.unsplash.com/400x250/?hotel,bedroom" alt="Camera Deluxe">
                <div class="room-body">
                    <h3>Camera Deluxe</h3>
                    <p>Design moderno, colori accesi e un balcone per goderti il tramonto 🌅</p>
                    <span class="price">Da 150€/notte</span>
                    <a href="#contatti" class="btn btn-primary">Prenota</a>
                </div>
            </div>
            <div class="room-card">
                <img src="https://source.unsplash.com/400x250/?hotel,resort" alt="Suite Family">
                <div class="room-body">
                    <h3>Suite Family</h3>
                    <p>Perfetta per tutta la famiglia, con spazi ampi e colorati 👨‍👩‍👧‍👦</p>
                    <span class="price">Da 200€/notte</span>
                    <a href="#contatti" class="btn btn-primary">Prenota</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVIZI -->
    <section id="servizi" class="section section-alt">
        <h2 class="section-title">✨ I nostri servizi</h2>
        <ul class="services-grid">
            <li class="service">🏊‍♂️ Piscina vista mare</li>
            <li class="service">🍹 Bar con cocktail colorati</li>
            <li class="service">🚲 Noleggio bici per esplorare la costa</li>
            <li class="service">🎶 Serate a tema e musica live</li>
        </ul>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="section">
        <h2 class="section-title">📸 I nostri momenti</h2>
        <div class="gallery-grid">
            <img src="https://source.unsplash.com/400x300/?beach,sunset" alt="Tramonto">
            <img src="https://source.unsplash.com/400x300/?cocktail,beach" alt="Cocktail">
            <img src="https://source.unsplash.com/400x300/?pool,resort" alt="Piscina">
            <img src="https://source.unsplash.com/400x300/?vacation,sea" alt="Mare">
        </div>
    </section>

    <!-- CONTATTI -->
    <section id="contatti" class="section section-alt">
        <h2 class="section-title">📅 Prenota la tua vacanza</h2>
        <form action="send_mail.php" method="POST" class="booking-form">
            <input type="text" name="nome" placeholder="Il tuo nome" required>
            <input type="email" name="email" placeholder="La tua email" required>
            <input type="date" name="checkin" required>
            <input type="date" name="checkout" required>
            <textarea name="messaggio" placeholder="Richieste particolari"></textarea>
            <button type="submit" class="btn btn-primary">Invia richiesta</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <p>© 2025 Hotel AMP Garden - La tua vacanza colorata 🌈</p>
    </footer>
</body>
</html>
