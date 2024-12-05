<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sobre.css">

    <?php include_once('./../componentes/navbar.php'); ?>
</head>
<body>
    <div class="main-container">
        <!-- Seção de vídeo -->
        <div class="video-section">
            <video controls>
                <source src="../img/site/Fort.mp4" type="video/mp4">
                Seu navegador não suporta vídeos.
            </video>
            <div class="description">
        <h2>Descrição</h2>
        <p>
            Fortnite é um jogo online de ação e tiro no estilo Battle Royale, onde jogadores competem para ser o último sobrevivente em uma ilha. Com diversas opções de personalização, eventos especiais e modos de jogo criativos, ele proporciona uma experiência única e envolvente para todos os públicos.
        </p>
    </div>
            <!-- <div class="thumbnails">
                <img src="..." alt="Thumb 1">
                <img src="..." alt="Thumb 2">
                <img src="..." alt="Thumb 3">
                <img src="..." alt="Thumb 4">
            </div> -->
        </div>

        <!-- Seção de informações -->
        <div class="info-section">
            <h1>Fortnite</h1>
            <p><strong>Gênero:</strong> Ação, Tiro</p>
            <p><strong>Idade:</strong> 12 anos</p>
            <p><strong>Preço:</strong> Gratuito (com compras no aplicativo)</p>
            <a href="#" class="btn">Obter</a>
            <a href="#" class="btn btn-secondary">Adicionar ao Carrinho</a>
            <p><strong>Desenvolvedor:</strong> Epic Games</p>
            <p><strong>Data de lançamento:</strong> 21/07/2017</p>
        </div>
    </div>


</body>

</html>
    <?php include_once('./../componentes/footerUser.php'); ?>
</body>
</html>
