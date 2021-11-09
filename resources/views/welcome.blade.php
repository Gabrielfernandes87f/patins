<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Turma do patins</title>
  <meta name="description" content="Gabriel Fernandes, Desenvolvedor, Patinador, Patins, Patins Campina Grande, Campina Grande, Paraiba
  somos patinadores de Campina Grande Paraiba,"/>
  <meta name="author" content="Gabriel Fernandes" />

  <!-- Favicons -->
  
  <link href="/assets01/img/apple-touch-icon.png" rel="apple-touch-icon">

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
          <li><a class="nav-link scrollto active" href="https://gabrielfernandesweb.online#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#about">turma do patins</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#services">Dicas</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#public">Publicaçoes</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#footer">Entre em contado</a></li>
          @auth
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online/dashboard">Perfil</a></li>
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
      <a data-aos="fade-up" data-aos-delay="200" href="/events/create" class="btn-get-started scrollto">Quer andar de patins? post aqui</a>
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

    

    <!-- ======= Featured Section ======= -->


    <!-- ======= Why Us Section ======= -->
    {{--
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content" data-aos="fade-up">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in">
            <a href="https://www.youtube.com/watch?v=LIqQNG_q2us" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

        </div>

      </div>
   
    </section><!-- End Why Us Section -->
       --}}

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

    <!-- ======= Testimonials Section ======= -->
   


    <!-- ======= Clients Section ======= -->

    <!-- ======= Team Section ======= -->
    {{-- 
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
    --}}

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
                <li>Deixe milhoões de pessoas <br />
                   conhecer seu trabalho</li>
                <li>Site com certificado ssl</li>
                <li>Ambiente seguro (HTTPS)</li>
                <li>Exemplo de lading page</li>
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
              <span class="recommended-badge">Recomendado</span>
              <h3>Seja um apoiador</h3>
              <h4>10<span> / Reais</span></h4>
              <ul>
                <li>Não é muito, mas ajuda a manter o site no ar</li>
                <li>Não precisa contribuir pra postar no site</li>
                <li>Todo Site precisa de manutenção</li>
                <li>Site ainda na versão 1.0</li>
                <li>Ainda vai ter muitas atualizações</li>
                <li>Esse site conta com banco de dados</li>
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
                <li>Site com certificado ssl</li>
                <li>Ambiente seguro (HTTPS)</li>
                <li>O site conta com sistema de login e <br/> banco de dados</li>
                <li>Exemplo de um site Pro</li>
                <a href="/">turmadopatins.tech</a>
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
{{--
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  {{--}}
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <h4><a href="https://www.meuevento.tech"target="_blank">www.meuevento.tech</a></h1>
            <p>Visite minha landing page</p>
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