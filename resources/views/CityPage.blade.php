<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="css/stylesCP.css" rel="stylesheet">
        <title>Cities Page</title>
    </head>

    <body>

    <header>
      <nav>

      <nav class="navbar navbar-expand-lg bg-body-tertiary position-absolute z-3 w-100">
      <div class="container-fluid">
        <img src="image/Logo.png" alt="Line">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
            </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Indonesia</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
            <li><a class="dropdown-item" href="#">Mandarin</a></li>
          </ul>
          </li>
          <li class="Account">
            <b><img src="image/Account.png" alt="Line" /></b>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    </header>

    <main>

    <input type="text" placeholder="Search..">

    <section class="hero" id="Section_1">

    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
        <h5 class="card-title">&nbsp;&nbsp;Belitung</h5>
        <button>VISIT</button>
      <img src="image/BelitungC.png" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Belitung adalah sebuah pulau di Indonesia yang terkenal dengan keindahan pantainya yang eksotis serta formasi batu granitnya yang unik. Pulau ini menjadi destinasi wisata populer bagi wisatawan yang mencari pengalaman alam yang memukau dan keindahan alami yang luar biasa.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
        <h5 class="card-title">&nbsp;&nbsp;Jakarta</h5>
        <button>VISIT</button>
      <img src="image/Jakarta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Jakarta adalah ibu kota Indonesia yang terkenal dengan keramahtamahan penduduknya serta keberagaman budaya yang memikat. Sebagai pusat ekonomi dan kebudayaan, Jakarta juga menawarkan beragam atraksi wisata dan kesempatan untuk mengeksplorasi sejarah Indonesia.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
        <h5 class="card-title">Yogyakarta</h5>
        <button>VISIT</button>
      <img src="image/Yogyakarta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Yogyakarta, sering disebut sebagai "Kota Pelajar", merupakan pusat kebudayaan dan pendidikan yang kaya akan warisan sejarah dan keindahan alamnya. Dikenal dengan keramahannya, Yogyakarta menawarkan pengalaman wisata yang unik, dari istana kerajaan hingga candi-candi kuno yang memukau.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
        <h5 class="card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bali</h5>
        <button>VISIT</button>
      <img src="image/Bali.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Bali, dikenal sebagai "Pulau Dewata", adalah destinasi wisata yang memikat dengan pantainya yang indah, budaya yang kaya, dan arsitektur khasnya. Pulau ini menawarkan pengalaman liburan yang beragam, mulai dari santai di pantai hingga menjelajahi hutan tropis dan menyaksikan upacara adat yang megah.</p>
      </div>
    </div>
  </div>
</div>
    </section>

    </main>
  
    <img src="image/CP-Background.jpg" alt="Line" />
  
  </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/scriptCP.js"></script>
</html>
