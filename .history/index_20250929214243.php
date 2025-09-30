<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Hotel AMP Garden — Vacanze da Sogno</title>
  <meta name="description" content="Hotel AMP Garden: la tua oasi di relax sul mare. Prenota ora e vivi un'esperienza indimenticabile!">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=3">
  <script defer src="script.js"></script>
</head>
<body>
  <!-- HEADER -->
  <header class="site-header">
    <div class="wrap">
      <a class="brand" href="#home">Hotel AMP Garden</a>
      <button id="nav-toggle" class="nav-toggle" aria-label="Apri menu">
        <span></span><span></span><span></span>
      </button>
      <nav id="main-nav" class="main-nav">
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

  <!-- HERO SLIDER -->
  <section id="home" class="hero">
    <div class="hero-slider">
      <div class="slide active" style="background-image:url('https://cf.bstatic.com/xdata/images/hotel/max1024x768/678932947.jpg?k=469e46db3f4785da51e8d4dc6c3442c13e1324dba73296a7bb505a20feb76945&o=');">
        <div class="hero-inner">
          <h1>🌞 Vivi l'Estate dei Tuoi Sogni</h1>
          <p>Camere confortevoli, relax e panorami mozzafiato a due passi dal mare.</p>
          <div class="hero-ctas">
            <a href="#prenota" class="btn btn-primary">Prenota ora</a>
            <a href="#gallery" class="btn btn-outline">Scopri di più</a>
          </div>
        </div>
      </div>
      <div class="slide" style="background-image:url('https://genovaturismo.it/wp-content/uploads/chiavari-genova-24-1.jpg');">
        <div class="hero-inner">
          <h1>🏊 Piscina & Divertimento</h1>
          <p>Goditi il sole con la nostra area relax e animazione per famiglie.</p>
          <div class="hero-ctas">
            <a href="#camere" class="btn btn-primary">Le nostre camere</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CAMERE -->
  <section id="camere" class="section colorful">
    <div class="wrap">
      <h2 class="section-title">Le nostre Camere</h2>
      <p class="section-sub">Tre soluzioni, un'unica parola d'ordine: comfort!</p>

      <div class="rooms-grid">
        <?php 
          $camere = [
            ["nome"=>"Camera Singola","img"=>"images/standard.jpg","prezzo"=>"50€","descr"=>"1 letto singolo 
Aria condizionataBagno in camera"],
            ["nome"=>"Camera Matrimoniale","img"=>"images/superior.jpg","prezzo"=>"60€","descr"=>"1 letto matrimoniale 
BalconeVista mareAria condizionataBagno in cameraTV a schermo piatto"],
            ["nome"=>"Camera Tripla","img"=>"images/suite.jpg","prezzo"=>"71€","descr"=>"letto singolo  e 1 letto matrimoniale 
16 m²BalconeVista mareAria condizionataBagno in cameraTV a schermo piattoTerrazza"],
            ["nome"=>"Camera Quadrupla","img"=>"images/suite.jpg","prezzo"=>"180€","descr"=>"Ampia, con soggiorno separato, ideale per famiglie."]
          ];
          foreach($camere as $c){
            echo "<article class='room-card'>
                    <img src='{$c['img']}' alt='{$c['nome']}'>
                    <div class='room-body'>
                      <h3>{$c['nome']}</h3>
                      <p class='price'>Da <strong>{$c['prezzo']}/notte</strong></p>
                      <p>{$c['descr']}</p>
                      <div class='room-actions'>
                        <a href='#prenota' class='btn btn-primary'>Prenota</a>
                        <button class='btn btn-outline btn-open-preventivo' data-room='{$c['nome']}'>Richiedi preventivo</button>
                      </div>
                    </div>
                  </article>";
          }
        ?>
      </div>
    </div>
  </section>

  <!-- SERVIZI -->
  <section id="servizi" class="section">
    <div class="wrap">
      <h2 class="section-title">Servizi Top</h2>
      <div class="services-grid">
        <div class="service"><h4>🌊 Piscina</h4><p>Relax e divertimento per tutti.</p></div>
        <div class="service"><h4>🍝 Ristorante</h4><p>Cucina tipica, menù bimbi e opzioni veg.</p></div>
        <div class="service"><h4>🚗 Parcheggio</h4><p>Gratuito e sicuro per tutti i clienti.</p></div>
        <div class="service"><h4>🎉 Animazione</h4><p>Attività giornaliere e serate a tema.</p></div>
      </div>
    </div>
  </section>

  <!-- GALLERY -->
  <section id="gallery" class="section colorful">
    <div class="wrap">
      <h2 class="section-title">Gallery</h2>
      <div class="gallery-grid">
        <a href="images/gallery1.jpg"><img src="images/gallery1_thumb.jpg" alt="Foto 1"></a>
        <a href="images/gallery2.jpg"><img src="images/gallery2_thumb.jpg" alt="Foto 2"></a>
        <a href="images/gallery3.jpg"><img src="images/gallery3_thumb.jpg" alt="Foto 3"></a>
      </div>
    </div>
  </section>

  <!-- FORM PRENOTAZIONE -->
  <section id="prenota" class="section">
    <div class="wrap narrow">
      <h2>Prenota Ora</h2>
      <?php if(isset($_GET['success']) && $_GET['success']==1): ?>
        <p class="success-msg">✅ Richiesta inviata! Ti contatteremo al più presto.</p>
      <?php endif; ?>
      <form action="send_mail.php" method="POST" class="booking-form">
        <div class="form-grid">
          <input type="text" name="nome" placeholder="Nome *" required>
          <input type="text" name="cognome" placeholder="Cognome *" required>
          <input type="email" name="email" placeholder="Email *" required>
          <input type="tel" name="telefono" placeholder="Telefono">
          <input type="date" name="arrivo" required>
          <input type="date" name="partenza" required>
          <input type="number" name="adulti" min="1" value="1">
          <input type="number" name="bambini" min="0" value="0">
          <select name="camera">
            <option value="">Tipologia camera</option>
            <option>Camera Standard</option>
            <option>Camera Superior</option>
            <option>Suite</option>
          </select>
          <textarea name="note" placeholder="Note o richieste speciali"></textarea>
        </div>
        <button type="submit" class="btn btn-primary big">Invia richiesta</button>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="contatti" class="site-footer">
    <div class="wrap">
      <p><strong>Hotel AMP Garden</strong> • Via Mare 123 — Rimini<br>
      Tel: +39 123 456789 • <a href="mailto:info@hotelampgarden.it">info@hotelampgarden.it</a></p>
      <p>&copy; <?php echo date('Y'); ?> Tutti i diritti riservati.</p>
    </div>
  </footer>
</body>
</html>
