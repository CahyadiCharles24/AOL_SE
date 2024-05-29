<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/stylesHP.css" rel="stylesheet">

        <title>HomePage</title>
    </head>

    <body>

    <header>
      <nav>
        <ul>
            <li><a href="/cityPage">Cities</a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href="{{ url('/forum') }}">Forum</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section class="hero" id="section_1">
        <div class="overlay">
          <div class="content">
            <h1>Indonesia</h1>
            <h1>City Hub</h1>
          </div>
        </div>
        <img src="image/HP-Background.jpeg" alt="Line" />
      </section>

      <section class="hero" id="section_2">
        <div class="overlay2">
          <div class="content2">
            <h1 class="txt2">Find Everything</h1>
            <h1 class="txt2">About Your City</h1>
          </div>

          <div class="Icon">
            <img src="image/map.png" alt="Line" />
            <img src="image/transportation.png" alt="Line" />
            <img src="image/news.png" alt="Line" />
          </div>

        </div>
        
      </section>


    </main>
    </body>
    <script src="js/scriptHP.js"></script>
</html>
