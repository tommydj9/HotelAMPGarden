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
      <a class="brand" href="#home" style="display:flex; align-items:center; gap:10px;">
  <img src="logoAMPgarden.png" alt="Logo AMP Garden" style="height:100px;">
  <span>Hotel AMP Garden</span>
</a>
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

 <section id="camere" class="section colorful">
  <div class="wrap">
    <h2 class="section-title">Le nostre Camere</h2>
    <p class="section-sub">Soluzioni per ogni esigenza: comfort, spazio e relax!</p>

    <div class="rooms-grid">
      <?php 
      $camere = [
        [
          "nome" => "Camera Singola",
          "img" => "https://cf.bstatic.com/xdata/images/hotel/max1024x768/678932947.jpg?k=469e46db3f4785da51e8d4dc6c3442c13e1324dba73296a7bb505a20feb76945&o=",
          "prezzo" => "50€",
          "descr" => [
            ["icon" => "❄️", "text" => "Aria condizionata"],
            ["icon" => "🚿", "text" => "Bagno privato"],
            ["icon" => "📶", "text" => "Wi-Fi gratuito"]
          ]
        ],
        [
          "nome" => "Camera Matrimoniale",
          "img" => "https://cf.bstatic.com/xdata/images/hotel/max1024x768/679290605.jpg?k=d2401670462862af9e5c884044140347a0c47a887532873a7fda5eb8521ece13&o=",
          "prezzo" => "60€",
          "descr" => [
            ["icon" => "🛏️", "text" => "Letto matrimoniale"],
            ["icon" => "🌅", "text" => "Balcone con vista mare"],
            ["icon" => "❄️", "text" => "Aria condizionata"],
            ["icon" => "📺", "text" => "TV a schermo piatto"],
            ["icon" => "🚿", "text" => "Bagno privato"]
          ]
        ],
        [
          "nome" => "Camera Tripla",
          "img" => "https://cf.bstatic.com/xdata/images/hotel/max1024x768/676281074.jpg?k=292954e57ad148a0de944cada0ac5ba4fa5bf49641e46ba72f66823c0d4e9ab1&o=",
          "prezzo" => "71€",
          "descr" => [
            ["icon" => "🛏️", "text" => "1 letto matrimoniale + 1 singolo"],
            ["icon" => "📏", "text" => "16 m²"],
            ["icon" => "🌅", "text" => "Balcone con vista mare"],
            ["icon" => "❄️", "text" => "Aria condizionata"],
            ["icon" => "📺", "text" => "TV a schermo piatto"],
            ["icon" => "🚿", "text" => "Bagno privato"]
          ]
        ],
        [
          "nome" => "Camera Quadrupla",
          "img" => "https://cf.bstatic.com/xdata/images/hotel/max1024x768/676279779.jpg?k=c0715e3f8a1631812ab61378145d615b755094ad4f0f026c53c444e61b9b5b7f&o=",
          "prezzo" => "75€",
          "descr" => [
            ["icon" => "🛏️", "text" => "2 letti singoli + 1 matrimoniale"],
            ["icon" => "📏", "text" => "18 m²"],
            ["icon" => "🌅", "text" => "Balcone"],
            ["icon" => "❄️", "text" => "Aria condizionata"],
            ["icon" => "📺", "text" => "TV a schermo piatto"],
            ["icon" => "🚿", "text" => "Bagno privato"]
          ]
        ]
      ];

      foreach($camere as $c){
        echo "
        <article class='room-card'>
          <img src='{$c['img']}' alt='{$c['nome']}'>
          <div class='room-body'>
            <h3>{$c['nome']}</h3>
            <p class='price'>Da <strong>{$c['prezzo']}/notte</strong></p>
            <ul>";
            foreach($c['descr'] as $d){
              echo "<li><span class='icon'>{$d['icon']}</span> <span>{$d['text']}</span></li>";
            }
        echo "</ul>
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
        <a href="https://cf.bstatic.com/xdata/images/hotel/max1024x768/676122775.jpg?k=2c24471d66d96714286d778f98751f9a4a0b3f482f14600e304e13d5521c585e&o="><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/676122775.jpg?k=2c24471d66d96714286d778f98751f9a4a0b3f482f14600e304e13d5521c585e&o=" alt="Foto 1"></a>
        <a href="https://cf.bstatic.com/xdata/images/hotel/max1024x768/679016861.jpg?k=47bb73b9bf38bef619805ffd60f729afb7076b7f5966ba029b242ad849970438&o="><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/679016861.jpg?k=47bb73b9bf38bef619805ffd60f729afb7076b7f5966ba029b242ad849970438&o=" alt="Foto 2"></a>
        <a href="https://cf.bstatic.com/xdata/images/hotel/max1024x768/678931968.jpg?k=3d158a20bad236786a3128b35e309e0b6ce2636e43bc528bf4414f116fb2142c&o="><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/678931968.jpg?k=3d158a20bad236786a3128b35e309e0b6ce2636e43bc528bf4414f116fb2142c&o=" alt="Foto 3"></a>
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
