<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--==================== FAVICON ====================-->
  <link rel="icon" href="assets/img/logoAbaSite.png" />
  <!--========== BOX ICONS LIBRARY ==========-->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <title>Try Systems</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</head>

<body>
  <!--========== SCROLL TOP ==========-->
  <a href="#" class="scrollTop show-scroll" id="scroll-top">
    <i class="bx bx-chevron-up scrollTop_icon" style="color: white;"></i>
  </a>

  <!--========== HEADER ==========-->
  <header class="l-header" id="header">
    <nav class="nav bd-container">
      <a href="/" class="nav_logo">
        <b>
          <span style="color: white;">Try</span>
          <span style="color: white;">Systems</span>
        </b>
      </a>

      <div class="nav_menu" id="nav-menu">
        <ul class="nav_list">
          <li class="nav_item">
            <a href="pages/page_solucoes.php" class="nav_link" style="color: white;">Perguntas Frequentes</a>
          </li>
          <li class="nav_item">
            <a href="pages/page_sobre.php" class="nav_link" style="color: white;">Nossa
              Missão</a>
          </li>
          <li class="nav_item">
            <a href="#services" class="nav_link" style="color: white;">Projetos</a>
          </li>
          <li class="nav_item">
            <a href="pages/page_conteudo.php" class="nav_link" style="color: white;">Conteúdo Educativo</a>
          </li>
          <li class="nav_item">
            <a href="pages/page_conteudo.php/#ebooks" class="nav_link" style="color: white;">Downloads</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <main class="l-main">
    <!--========== HOME ==========-->
    <section class="home" id="home">
      <div class="home_container bd-container bd-grid">
        <div class="home_data">
          <h1 class="home_subtitle" style="font-family: 'Archive', sans-serif; font-size: 35px; font-weight: bold;">
            <strong>TRY SYSTEMS</strong> <br>Sistemas para manufatura
          </h1>

          <a href="" class="button">Conhecer trabalhos</a>
        </div>

        <img src="assets/img/gearCentral.png" alt="logo" class="home_img" />
      </div>
    </section>

    <!--========== ABOUT ==========-->
    <section class="about section bd-container" id="about">
      <div class="about_container bd-grid">
        <div class="about_data">
          <h4 class="section-title about_initial">
            Você sabia que a otimização de processos na manufatura pode ser a
            chave para o sucesso operacional? 🏭
          </h4>
          <p class="about_description">
            Otimização de Processos para Manufatura: Identificamos e
            eliminamos gargalos, reduzindo tempos ociosos e refinando o fluxo
            de trabalho para uma produção mais eficiente e econômica. 🔄⏱️
          </p>
          <a href="#app" class="button">Gostou? Veja agora!</a>
        </div>

        <img src="assets/img/img1.png" alt="Ingredientes naturais" class="about_img" />
      </div>
    </section>

    <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/1.svg" class="d-block w-100" alt="Imagem 1">
        </div>
        <div class="carousel-item">
          <img src="assets/img/2.svg" class="d-block w-100" alt="Imagem 2">
        </div>
        <div class="carousel-item">
          <img src="assets/img/3.svg" class="d-block w-100" alt="Imagem 3">
        </div>
        <div class="carousel-item">
          <img src="assets/img/4.svg" class="d-block w-100" alt="Imagem 4">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <!--========== SERVICES ==========-->
    <section class="services section bd-container scroll-animated" id="services">
      <div data-aos="fade-in" class="cta-section">
        <div class="container">
          <h2 class="section-title">Segurança e Confiabilidade em Primeiro
            Lugar</h2>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="feature" style="font-size: 18px;">
                <img src="assets/img/002-security-shield.png" class="img-fluid" alt="Segurança">
                <p><strong>Segurança Máxima:</strong> Nossos
                  sistemas são desenvolvidos seguindo padrões
                  internacionais de segurança de dados.
                  Implementamos protocolos avançados de
                  criptografia, autenticação multifatorial e
                  auditorias de segurança regulares para
                  garantir a integridade e confidencialidade
                  dos seus dados</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="feature" style="font-size: 18px;">
                <img src="assets/img/001-cloud-service.png" class="img-fluid" alt="Nuvem">
                <p><strong>Bancos de Dados na Nuvem:</strong>
                  Utilizamos soluções de armazenamento em
                  nuvem de última geração para proporcionar
                  escalabilidade, flexibilidade e eficiência.
                  Com backups automáticos e recuperação de
                  desastres, garantimos alta disponibilidade e
                  acesso contínuo aos seus dados.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="feature" style="font-size: 18px;">
                <img src="assets/img/aws (3).png" class="img-fluid" alt="AWS">
                <p><strong>Parceria com a AWS:</strong>
                  Aproveitamos a infraestrutura robusta da
                  Amazon Web Services para oferecer uma
                  plataforma segura e resiliente. Com a AWS,
                  asseguramos redundância de dados, proteção
                  contra ameaças cibernéticas e uma
                  arquitetura de rede otimizada para o melhor
                  desempenho.</p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
              <div class="feature" style="font-size: 18px;">
                <img src="assets/img/escudo (1).png" class="img-fluid" alt="LGPD">
                <p><strong>Conformidade com a LGPD:</strong>
                  Estamos comprometidos com a conformidade
                  total com a Lei Geral de Proteção de Dados.
                  Nossos sistemas são projetados para
                  assegurar a privacidade e os direitos dos
                  titulares de dados, incluindo controle sobre
                  a coleta, uso, acesso e transferência de
                  informações pessoais, em linha com as
                  diretrizes da LGPD.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--===== APP =======-->
    <section class="app section bd-container" id="app">
      <div class="app_container bd-grid">
        <div class="app_data">
          <h2 class="section-title app_initial">Lucro</h2>
          <p class="app_description" style="font-size: 18px;">
            Maximize seus ganhos financeiros através de uma gestão eficiente
            de custos, aumento de receitas e estratégias de crescimento.
          </p>
          <h2 class="section-title app_initial">Qualidade</h2>
          <p class="app_description" style="font-size: 18px;">
            Comprometimento com a excelência. Oferecemos produtos/serviços de
            alta qualidade, priorizando satisfação do cliente e construção de
            uma reputação positiva. </p>
          <h2 class="section-title app_initial">Produtividade</h2>
          <p class="app_description" style="font-size: 18px;">
            Otimizamos recursos para oferecer eficiência máxima. Investimos em
            tecnologia, treinamento e processos para impulsionar a
            produtividade e garantir operações eficientes.</p>

        </div>

        <img src="assets/img/movil-app.png" alt class="app_img" />
      </div>
    </section>

    <!--========== CONTACT US ==========-->
    <section class="contact section bd-container" id="contact">
      <div class="contact_container bd-grid">
        <div class="contact_data">
          <span class="section-subtitle contact_initial">Gostaria de agendar
            uma visita?</span>
          <h2 class="section-title contact_initial">Entre em contato
            conosco</h2>
          <p class="contact_description">
            <strong> Impulsione seu negócio com nossa expertise.
            </strong>
          </p>
          <p>Desenvolvemos soluções de software personalizadas para atender
            às
            suas necessidades.😉</p>
        </div>

        <div class="contact_button">
          <a href="#" class="button" data-toggle="modal" data-target="#modal-contato">Entrar em Contato</a>
        </div>

      </div>
    </section>
  </main>

  <!--========== MODAL ==========-->
  <!-- Modal Bootstrap -->
  <div class="modal fade" id="modal-contato" tabindex="-1" role="dialog" aria-labelledby="modal-contato-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-contato-label">Entre em Contato</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="contact-form" action="https://formspree.io/f/xqkrbwve" method="POST">
            <input type="text" name="Nome" placeholder="Nome" class="form-control">
            <p></p>
            <input type="email" name="E-mail" placeholder="E-mail" class="form-control">
            <p></p>
            <textarea name="Mensagem" style="height: 100px" placeholder="Mensagem" class="form-control"></textarea>
            <p></p>
            <button type="submit" class="btn btn-primary cta-button">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--========== FOOTER ==========-->
  <footer class="footer section bd-container">
    <div class="footer_container bd-grid ">
      <div class="footer_content">
        <b class="footer_logo">
          <span>Try Systems</span>
        </b>

        <span class="footer_description">Sistemas Inteligentes</span>

        <div>
          <a href="#" class="footer_social"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="footer_social"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="footer_social"><i class="bx bxl-twitter"></i></a>
        </div>
      </div>

      <div class="footer_content">
        <h3 class="footer_title">Informações</h3>
        <ul>
          <li><a href="#" class="footer_link">Contato</a></li>
          <li><a href="#" class="footer_link">Política de
              Privacidade</a></li>
          <li><a href="#" class="footer_link">Termos de serviço</a></li>
        </ul>
      </div>

      <div class="footer_content">
        <h3 class="footer_title">Navegação</h3>
        <ul>
          <li><a href="#app" class="footer_link">Download</a></li>
          <li><a href="#contact" class="footer_link">Contate-nos</a></li>
          <li><a href="#foods" class="footer_link">Projetos</a></li>
        </ul>
      </div>
    </div>

    <p class="footer_copy" style="font-size: 18px;">
      &#169; Desenvolvido e mantido por Try Systems - Sistemas Inteligentes
    </p>
  </footer>

  <!--========== SCROLL REVEAL LIBRARY ==========-->
  <script src="https://unpkg.com/scrollreveal"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>