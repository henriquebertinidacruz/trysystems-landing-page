<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/imagem-para-icone.png">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Try Systems Ensina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/logo512.png">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            margin-bottom: 60px;
        }

        html {
            position: relative;
            min-height: 100%;
        }

        header {
            background: #08253F;
            color: #fff;
            text-align: left;
            padding: 2% 5% 2% 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1,
        header p {
            margin: 0;
            font-size: 3rem;
        }

        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 20px;
        }

        nav {
            text-align: right;
        }

        nav a {
            display: inline-block;
            margin: 0 10px;
        }

        .col-md-12.col-lg-8 {
            display: flex;
            align-items: center;
        }

        main {
            padding: 20px;
        }

        h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-title {
            font-size: 1.5rem;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #08253F;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 20px;
        }

        .return-button {
            background-color: #08253F;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s, color 0.3s;
            margin-bottom: 20px;
        }

        .return-button:hover {
            background-color: #08253F;
            color: #fff;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #08253F;
            border-color: #08253F;
        }

        .btn-primary:hover {
            background-color: #00111A;
            border-color: #00111A;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #08253F;">
        <div class="container">
            <a class="navbar-brand" href="index.php">Try Systems Ensina</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#videos">Vídeos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cursos">Cursos Gratuitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ebooks">E-books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#artigos">Artigos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Início</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="videos" class="bg-light py-5">
        <div class="container">
            <h2>Vídeos Recomendados</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h3 class="card-title">Automação de Processos Industrias com Softwares Integrados</h3>
                            <p class="card-text">Entenda de uma vez a importância e os benefícios de automatizar processos com sitemas. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h3 class="card-title">Gerenciamento de dados produtivos</h3>
                            <p class="card-text">A todo momento, dados são gerados por processos produtivos, entenda como consumir esses dados e utiliza-los a seu favor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0" allowfullscreen></iframe>
                        <div class="card-body">
                            <h3 class="card-title">Sistemas Shop Floor</h3>
                            <p class="card-text">O que são sistemas Shop Floor, quais os benefícios desses sistemas no ambiente de manufatura, como eles podem agregar valor ao produto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <section id="cursos" class="bg-light py-5">
        <div class="container">
            <h2>Cursos Gratuitos</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Curso 1: Introdução ao Desenvolvimento de Sistemas</h3>
                            <p class="card-text">Este curso introdutório explora conceitos fundamentais do desenvolvimento de sistemas, capacitando os participantes com habilidades essenciais para criar sistemas robustos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Curso 2: Automação de Processos Industriais</h3>
                            <p class="card-text">Explore a automação de processos industriais neste curso, abordando práticas avançadas para otimizar eficiência e controle em ambientes industriais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Curso 3: Banco de Dados e SQL</h3>
                            <p class="card-text">Aprenda a projetar e gerenciar sistemas de banco de dados eficientes neste curso abrangente sobre bancos de dados e SQL, essencial para o desenvolvimento de sistemas baseados em dados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section id="artigos" class="py-5">
            <div class="container">
                <h2>Artigos sobre Desenvolvimento de Sistemas</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/pessoas-trabalhando.svg" alt="Imagem do Artigo 1" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Aguardando publicação.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/pessoas-trabalhando.svg" alt="Imagem do Artigo 2" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Aguardando publicação.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/pessoas-trabalhando.svg" alt="Imagem do Artigo 3" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">Aguardando publicação.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="ebooks" class="py-5">
            <div class="container">
                <h2>E-books Gratuitos</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">E-book Automação Industrial</h3>
                                <p class="card-text">Este e-book abrange os princípios e aplicações da automação industrial, explorando tecnologias avançadas e estratégias eficazes para otimizar processos industriais. Descubra as últimas tendências em automação, desde sistemas robóticos até a integração de sensores, proporcionando uma visão abrangente e prática para profissionais e estudantes no campo da automação industrial.</p>
                                <a href="link_do_ebook_1" class="btn btn-primary" download>Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">E-book Sistemas de Controle de Produção</h3>
                                <p class="card-text">Explore as nuances dos sistemas de controle de produção neste e-book informativo. Desde os fundamentos teóricos até estudos de caso práticos, você descobrirá como os sistemas de controle impulsionam a eficiência e a qualidade na produção industrial. Ideal para engenheiros de controle, gerentes de produção e estudantes que buscam compreender a importância e a implementação de sistemas de controle na indústria.</p>
                                <a href="link_do_ebook_2" class="btn btn-primary" download>Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h3 class="card-title">E-book Controle de produção com sistemas integrados</h3>
                                <p class="card-text">Este e-book oferece insights sobre o controle de produção por meio da integração de sistemas. Explore como a interconexão de diferentes fases de produção, como design, fabricação e logística, pode otimizar a eficiência operacional. Descubra estratégias para implementar sistemas integrados com sucesso, promovendo uma produção mais ágil e adaptável em ambientes industriais modernos. Indispensável para profissionais e acadêmicos interessados na convergência de tecnologias para o controle efetivo da produção.</p>
                                <a href="link_do_ebook_3" class="btn btn-primary" download>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Try Systems - Desenvolvimento de Sistemas</p>
        </div>
    </footer>

</body>

</html>