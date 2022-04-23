<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Turma do patins</title>
  <meta name="description" content="Patins Campina Grande-PB, Somo um grupo de patinadores tentando reunir em um único lugar pessoas que goste de liberdade, patinar na rua, slalom, freestyle, pessoas que queira se juntar a nós pra praticar, fazer amizades, aprender. Todos serão bem vindos"/>
  <meta name="author" content="Gabriel Fernandes" />

  <!-- fonts -->

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,500;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,700;1,400&display=swap');
  </style>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,500;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets01/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets01/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets01/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets01/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets01/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets01/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets01/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v4.3.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center ">
      <nav id="navbar" class="navbar">
        <ul class="text-center">
          <li><a class="nav-link scrollto active" href="http://127.0.0.1:8000/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/#about">turma do patins</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/#services">Dicas</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/#public">Publicaçoes</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/#footer">Entre em contado</a></li>
          @auth
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/dashboard">Perfil</a></li>
          <li><a class="nav-link scrollto" href="/events/create">Criar evento</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        <p><strong>Adm: Gabriel Fernandes</strong></p>
      <h1 data-aos="zoom-in">Turma do patins</h1>
      <h2 data-aos="fade-up"><strong>venha patinar conosco, junte-se a nós também no <a href="https://discord.gg/K95wtYHg">Discord</a></strong></h2>
      <a data-aos="fade-up" data-aos-delay="200" href="/events/create" class="btn-get-started scrollto">
        Vai andar de patins? crie um anúncio aqui</a>
        <p class="mt-4">Outras pessoas poderão ver seu anúncio e se juntar a você</p>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->



  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Turma do patins</h2>
          <p>Um lugar onde todos tem voz</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="/assets01/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Oportunidade </h3>
              <p class="fst-italic">
                Aqui você pode criar seu rolê
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i>vai patinar em um local fixo? divulga aqui.</li>
                <li><i class="bx bx-check-double"></i>Vai fazer urban? divulga aqui.</li>
                <li>  </li>
              </ul>
              <p>
                Vamos abrir um espaço pra vocês que querem patinar, e ajudar a divulgar o espaço. <br>

              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Dicas</h2>
          <p>Professor Jailson Inline</p>

        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">

              <h4>Tipos de patins</h4>
              <p>
                Em breve
              </p>

            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">

              <h4>
                Importância dos EPI
              </h4>
              <p>em breve</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">

              <h4>Dicas de patinação para iniciante</h4>
              <p>Em breve</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="public" class="portfolio mb-4 mt-4">
      <div class="container  mb-4 mt-4">

        <div class="section-title container-fluid" data-aos="fade-up">
          <h2>Eventos</h2>
          <p class="mb-4">hoje tem rolê? Eventos aqui em abaixo</p>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($events as $event)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="/img/events/{{ $event->image }}" width="400" height="400"class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ date('d/m/Y', strtotime($event->date)) }}</h4>
                  <p>{{ count($event->users) }}</p>
                  <div class="portfolio-links">
                    <a href="/events/{{ $event->id }}"title="Mais detalhes"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>





      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Pricing Section ======= -->

    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Precisamos do seu apoio</h2>
          <p>Vocês estão gostando do site? Ajude a continuar esse projeto, seja um apoiador</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Lading page</h3>
              <h4>1.300,00<span> / Reais</span></h4>
              <ul>
                <li>Deixe milhoõs de pessoas <br />
                   conhecer seu trabalho.</li>
                <li>Site com certificado ssl.</li>
                <li>Ambiente seguro (HTTPS).</li>
                <li>Exemplo de lading page.</li>
                <a href="meuvento.tech">meuevento.tech</a>
                <li></li>
                <li class="na"></li>
              </ul>
              <div class="btn-wrap">
                <a href="https://api.whatsapp.com/send?phone=558396724726&text=tenho%20interesse%20em%20saber%20sobre%20lading%20page" class="btn-buy">Mais informações</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <span class="recommended-badge mt-2">Recomendado</span>
              <h3 class="mt-4">Seja um apoiador</h3>
              <h4>10,00<span> / Reais</span></h4>
              <ul>
                <li>Não é muito, mas ajuda a manter o site no ar.</li>
                <li>Não precisa contribuir pra postar no site.</li>
                <li>Todo Site precisa de manutenção.</li>
                <li>Ainda vai ter muitas atualizações.</li>
                <li>Esse site conta com banco de dados.</li>
                <li>Site ainda na versão 1.0</li>
              </ul>
              <div class="btn-wrap">
                <a href="https://nubank.com.br/pagar/1f5hpu/9KdPwdRMEt" class="btn-buy">Apoiar projeto</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Site Pro</h3>
              <h4>5.500,00<span> / Reais</span></h4>
              <ul>
                <li>Site com certificado ssl.</li>
                <li>Ambiente seguro (HTTPS).</li>
                <li>O site conta com sistema de login e <br/> banco de dados.</li>
                <li>Exemplo de um site Pro.</li>
                <a href="/">turmadopatins.tech.</a>
                <li></li>
                <li class="na"></li>
              </ul>
              <div class="btn-wrap">
                <a href="https://api.whatsapp.com/send?phone=558396724726&text=tenho%20interesse%20em%20saber%20mais%20sobre%20Site%20Pro" class="btn-buy">Mais informações</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <h4><a href="https://www.meuevento.tech"target="_blank">www.meuevento.tech</a></h1>
            <p>Api em Next</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
            <div class="col-lg-6">
              <h4><a href="https://www.meuevento.tech"target="_blank">gabrielfernandes87f.github.io/my-pages</a></h1>
              <p>Minha pagina de apresentação - gitpages</p>
            </div>
          </div>

        <div class="social-links">
          <a href="https://wa.me/message/5N2F3F7WSTGCN1"target="_blank" class="twitter"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://github.com/Gabrielfernandes87f"target="_blank" class="facebook"><i class="bx bxl-github"></i></a>
          <a href="https://instagram.com/gabriel.fernandes.f?utm_medium=copy_link"target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://discord.gg/K95wtYHg" class="google-plus"><i class="bx bxl-discord"></i></a>

        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <small>Copyright © 2021 Web developer | Powered by Gabriel Fernandes</small>.
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- Vendor JS Files -->



  <script src="/assets01/vendor/aos/aos.js"></script>
  <script src="/assets01/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets01/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets01/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets01/vendor/php-email-form/validate.js"></script>
  <script src="/assets01/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets01/js/main.js"></script>


</body>

</html>
