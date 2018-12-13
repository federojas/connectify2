<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Rokkitt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400i" rel="stylesheet">
    @yield("javascript")
    <title>
      @yield("titulo")
    </title>
  </head>

  <body>
    <nav>
      <header class="header">
        <h1 class="logo"><a href="/">Connectify.</a></h1>
          <ul class="main-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>

            @if (Auth::check())
              <li>
                <form class="" action="/logout" method="POST">
                  {{ csrf_field() }}
                  <button type="submit" class="link" name="">LOGOUT</button>
                </form>
              </li>
              <li>
                  <a href="/usuario/profile">{{Auth::user()->nombre}}</a>
              </li>
            @else
              <li><a href="/register">Registration</a></li>
              <li><a href="/login">Login</a></li>
            @endif

          </ul>
      </header>
    </nav>

    <section>
      @yield("principal")
    </section>

    <footer class="social-footer">
      <div class="social-footer-left">
        <!-- <a href="#"><img class="logo" src="https://placehold.it/150x30"></a> -->
        <h1 class="logo"><a href="#">Connectify.</a></h1>
      </div>
      <div class="social-footer-icons">
        <ul class="menu simple">
          <li class="foot"><a class= "fut" href="https://www.facebook.com/"><i class="fab fa-facebook" ></i></a></li>
          <li class="foot"><a class= "fut" href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
          <li class="foot"><a class= "fut" href="https://www.pinterest.com/"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
          <li class="foot"><a class= "fut" href="https://twitter.com/?lang=en"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>
