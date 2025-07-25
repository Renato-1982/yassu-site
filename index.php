<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Padaria e Confeitaria Yassu Ltda EPP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/personalizado.css">

  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      padding-top: 60px;
    }

    .navbar {
      background-color: #b30000;
    }

    .navbar-brand img {
      height: 40px;
    }

    .navbar-nav .nav-link {
      color: white !important;
    }

    .section {
      padding: 20px 0;
    }

    #topBtn {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      z-index: 999;
    }

    .bg-red {
      background-color: #f8d7da;
    }

    footer {
      background-color: #b30000;
      color: white;
      padding: 20px 0;
    }

    .home-logo {
      max-width: 200px;
    }

    .social-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 60px 15px;
    }

    .social-link {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-size: 32px;
      transition: all 0.3s ease;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .social-link:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.2);
    }

    .facebook {
      background-color: #3b5998;
    }

    .instagram {
      background: radial-gradient(circle at 30% 30%, #feda75, #d62976, #962fbf);
    }

    .whatsapp {
      background-color: #25D366;
    }

    .ifood {
      background-color: #EA1D2C;
    }

    .email {
      background-color: #dd4b39;
    }

    h1 {
      text-align: center;
      margin-top: 40px;
      color: #b30000;
    }

    h4 {
      text-align: center;
      color: #ffffff;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <!--<img src="images/yassu_transparente.png" alt="Logomarca Yassu">-->
        <h4>Padaria e Confeitaria Yassu Ltda EPP</h4>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon bg-light rounded"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#produtos">Produtos</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#localizacao">Localização</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Home -->
  <section id="home" class="section text-center bg-red">
    <div class="container">
      <img src="images/yassu_transparente.png" alt="Logomarca Yassu" class="home-logo mb-4">
      <h1 class="display-4">Padaria e Confeitaria Yassu Ltda EPP</h1>
      <p class="lead">Tradição e sabor em cada fornada!</p>
    </div>
  </section>
  <br>
  <br>
  <br>

  <!-- Produtos -->
  <section id="produtos" class="section">
    <div class="container">
      <h2 class="text-danger text-center mb-4">Nossos Produtos</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <a href="panificados.html" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm">
              <img src="images/paes.jpg" class="card-img-top" alt="Pães artesanais">
              <div class="card-body">
                <h5 class="card-title">Panificados</h5>
                <p class="card-text">Pães fresquinhos e variados todos os dias. Feitos com carinho e tradição.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="confeitaria.html" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm">
              <img src="images/bolo.jpg" class="card-img-top" alt="Bolos decorados">
              <div class="card-body">
                <h5 class="card-title">Confeitaria</h5>
                <p class="card-text">Bolos personalizados para todas as ocasiões: aniversários, casamentos e mais.</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="salgados.html" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm">
              <img src="images/docinhos.jpg" class="card-img-top" alt="Doces e tortas">
              <div class="card-body">
                <h5 class="card-title">Salgados</h5>
                <p class="card-text">Docinhos irresistíveis e tortas artesanais para adoçar seu dia.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Sobre -->
  <section id="sobre" class="section bg-white">
    <div class="container">
      <h2 class="text-danger text-center mb-5">Sobre Nós</h2>
      <div class="row g-4">
        <!-- Coluna 1 -->
        <div class="col-md-6">
          <div class="p-4 border rounded shadow-sm bg-light h-100">
            <p>
              Seja muito bem-vindo à <strong>Padaria e Confeitaria Yassu Ltda EPP</strong>, um nome que representa tradição, qualidade e dedicação em Sete Lagoas – MG desde <strong>27 de novembro de 1986</strong>.
            </p>
            <p>
              Localizada na <strong>Rua Coronel Randolfo Simões, nº 1289, bairro Boa Vista</strong>, nossa padaria é mais do que um ponto de encontro gastronômico: é um espaço onde histórias são contadas ao redor do pão quentinho, do café fresco e dos doces artesanais que conquistam gerações.
            </p>
            <p>
              Fundada por <strong>Geraldo Alberto Chaves Ribeiro</strong>, a Padaria Yassu nasceu com o propósito de oferecer produtos frescos e saborosos, feitos com ingredientes selecionados e um toque especial de carinho em cada detalhe. Ao longo de mais de três décadas, evoluímos com o tempo sem perder nossa essência: servir com excelência e acolhimento.
            </p>
            <p class="text-center mt-4 fst-italic text-muted">
              Padaria e Confeitaria Yassu – Tradição e sabor desde 1986.
            </p>
          </div>
        </div>

        <!-- Coluna 2 -->
        <div class="col-md-6">
          <div class="p-4 border rounded shadow-sm bg-light h-100">
            <p>
              Nos orgulhamos de ser uma empresa de pequeno porte, mas com grande impacto na comunidade local. Acreditamos que o segredo de nossa longevidade está na confiança de nossos clientes e no comprometimento de nossa equipe, sempre pronta para entregar o melhor da panificação e confeitaria artesanal.
            </p>
            <p>
              Cada fornada é um reflexo do nosso cuidado com o sabor e a satisfação de quem nos visita. Da padaria tradicional aos doces personalizados da confeitaria, buscamos encantar em cada detalhe.
            </p>
            <p>
              Além disso, estamos constantemente inovando em nossos produtos e serviços para acompanhar as preferências dos nossos clientes, sem perder o toque artesanal que é nossa marca registrada.
            </p>
            <p>
              Convidamos você a fazer parte da nossa história. Seja para um simples café da manhã, uma encomenda especial ou aquele pão de cada dia, a Padaria Yassu está de portas abertas para lhe receber com sabor, tradição e um atendimento que faz você se sentir em casa.
            </p>
            <p class="text-center mt-4 fst-italic text-muted">
              Desde 1986, levando qualidade à sua mesa.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Localização -->
  <section id="localizacao" class="section bg-white">
    <div class="container">
      <h2 class="text-danger text-center mb-4">Nossa Localização</h2>

      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <p class="mb-4 fs-5">
            Estamos localizados na <strong>Rua Coronel Randolfo Simões, nº 1289, Bairro Boa Vista – Sete Lagoas/MG</strong>, bem ao lado da rotatória que dá acesso ao Clube Náutico. Fácil de chegar, com estacionamento próximo e acesso rápido pela avenida principal.
          </p>

          <!-- Mapa responsivo -->
          <div class="ratio ratio-16x9 rounded shadow-sm">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.142933489877!2d-44.25987068564566!3d-19.645219035951305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6977d8a6eaf65%3A0x68faaf0f498cce38!2sR.%20Cel.%20Randolfo%20Sim%C3%B5es%2C%201289%20-%20Boa%20Vista%2C%20Sete%20Lagoas%20-%20MG%2C%2035700-353!5e0!3m2!1spt-BR!2sbr!4v1721412845900!5m2!1spt-BR!2sbr"
              width="600"
              height="450"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>

          <p class="text-muted mt-3">Clique no mapa para abrir no Google Maps ou trace sua rota até nós.</p>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Contato -->
  <section id="contato" class="section bg-light">
    <div class="container">
      <h2 class="text-danger text-center mb-4">Fale Conosco</h2>

      <div class="row justify-content-center">
        <div class="col-md-8">

          <p class="text-center mt-4">
            📍 Rua Coronel Randolfo Simões, 1289 - Boa Vista, Sete Lagoas - MG<br>
            📞 (31) 3773-9091<br>
            📞 (31) 9.8778-5244<br>
            📧 padariayassu@yahoo.com.br
          </p>
        </div>
      </div>

      <div class="social-container">
        <!-- Facebook -->
        <a href="https://facebook.com/seupagina" target="_blank" class="social-link facebook" title="Facebook">
          <i class="fab fa-facebook-f"></i>
        </a>
        <!-- Instagram -->
        <a href="https://www.instagram.com/padariayassu?igsh=cDRkM244OGZhYXM=" target="_blank" class="social-link instagram" title="Instagram">
          <i class="fab fa-instagram"></i>
        </a>
        <!-- Whatsapp -->
        <a href="https://wa.me/message/ZJ7EDHVIQTKNM1" target="_blank" class="social-link whatsapp" title="WhatsApp">
          <i class="fab fa-whatsapp"></i>
        </a>
        <!-- Ifood -->         
        <a href="https://www.ifood.com.br/delivery/sete-lagoas-mg/padaria-e-confeitaria-yassu-ltda-boa-vista/3ed5934b-aeb9-4ecc-ac5f-64266b11b215?UTM_Medium=share " target="_blank" class="social-link ifood" title="iFood">
          <i class="fas fa-utensils"></i>
        </a>
        <!-- E-mail -->
        <a href="mailto:padariayassu@yahoo.com.br" class="social-link email" title="E-mail">
          <i class="fas fa-envelope"></i>
        </a>

      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>&copy; 2025 Padaria e Confeitaria Yassu Ltda EPP. Todos os direitos reservados.</p>
    </div>
  </footer>

  <!-- Botão voltar ao topo -->
  <button id="topBtn" class="btn btn-danger rounded-circle">↑</button>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const topBtn = document.getElementById("topBtn");
    window.onscroll = () => {
      topBtn.style.display = window.scrollY > 200 ? "block" : "none";
    };
    topBtn.onclick = () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    };
  </script>
</body>

</html>