<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/logo512.png">

    <title>Catálogos da Minha Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #08253F;
            color: #fff;
            padding: 0px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: #fff;
            font-size: 18px;
            text-decoration: none;
        }

        header img {
            max-height: 160px;
            width: auto;
            align-self: center;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .catalog-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .catalog-section {
            max-width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .catalog-cover {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .catalog-description {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .download-button {
            background-color: #08253F;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        footer {
            background-color: #08253F;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .custom-navbar {
            background-color: #08253F !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #ddd !important;
        }

        h1 {
            font-weight: bold;
            color: #08253F;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        [data-aos] {
            transition: transform 0.4s, opacity 0.4s;
        }

        footer {
            width: 100%;
            height: 60px;
            background-color: #08253F;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 20px;
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
    </style>
</head>

<body>

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

    <main>
        <h1>Bem-vindo aos cases de projetos da Try Sytems</h1>

        <div class="catalog-container">
            <div class="catalog-section">
                <img class="catalog-cover" src="images/TRY para site.svg" alt="Capa do Catálogo">
                <p class="catalog-description">Sistema de controle de qualidade.</p>
                <a href="#" class="download-button">
                    Baixar <span>&#x2B07;</span>
                </a>
            </div>

            <div class="catalog-section">
                <img class="catalog-cover" src="images/TRY para site.svg" alt="Capa do Catálogo">
                <p class="catalog-description">Automação com Software com -1 HC!</p>
                <a href="#" class="download-button">
                    Baixar <span>&#x2B07;</span>
                </a>
            </div>

            <div class="catalog-section">
                <img class="catalog-cover" src="images/TRY para site.svg" alt="Capa do Catálogo">
                <p class="catalog-description">Sitema de coleta e armazenagem de dados de produção</p>
                <a href="#" class="download-button">
                    Baixar <span>&#x2B07;</span>
                </a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Try Systems - Desenvolvimento de Sistemas</p>
    </footer>

</body>

</html>