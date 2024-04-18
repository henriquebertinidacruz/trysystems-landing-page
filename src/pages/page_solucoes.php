<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas Frequentes - Try Systems</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo512.png">
</head>

<body>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #08253F;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .wrapper {
            flex: 1;
        }

        .navbar-brand {
            margin-right: auto;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .custom-navbar {
            background-color: #08253F !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            transition: color 0.3s;
            text-decoration: none;
        }

        .navbar-nav .nav-link:hover {
            color: #ddd !important;
        }

        h1,
        h5 {
            font-weight: bold;
            color: #08253F;
        }

        p,
        .faq-answer {
            font-size: 1.1em;
            line-height: 1.6;
            color: #08253F;
        }

        [data-aos] {
            transition: transform 0.4s, opacity 0.4s;
        }

        button,
        .btn,
        a {
            transition: all 0.3s;
        }

        button:hover,
        .btn:hover,
        a:hover {
            opacity: 0.9;
        }

        .faq-question,
        .faq-answer,
        .card-body {
            color: #08253F !important;
        }

        .faq-answer {
            color: #333;
        }

        footer {
            width: 100%;
            height: 60px;
            background-color: #08253F;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 20px;
            position: fixed;
            bottom: 0;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-navbar">
        <div class="container">
            <a class="navbar-brand navbar-light mr-auto" href="index.php" style="color: #fff;">Try Systems</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="mb-4">Perguntas Frequentes</h1>
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Quais são os principais problemas que es empresas enfrentam com relação a software?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse faq-answer" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    As fábricas enfrentam desafios significativos relacionados ao software, incluindo integração de sistemas, segurança cibernética, manutenção de software, custo e complexidade, capacitação de pessoal, obsolescência de tecnologia, interoperabilidade, customização e flexibilidade. A integração eficaz de sistemas, a segurança contra ameaças cibernéticas e a manutenção adequada do software são cruciais. Custos elevados, falta de habilidades específicas, obsolescência tecnológica e a necessidade de personalização e flexibilidade adicionam complexidade ao cenário industrial. Uma abordagem estratégica e conscientização contínua são essenciais para enfrentar esses desafios. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Quais são as travas ante erros de softwares nas linhas de produção? </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse faq-answer" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Travas e mecanismos de prevenção de erros são cruciais para a eficiência e qualidade nos processos industriais. Algumas principais incluem técnicas Poka Yoke Digital, validação rigorosa de dados, controles de acesso, auditoria, testes abrangentes, backup, treinamento, alertas e manutenção preditiva. Essas medidas visam evitar erros de software, promovendo a eficiência e confiabilidade nas linhas de produção industrial. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
                                        O que é e porque ter um sistema de Poka Yoke para a sua empresa
                                </h5>
                            </div>
                            <div id="collapseTree" class="collapse faq-answer" aria-labelledby="headingTree" data-parent="#accordion">
                                <div class="card-body">
                                    Poka Yoke, termo japonês para "à prova de erros", refere-se a técnicas ou dispositivos para evitar erros em processos, originado no Sistema Toyota de Produção. Seu objetivo é prevenir ou detectar erros, promovendo a qualidade e eliminando desperdícios. Princípios incluem prevenção e detecção de erros, simplicidade e feedback imediato. Exemplos práticos envolvem dispositivos físicos, sistemas de contagem e códigos de cores. O Poka Yoke é uma abordagem proativa para assegurar qualidade, antecipando-se a erros antes que impactem o produto final. </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Formas de evitar desperdício usando softwares em produções de empresas
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse faq-answer" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    A utilização de softwares desempenha um papel crucial na redução do desperdício em processos de produção. Estratégias incluem o uso de sistemas avançados para planejamento eficiente, gestão de estoque em tempo real, controle de qualidade automatizado, manutenção preditiva, automação para otimização de processos, monitoramento ambiental, sistemas integrados, simulação de processos, comunicação eficiente, e análise de dados. Essas abordagens, suportadas por softwares adequados, promovem eficiência, qualidade e sustentabilidade nas operações de produção.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Quais são os ganhos para uma empresa que utilizam softwares de controle de qualidade em processos e produtos?
                                </h5>
                            </div>

                            <div id="collapseFive" class="collapse faq-answer" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    A implementação de softwares de controle de qualidade proporciona diversos benefícios para as empresas. Isso inclui a melhoria da qualidade do produto com a identificação precoce de defeitos, redução de custos através do menor retrabalho e desperdício, aumento da eficiência operacional com otimização de processos, conformidade com normas e regulamentações, melhor rastreabilidade de produtos, satisfação do cliente com fornecimento consistente de produtos de alta qualidade, tomada de decisões informadas com acesso a dados em tempo real, maior agilidade e adaptabilidade, redução de erros manuais, e capacidade de inovação ao liberar recursos para atividades de desenvolvimento. Esses benefícios contribuem para a competitividade e eficácia geral da empresa.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Try Systems - Desenvolvimento de Sistemas</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>