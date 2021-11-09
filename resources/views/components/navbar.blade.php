<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <link href="/assets01/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/assets01/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets01/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets01/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets01/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets01/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets01/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="/assets01/css/style.css" rel="stylesheet">
    
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="https://gabrielfernandesweb.online#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#about">Sobre mim</a></li>
              <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#services">Serviços</a></li>
              <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#public">Publicaçoes</a></li>
              <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#footer">contato</a></li>
              @auth
              <li><a class="nav-link scrollto" href="/events/create">Criar publicação</a></li>
              <li> <form action="/logout" method="POST">
                @csrf
                <a href="/logout" 
                  class="nav-link" 
                  onclick="event.preventDefault();
                  this.closest('form').submit();">
                  Sair
                </a>
              </form>
              </li>
              @endauth
              @guest
              <li><a class="nav-link scrollto" href="/login">login</a></li>
              @endguest
              
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->


      <script src="/assets01/vendor/aos/aos.js"></script>
      <script src="/assets01/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/assets01/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="/assets01/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="/assets01/vendor/php-email-form/validate.js"></script>
      <script src="/assets01/vendor/swiper/swiper-bundle.min.js"></script>
    
      <!-- Template Main JS File -->
      <script src="/assets01/js/main.js"></script>
</div>