<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hotel AMP Garden — Prenota Online</title>
  <meta name="description" content="Hotel AMP Garden - camere confortevoli a pochi passi dal mare. Prenota ora o richiedi un preventivo.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=2">
  <script defer src="script.js"></script>
  <!-- Basic JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Hotel",
    "name": "Hotel AMP Garden",
    "image": "https://via.placeholder.com/1200x800",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Via Mare 123",
      "addressLocality": "Rimini",
      "addressCountry": "IT"
    },
    "telephone": "+39 123 456789",
    "email": "info@hotelampgarden.it"
  }
  </script>
</head>
<body>
  <header class="site-header" id="site-header">
    <div class="wrap">
      <a class="brand" href="#home">AMP Garden</a>
      <button id="nav-toggle" class="nav-toggle" aria-label="Apri menu">
        <span></span><span></span><span></span>
      </button>
      <nav id="main-nav" class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#camere">Camere</a></li>
          <li><a href="#servizi">Servizi</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#prenota" class="cta">Prenota</a></li>
          <li><a href="#contatti">Contatti</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section id="home" class="hero">
      <div class="hero-slider" aria-hidden="false">
        <div class="slide" style="background-image:url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/678932947.jpg?k=469e46db3f4785da51e8d4dc6c3442c13e1324dba73296a7bb505a20feb76945&o=');">
          <div class="hero-inner">
            <h1>Vacanze indimenticabili a pochi passi dal mare</h1>
            <p class="lead">Camere confortevoli, servizi per famiglie e atmosfera rilassata.</p>
            <div class="hero-ctas">
              <a href="#prenota" class="btn btn-primary">Prenota ora</a>
              <a href="#prenota" class="btn btn-outline">Richiedi preventivo</a>
            </div>
          </div>
        </div>
        <div class="slide" style="background-image:url('https://via.placeholder.com/1600x800/ddd');">
          <div class="hero-inner">
            <h1>Relax, divertimento e buona cucina</h1>
            <p class="lead">Scopri le nostre offerte e camere con vista</p>
            <div class="hero-ctas">
              <a href="#camere" class="btn btn-primary">Le nostre camere</a>
              <a href="#gallery" class="btn btn-outline">Guarda la gallery</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CAMERE -->
    <section id="camere" class="section section-alt">
      <div class="wrap">
        <h2 class="section-title">Le nostre Camere</h2>
        <p class="section-sub">Soluzioni per ogni esigenza: Standard, Superior e Suite</p>
        <div class="rooms-grid">
          <article class="room-card">
            <img src="https://via.placeholder.com/800x500" alt="Camera Standard">
            <div class="room-body">
              <h3>Camera Standard</h3>
              <p class="price">Da <strong>80€/notte</strong></p>
              <p>Fino a 2 persone, bagno privato, aria condizionata, Wi-Fi</p>
              <div class="room-actions">
                <a href="#prenota" class="btn btn-primary">Prenota</a>
                <button class="btn btn-outline btn-open-preventivo" data-room="Camera Standard">Richiedi preventivo</button>
              </div>
            </div>
          </article>

          <article class="room-card">
            <img src="https://via.placeholder.com/800x500/ddd" alt="Camera Superior">
            <div class="room-body">
              <h3>Camera Superior</h3>
              <p class="price">Da <strong>120€/notte</strong></p>
              <p>Vista mare, balcone, letti più ampi, servizi migliorati</p>
              <div class="room-actions">
                <a href="#prenota" class="btn btn-primary">Prenota</a>
                <button class="btn btn-outline btn-open-preventivo" data-room="Camera Superior">Richiedi preventivo</button>
              </div>
            </div>
          </article>

          <article class="room-card">
            <img src="https://via.placeholder.com/800x500/ccc" alt="Suite">
            <div class="room-body">
              <h3>Suite</h3>
              <p class="price">Da <strong>180€/notte</strong></p>
              <p>Spaziose, soggiorno separato, perfette per famiglie</p>
              <div class="room-actions">
                <a href="#prenota" class="btn btn-primary">Prenota</a>
                <button class="btn btn-outline btn-open-preventivo" data-room="Suite">Richiedi preventivo</button>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SERVIZI -->
    <section id="servizi" class="section">
      <div class="wrap">
        <h2 class="section-title">Servizi</h2>
        <div class="services-grid">
          <div class="service">
            <h4>Piscina</h4>
            <p>Piscina all'aperto con area relax.</p>
          </div>
          <div class="service">
            <h4>Ristorante & Bar</h4>
            <p>Cucina tipica e menù per bambini.</p>
          </div>
          <div class="service">
            <h4>Parcheggio</h4>
            <p>Parcheggio privato gratuito per gli ospiti.</p>
          </div>
          <div class="service">
            <h4>Animazione</h4>
            <p>Programmi e attività per i più piccoli (stagionale).</p>
          </div>
        </div>
      </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" class="section section-alt">
      <div class="wrap">
        <h2 class="section-title">Gallery</h2>
        <div class="gallery-grid" id="gallery-grid">
          <!-- Lightbox thumbnails -->
          <a href="https://via.placeholder.com/1200x800" class="gallery-item"><img src="https://via.placeholder.com/400x267" alt="Foto 1"></a>
          <a href="https://via.placeholder.com/1200x800/ddd" class="gallery-item"><img src="https://via.placeholder.com/400x267/ddd" alt="Foto 2"></a>
          <a href="https://via.placeholder.com/1200x800/ccc" class="gallery-item"><img src="https://via.placeholder.com/400x267/ccc" alt="Foto 3"></a>
          <a href="https://via.placeholder.com/1200x800/bbb" class="gallery-item"><img src="https://via.placeholder.com/400x267/bbb" alt="Foto 4"></a>
          <a href="https://via.placeholder.com/1200x800/aaa" class="gallery-item"><img src="https://via.placeholder.com/400x267/aaa" alt="Foto 5"></a>
          <a href="https://via.placeholder.com/1200x800/999" class="gallery-item"><img src="https://via.placeholder.com/400x267/999" alt="Foto 6"></a>
        </div>
      </div>
    </section>

    <!-- PRENOTA / FORM -->
    <section id="prenota" class="section">
      <div class="wrap narrow">
        <h2 class="section-title">Prenota / Richiedi un preventivo</h2>

        <?php
          if(isset($_GET['success']) && $_GET['success'] == 1){
              echo '<p class="success-msg">La tua richiesta è stata inviata con successo! Ti risponderemo al più presto.</p>';
          }
        ?>

        <form id="booking-form" action="send_mail.php" method="POST" novalidate>
          <div class="form-grid">
            <div class="form-group">
              <label for="nome">Nome <span aria-hidden="true">*</span></label>
              <input id="nome" name="nome" type="text" required>
            </div>

            <div class="form-group">
              <label for="cognome">Cognome <span aria-hidden="true">*</span></label>
              <input id="cognome" name="cognome" type="text" required>
            </div>

            <div class="form-group">
              <label for="email">Email <span aria-hidden="true">*</span></label>
              <input id="email" name="email" type="email" required>
            </div>

            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input id="telefono" name="telefono" type="tel">
            </div>

            <div class="form-group">
              <label for="arrivo">Data arrivo <span aria-hidden="true">*</span></label>
              <input id="arrivo" name="arrivo" type="date" required>
            </div>

            <div class="form-group">
              <label for="partenza">Data partenza <span aria-hidden="true">*</span></label>
              <input id="partenza" name="partenza" type="date" required>
            </div>

            <div class="form-group">
              <label for="adulti">Adulti</label>
              <input id="adulti" name="adulti" type="number" min="1" value="1">
            </div>

            <div class="form-group">
              <label for="bambini">Bambini</label>
              <input id="bambini" name="bambini" type="number" min="0" value="0">
            </div>

            <div class="form-group full">
              <label for="camera">Tipologia camera (opzionale)</label>
              <select id="camera" name="camera">
                <option value="">-- Seleziona --</option>
                <option>Camera Standard</option>
                <option>Camera Superior</option>
                <option>Suite</option>
              </select>
            </div>

            <div class="form-group full">
              <label for="note">Note / Richieste</label>
              <textarea id="note" name="note" rows="4"></textarea>
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Invia richiesta</button>
            <button type="reset" class="btn btn-outline">Cancella</button>
          </div>
        </form>

      </div>
    </section>

    <!-- CONTATTI / FOOTER -->
    <footer id="contatti" class="site-footer section-alt">
      <div class="wrap">
        <div class="footer-grid">
          <div>
            <h4>Hotel AMP Garden</h4>
            <p>Via Mare 123 — Tel +39 123 456789 — Email: <a href="mailto:info@hotelampgarden.it">info@hotelampgarden.it</a></p>
          </div>
          <div>
            <h4>Dove siamo</h4>
            <!-- Sostituisci l'iframe con la mappa reale dell'hotel -->
            <iframe title="Mappa Hotel" src="https://www.google.com/maps?q=riccione&output=embed" loading="lazy"></iframe>
          </div>
          <div>
            <h4>Seguici</h4>
            <p><a href="#" aria-label="Facebook">Facebook</a> • <a href="#" aria-label="Instagram">Instagram</a></p>
          </div>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> Hotel AMP Garden — Tutti i diritti riservati.</p>
      </div>
    </footer>
  </main>

  <!-- Lightbox container -->
  <div id="lightbox" class="lightbox" aria-hidden="true">
    <button class="lightbox-close" aria-label="Chiudi">✕</button>
    <img src="" alt="" id="lightbox-img">
  </div>

</body>
</html>
