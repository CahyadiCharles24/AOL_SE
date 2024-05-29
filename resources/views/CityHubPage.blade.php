<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="css/stylesCHP.css" rel="stylesheet">

        <title>CityHUB</title>
    </head>

    <body>

    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-absolute z-3 w-100">
      <div class="container-fluid">
        <img src="image/Logo.png" alt="Line">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Transportation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
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
        </ul>
      </div>
      </div>
    </nav>
    </header>

    <main>

      <section class="hero" id="section_1">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="image/Belitung.png" class="d-block w-100" alt="...">
          </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="image/CP-Background.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/HP-Background.jpeg" class="d-block w-100" alt="...">
      </div>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </section>


      <section class="hero2" id="section_2">
        <div class = "content">
            <p>Belitung, atau Belitong ( bahasa setempat, diambil dari nama sejenis siput laut ), dulunya dikenal sebagai Billiton adalah sebuah pulau di lepas pantai timur Sumatra, Indonesia, diapit oleh Selat Gaspar dan Selat Karimata. Pulau ini terkenal dengan lada putih ( Piper sp. ) yang dalam bahasa setempat disebut sahang, dan bahan tambang tipe galian-C seperti timah putih ( Stannuum ), pasir kuarsa, tanah liat putih ( kaolin ), dan granit. Serta akhir-akhir ini menjadi tujuan wisata alam alternatif.</p>
        </div>
        <div class ="containIMG">
          <h2>BELITUNG</h2>
            <img src="image/Belitung.png" alt="Line">   
        </div>
      </section>

      <section class="hero3" id="section_3">
        <div class="Headlines">
          <h1>NEWS</h1>
        </div>

        <div class="card-container">
          <div class="card">
            <img src="image/news1.jpg" alt="">
            <p>Rombongan Taruna dan Taruni Akademi Angkatan Udara mengadakan sosialasi di gedung Wira Angkasa Lanud H AS Hanandjoeddin Belitung, Senin (27/5/2024). Acara tersebut mengundang ratusan pelajar SMA se-Kabupaten Belitung untuk memberikan pemahaman lebih mendalam mengenai dunia akademi militer, serta memotivasi para siswa agar tertarik menjadi bagian dari Taruna Taruni AAU. Dalam acara tersebut, para Taruna dan Taruni AAU berbagi pengalaman mereka selama menjalani pendidikan di akademi.</p>
            <button onclick="readMore()">Read more</button>
        </div>

        <div class="card">
            <img src="image/news2.jpg" alt="">
            <p>PT PLN Unit Layanan Pelanggan Tanjungpandan ikut menyemarakkan Hari Bumi. Hal itu diwujudkan dalam aksi gotong royong membersihkan Pantai Tanjung Pendam, Kecamatan Tanjung Pandan, Kabupaten Belitung. Gerakan peduli lingkungan ini merupakan bentuk komitmen PLN untuk menjaga lingkungan hidup khususnya ekosistem di sekitar pantai. Tidak hanya jalan santai, seluruh peserta turut aktif dalam kegiatan memilah sampah khususnya sampah plastik yang terdapat di sepanjang garis Pantai Tanjung Pendam.</p>
            <button onclick="readMore()">Read more</button>
        </div>

        <div class="card">
            <img src="image/news3.png" alt="">
            <p>Bangka Belitung menawarkan pengalaman liburan menyenangkan di wilayah kepulauan. Bangka Belitung merupakan provinsi kepulauan yang ada di Indonesia. Wilayah ini terkenal sebutannya sebagai Negeri Laskar Pelangi. Wisata Bangka Belitung dikenal dengan jajaran pantainya yang memesona. Tak hanya pantai, di wisata Bangka Belitung juga tersebar pulau-pulau kecil yang menawan. Ada total 470 pulau yang ada di Bangka Belitung. Wisata Bangka Belitung pastinya tak akan mengecewakan ketika dikunjungi.</p>
            <button onclick="readMore()">Read more</button>
        </div>
        </div>
      </section>


    </main>


    

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/scriptCHP.js"></script>
</html>
