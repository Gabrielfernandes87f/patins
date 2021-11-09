<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>B-day</title>
  <meta name="description" content="Gabriel Fernandes, Niver, Bday, Parabéns!!!"/>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        <p><strong>05/11/2021</strong></p>
      <h1 data-aos="zoom-in">Gabriel Fernandes</h1>
      <h2 data-aos="fade-up"><strong>Hoje vamos celebrar a vida, Sejam todos bem vindos!</strong></h2>
      <a data-aos="fade-up" data-aos-delay="200" href="/events/create" class="btn-get-started scrollto">Poste uma foto comigo</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
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
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online/dashboard">Perfil</a></li>
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
  

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Sobre mim</h2>
          <p>Tentar resumir tudo em poucas linhas</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="/assets01/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Uma história de superação </h3>
              <p class="fst-italic">
                Todo mundo foi afetado de alguma forma com a pandemia, comigo não foi diferente. O que faz de cada um vencedor é como você linda com os seus problemas.</p>
              <ul>
                <li><i class="bx bx-check-double"></i>Estudei sobre investimentos e ainda lucrei muito no mercado financeiro.</li>
                <li><i class="bx bx-check-double"></i>Estudei muito sobre varias tecnologias até conseguir botar meu site no ar.</li>
                <li> Tudo é impossível até alguém ir lá e conseguir. Muita gente nem se importa de verdade se você realmente está bem, apenas gosta de saber da vida dos outros. Eu tirei esse ano apenas pra estudar, sabia desde do inicio que ficar sem trabalhar ia ser muito difícil, mas a gente quando quer ir mais longe precisamos dar dois passos pra trás pra pegar impulso e conseguir ir além. </li>
              </ul>
              <p>
                Cada um é capaz de coisas incríveis, basta acreditar, manter o foco, persistir e ter constância. Antes da pandemia eu saia, viajava muito. Esse ano rejeitei algumas ofertas de trabalha porque eu sei onde quero chega e você, por quanto tem vendido os seus sonhos? 
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
          <h2>Serviços</h2>
          <p>Aprendi muitas coisas até aqui:  </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Habilidade com vendas.</h4>
              <p>Quando completei 18 anos fui morar em Goiânia GO, eu aprendi muitas técnicas de vendas, aprender a ser um bom líder e a trabalhar em equipe.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>Fotografia</h4>
              <p>Em 2013 eu fiz curso de fotografia na UFCG, assim que terminei o curso comecei a trabalhar pra uma coluna social aqui da minha cidade. E logo comecei a pegar eventos particular, casamentos e 15 anos. Trabalhei com fotografia até final de 2019.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-images"></i>
              <h4>Engenharia de software</h4>
              <p>Comecei a realmente estudar programação em março de 2021. Esse ano eu evoluir muito nos estudos. Minha meta é até o ano que vem está dominando programação web, mobile e fluente no inglês.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets01/img/services.png");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="/assets01/img/featured-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="/assets01/img/featured-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="/assets01/img/featured-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="/assets01/img/featured-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Trabalhar e investir</h4>
                  <p>Você pode ganhar bem, mas precisa ter pelo menos uma noção sobre investimentos.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Uma vida confortável</h4>
                  <p>Não precisa guardar tudo que ganha, saiba administrar seu dinheiro pra não ter uma vida miserável sendo rico.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Dinheiro é apenas um pedaço de papel</h4>
                  <p>O que você faz com o dinheiro é o que realmente importa. Tudo na vida é sobre o que você faz com o que você tem</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Dias de luta e dias de glória</h4>
                  <p>Trate bem as pessoas, seja ela rica ou pobre, precisamos uns dos outros. Tenha humildade, Seja a pessoa que você gostaria de conhecer.</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

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
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Publicações</h2>
          <p class="mb-4">Se não sair bonito tudo bem, o que importa é ter saúde.😜</p>

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
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="quote-icon">
         
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://instagram.com/aysagsadvs?utm_medium=copy_link" target="_blank">
                  <img src="/assets01/img/testimonials/Aysa.jpeg" class="testimonial-img" alt="">
                </a>
                <h3>Aysa Gusmão</h3>
                <h4>Advogada empresarial</h4>
                <a href="https://instagram.com/aysagsadvs?utm_medium=copy_link"target="_blank"><i class="bx bxl-instagram"></i></a>
                <p>
                  Poucas vezes temos a chance de encontrar pessoas de bom coração no mundo, pessoas que veem o mundo por uma perspectiva diferente, pessoas com um olhar sensível a tudo que acontece ao seu redor, com empatia e delicadeza para tentar se colocar no lugar do próximo e você é um desses seres de luz, que Deus conserve o seu coração assim e que você continue  sendo luz é diferença no mundo. Parabéns pelo seu dia🌷🌷🌷
                </p>
              </div>
            </div><!-- End testimonial item -->

            
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://instagram.com/its.diniz?utm_medium=copy_link" target="_blank">
                  <img src="/assets01/img/testimonials/isabelle.jpeg" class="testimonial-img" alt="">
                </a>
                <h3>Isabelle</h3>
                <a href="https://instagram.com/its.diniz?utm_medium=copy_link"target="_blank"><i class="bx bxl-instagram"></i></a>
                <p>
                  Muitos não se dão conta, mas o significado da palavra amizade é bem complexo. Amigo é aquela pessoa que você sabe que pode contar pra tudo. Alguém que te deixa a vontade pra ser você mesmo. Alguém que celebra tuas conquistas e te dá a mão nos momentos difíceis… 
                  Eu não tenho muitos amigos… é muito difícil achar amigos de verdade. Mas sou feliz de chamar Gabriel de amigo e sou grata por todos os momentos compartilhados e mais ainda por nossa amizade continuar a mesma apesar da distância.
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://instagram.com/leiliane_goncalo?utm_medium=copy_link" target="_blank">
                  <img src="/assets01/img/testimonials/liany.jpeg" class="testimonial-img" alt="">
                </a>
                <h3>Liany</h3>
                <a href="https://instagram.com/leiliane_goncalo?utm_medium=copy_link"target="_blank"><i class="bx bxl-instagram"></i></a>
                <p>
                  Feliz aniversário doido da minha vida!
                  Que Deus te abençoe imensamente, <br/> te dê muitos anos de vida, saúde e sabedoria.
                  Estarei sempre aqui de 9 em 9 anos <br/> (entendemos kkk)
                  Enfim, parabéns!🥳❤
                </p>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


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
    {{--
    <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

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
          <a href="#" class="google-plus"><i class="bx bxl-discord"></i></a>
          
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