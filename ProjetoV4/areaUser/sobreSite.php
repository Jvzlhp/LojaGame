<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre | [Nome da Loja]</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/sobreSite.css">
</head>
<body class="text-white">
    <!-- Navbar -->
    <?php include_once('./../componentes/navbar.php'); ?>

    <!-- Main Content -->
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <div class="text-center mb-4">
            <h1 class="display-4 titulo">SOBRE A ECLIPSY</h1>
            <hr>
        </div>

        <!-- Seção de Cards -->
        <div class="card-container">
            <div class="card">
                <div class="card-inner">
                    <!-- Card Front com imagem -->
                    <div class="card-front" style="background-image: url('../img/site/controle.jpg');"></div>
                    <div class="card-back">Descubra a proposta e os benefícios do nosso site, com uma plataforma fácil de navegar, segura e repleta de recursos dedicados aos gamers.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <!-- Card Front com imagem -->
                    <div class="card-front" style="background-image: url('../img/site/play.jpg');"></div>
                    <div class="card-back">Fique por dentro dos lançamentos mais aguardados do mundo dos jogos, com informações atualizadas sobre as datas de lançamento, trailers e edições especiais.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <!-- Card Front com imagem -->
                    <div class="card-front" style="background-image: url('../img/site/cadeado.jpg');"></div>
                    <div class="card-back">Nosso site adota tecnologias avançadas de criptografia e protocolos de segurança para garantir a proteção dos seus dados e transações online. Confiança e privacidade são nossas prioridades.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once('./../componentes/footerUser.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
