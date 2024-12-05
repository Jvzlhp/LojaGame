<?php
session_start();
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./../css/home.css">

</head>



<body>

  <?php
  include_once('./../componentes/navbar.php');

  ?>



  <div class="video-background">
    <video autoplay muted loop id="background-video">
      <source src="../img/site/sonic.webm" type="video/webm">
      Seu navegador não suporta a tag de vídeo.
    </video>
    <!-- Camada escura sobre o vídeo -->
    <div class="overlay"></div>
    <div class="content">
      <h1>Bem-vindo a Eclipsy</h1>
      <p>Melhor lugar para comprar jogos!</p>
    </div>
  </div>

  <div class="imgpai">
    <img src="../img/site/" alt="">
  </div>




  <div class="filho">

    <div class="pai">
      <div class="p">
        <h3 class="novos"></h3>
      </div>

      <div id="carousel">
        <div id="carouselExampleIndicators2" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carou">
            <div class="carousel-innerr">
              <!-- Primeiro item -->
              <div class="carousel-item active">
                <img src="./../img/site/amongu.jpg" class="d-block w-60" alt="AMONG US">
                <div class="form">
                  <div class="text">
                    <h3 class="title">AMONG US</h3>
                  </div>
                  <div class="imgs">
                    <img src="./../img/site/a.jpg" class="i " alt="">
                    <img src="./../img/site/m.jpg" class="i " alt="">
                  </div>
                  <div class="etc">
                    <img src="./../img/site/o.webp" class="i " alt="">
                    <img src="./../img/site/i.webp" class="i   " alt="">
                  </div>
                  <h6 class="title2">Já disponível</h6>
                  <p class="title3">R$ 9,99</p>
                </div>
              </div>

              <!-- Segundo item -->
              <div class="carousel-item">
                <img src="./../img/site/minee.webp" class="d-block w-60" alt="MINECRAFT">
                <div class="form">
                  <div class="text">
                    <h3 class="title">MINECRAFT JAVA </h3>
                  </div>
                  <div class="imgs">
                    <img src="./../img/site/vini.jpg" class="i" alt="">
                    <img src="./../img/site/vinis.jpg" class="i" alt="">
                  </div>
                  <div class="etc">
                    <img src="./../img/site/poli.jpg" class="i" alt="">
                    <img src="./../img/site/davi.jpg" class="i" alt="">
                  </div>
                  <h6 class="title2">Já disponível</h6>
                  <p class="title3">R$ 19,99</p>
                </div>
              </div>

              <!-- Terceiro item -->
              <div class="carousel-item">
                <img src="./../img/site/froza.jpg" class="d-block w-60" alt="SOME GAME">
                <div class="form">
                  <div class="text">
                    <h3 class="title">FORZA 5</h3>
                  </div>
                  <div class="imgs">
                    <img src="./../img/site/f.jpg" class="i" alt="">
                    <img src="./../img/site/or.jpg" class="i" alt="">
                  </div>
                  <div class="etc">
                    <img src="./../img/site/z.webp" class="i" alt="">
                    <img src="./../img/site/za.jpg" class="i" alt="">
                  </div>
                  <h6 class="title2">Já disponível</h6>
                  <p class="title3">R$ 249,99</p>
                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>



      <!-- <script>
  // Seleciona todas as imagens pequenas
  const smallImages = document.querySelectorAll('.imgs img, .etc img');
  
  // Função para trocar a imagem principal
  function changeMainImage(image) {
    // Seleciona a imagem principal ativa no carrossel
    const mainImage = document.querySelector('.carousel-item.active img.d-block');
    if (mainImage) {
      mainImage.src = image.src; // Troca a imagem principal para a miniatura
    }
  }

  // Para cada imagem pequena, adiciona os ouvintes de evento para troca da imagem principal
  smallImages.forEach(image => {
    image.addEventListener('mouseover', () => {
      changeMainImage(image); // Troca a imagem principal para a miniatura
    });

    image.addEventListener('mouseout', () => {
      // Após o mouse sair, espera 2 segundos para voltar para a imagem principal do item ativo
      setTimeout(() => {
        const activeItem = document.querySelector('.carousel-item.active img.d-block'); // Sempre pega a imagem do slide ativo
        if (activeItem) {
          const mainImage = document.querySelector('.carousel-item.active img.d-block'); // Sempre pega a imagem ativa
          mainImage.src = activeItem.src; // Retorna para a imagem original do item ativo
        }
      }, 2000); // 2000 ms = 2 segundos de delay
    });
  });
</script> -->







      <Style>
        .carousel-indicators {
          margin-bottom: 10px;
        }

        .carou {
          display: flex;
        }

        #carouselExampleIndicators {
          margin-top: 100px;

        }

        #carouselExampleIndicators2 {
          justify-content: center;
          align-items: center;
          display: flex;
          padding-top: 50px;

        }

        .carousel-item.active {
          display: flex;
          justify-content: center;
          opacity: 1;
          /* Torna a imagem ativa visível */

        }

        #carouselExampleIndicators2 .carousel-item img.d-block {
          width: 80%;
          /* Ajuste conforme necessário */
          max-height: 380px;
          /* Ajuste conforme necessário */
          object-fit: cover;
          /* Mantém a proporção */
          margin: 0 auto;
          box-shadow: 8px 0 5px rgba(0, 0, 0, 0.5);
          /* Adiciona uma sombra */
          border-radius: 10px;
          /* Cantos arredondados para combinar */
          z-index: 1;
          /* Garante que a div esteja acima de outras */

        }

        .form {
          background-color: #2A2A3350;
          /* Fundo escuro */
          height: 380px;
          width: 370px;
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          padding-top: 10px;
          padding-right: 10px;
          color: #fff;
        }

        .title {
          color: white;
          text-align: center;
          font-size: 24px;
          margin-bottom: 20px;
          margin-top: 20px;
          padding-left: 20px;
        }

        .title2 {
          color: white;
          text-align: center;
          font-size: 19px;
          margin-bottom: 20px;
          margin-top: 20px;
          padding-left: 20px;
        }

        .title3 {
          color: #ccc;
          padding-left: 20px;


        }


        .imgs,
        .etc {
          display: flex;
          justify-content: space-around;
          margin-top: 10px;
          gap: 7px;
          /* Espaçamento entre as imagens */
        }

        img.i {
          width: 150px;
          height: 80px;
          margin: 2px;
          object-fit: cover;
          filter: brightness(0.6);
          /* Escurece as imagens */
          border-radius: 5px;
          transition: filter 0.3s ease;
          /* Transição suave ao passar o mouse */
        }

        img.i:hover {
          filter: brightness(1);
          /* Volta ao normal ao passar o mouse */
        }

        .filho {
          justify-content: center;
          align-items: center;
          display: flex;
          flex-direction: column;

        }

        @media (max-width: 768px) {
          .carousel-item.active {
            display: flex;
            flex-direction: column;
            /* Muda a direção para coluna */
            align-items: center;
            /* Centraliza os itens */
          }

          .filho {

            display: block;

          }

          .carousel-item {
            transition: opacity 0.5s ease-in-out;
            /* Suaviza a transição */
            opacity: 0;
            /* Inicialmente invisível */
            width: 100%;
            /* Largura total do item em telas pequenas */
          }

          .form {
            width: 90%;
            /* Largura um pouco menor em telas menores */
          }
        }

        @media (max-width: 480px) {
          .title {
            font-size: 1rem;
            /* Ajusta o tamanho da fonte em telas pequenas */
          }

          .title2 {
            font-size: 0.9rem;
            /* Ajusta ainda mais em telas pequenas */
          }
        }
      </Style>



      <style>
        .card {
          border: none;
          border-radius: 15px;
          transition: transform 0.3s;
          overflow: hidden;
        }

        .card:hover {
          transform: translateY(-5px);
        }

        .card-body {
          height: 150px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          text-align: center;
          border-radius: 0 0 15px 15px;

        }

        .card-title {
          font-size: 1.25rem;
          color: #343a40;
          margin-bottom: 10px;
          font-weight: bold;
        }

        .card-text {
          font-size: 0.9rem;
          color: #6c757d;
        }

        .p {
          margin-top: 100px;
        }

        .card-title {
          color: white;
        }

        .card-text {
          color: white;
        }

        /* setas */
        .carousel-control-prev,
        .carousel-control-next {
          width: 50px;
          height: 50px;
          background-color: rgba(0, 0, 0, 0.7);
          /* Dark background for arrows */
          border-radius: 50%;
          top: 50%;
          transform: translateY(-50%);

        }

        .carousel-control-prev {
          left: 0px;
        }

        .carousel-control-next {
          right: 0px;

        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
          display: none;
          /* Hide default icons */

        }

        .carousel-control-prev::before,
        .carousel-control-next::before {
          content: '';
          display: inline-block;
          width: 15px;
          height: 15px;
          border-top: 2px solid #00FF88 !important;
          /* Orange color */
          border-right: 2px solid #00FF88 !important;

        }

        .carousel-control-prev::before {
          transform: rotate(-135deg);
          /* Left arrow */

        }

        .carousel-control-next::before {
          transform: rotate(45deg);
          /* Right arrow */

        }
      </style>


      <style>
        .button {
          --bezier: cubic-bezier(0.22, 0.61, 0.36, 1);
          --edge-light: hsla(0, 0%, 50%, 0.8);
          --text-light: rgba(255, 255, 255, 0.4);
          --back-color: 240, 40%;
          border: none;


          cursor: pointer;
          padding: 0.7em 1em;
          border-radius: 0.5em;
          min-height: 2.4em;
          min-width: 3em;
          display: flex;
          align-items: center;
          gap: 0.5em;

          font-size: 18px;
          letter-spacing: 0.05em;
          line-height: 1;
          font-weight: bold;

          background: linear-gradient(140deg,
              hsla(var(--back-color), 50%, 1) min(2em, 20%),
              hsla(var(--back-color), 50%, 0.6) min(8em, 100%));
          color: hsla(0, 0%, 90%);
          border: 0;
          box-shadow: inset 0.4px 1px 4px var(--edge-light);

          transition: all 0.1s var(--bezier);
        }

        .button:hover {
          --edge-light: hsla(0, 0%, 50%, 1);
          text-shadow: 0px 0px 10px var(--text-light);
          box-shadow: inset 0.4px 1px 4px var(--edge-light),
            2px 4px 8px hsla(0, 0%, 0%, 0.295);
          transform: scale(1.1);
        }

        .button:active {
          --text-light: rgba(255, 255, 255, 1);

          background: linear-gradient(140deg,
              hsla(var(--back-color), 50%, 1) min(2em, 20%),
              hsla(var(--back-color), 50%, 0.6) min(8em, 100%));
          box-shadow: inset 0.4px 1px 8px var(--edge-light),
            0px 0px 8px hsla(var(--back-color), 50%, 0.6);
          text-shadow: 0px 0px 20px var(--text-light);
          color: hsla(0, 0%, 100%, 1);
          letter-spacing: 0.1em;
          transform: scale(1);
        }

        .button.button {
          height: auto;
          padding: 15px;
          width: auto;
          height: 3px;
          font-size: 13px;
          text-decoration: none;
          /* Remove a linha de baixo */


        }


        .dois {
          display: flex;
          padding-top: 10px;
          justify-content: space-evenly;

        }
      </style>


        <div class="container">
      <!-- cards  -->
      <div class="p">
        <h3>Jogos populares</h3>
      </div>


      <!-- Swiper -->
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide card">
            <img src="./../img/site/cs.jpg" class="card" alt="">
            <h4>Counter strike 2</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>


          </div>

          <div class="swiper-slide card">
            <img src="./../img/site/beli.jpg" class="card" alt="">
            <h4>Sports FC 25</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>

          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/donk.png" class="card" alt="">
            <h4>Donk Kong Returns</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/guys.jpg" class="card" alt="">
            <h4>Fall Guys</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/messi.png" class="card" alt="">
            <h4> Efootball</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/mine.png" class="card" alt="">
            <h4>Minecraft</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/read.jpg" class="card" alt="">
            <h4>Read Dead 2</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/terra.webp" class="card" alt="">
            <h4>Terraria</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/fort.jpg" class="card" alt="">
            <h4>Fortnite</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/wukong.jpg" class="card" alt="">
            <h4> Black Myth: Wukong </h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>
                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/carro" class="card" alt="">
            <h4 classe="t"> Forza Horizon 5 </h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/gta.png" class="card" alt="">
            <h4> GTA 5</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>

        </div>
        <!-- Add Pagination -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

      <!-- Swiper -->
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide card">
            <img src="./../img/site/guys.jpg" class="card" alt="">
            <h4>Fall Guys</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>


          </div>

          <div class="swiper-slide card">
            <img src="./../img/site/terra.webp" class="card" alt="">
            <h4>Terraria</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>

          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/gta.png" class="card" alt="">
            <h4>GTA 5</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/cs.jpg" class="card" alt="">

            <h4>Counter strike 2</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/messi.png" class="card" alt="">
            <h4> Efootball</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/mine.png" class="card" alt="">
            <h4>Minecraft</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/read.jpg" class="card" alt="">
            <h4>Read Dead 2</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/beli.jpg" class="card" alt="">
            <h4> Sports FC 25</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/fort.jpg" class="card" alt="">
            <h4>Fortnite</h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/wukong.jpg" class="card" alt="">
            <h4> Black Myth: Wukong
            </h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>
                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/carro" class="card" alt="">
            <h4 classe="t"> Forza Horizon 5 </h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>


          <div class="swiper-slide card">
            <img src="./../img/site/donk.png" class="card" alt="">
            <h4> Donkey Kong
            </h4>
            <div class="dois">
              <p> Preço </p>

              <div class="opaa">
                <a href="./sobre.php" button class="button"> Sobre
                </a>

                </button>
              </div>
            </div>
          </div>
          </div>

        
        <!-- Add Pagination -->
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script>
        const swiper = new Swiper('.swiper', {
          slidesPerView: 1,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
            640: {
              slidesPerView: 2,
              slidesPerGroup: 2,
            },
            768: {
              slidesPerView: 3,
              slidesPerGroup: 3,
            },
            1024: {
              slidesPerView: 4,
              slidesPerGroup: 4,
            },
          },
        });
      </script>

      <!-- estilo do js -->

      <style>

        .swiper {
          margin-left: auto;
          margin-right: auto;
          position: relative;
          overflow: hidden;
          list-style: none;
          padding: 0;
          z-index: 1;
          display: block;
        }

        .swiper-wrapper {
          height: 400px;
          padding-bottom: 30px;
          padding-top: 40px;

        }

        .h3,
        h3 {
          font-size: calc(1.3rem + .6vw);
          text-align: center;
          letter-spacing: 2px;
        }


        .card {
          width: 80%;
          /* Reduz a largura do cartão */
          max-width: auto;
          height: 380px;
          background-color: #201B2C;
          margin: 0 auto;
          border-radius: 15px;
        }

        img.card {
          border-radius: 10px;
          width: 180px;
          height: 240px;
          object-fit: cover;

        }

        h4 {
          color: #ccc;
          text-align: center;
          padding-top: 10px;
          font-weight: 300px;
          letter-spacing: 2px;
        }

        p {
          color: #ccc;
          padding-left: 25px;
        }

        /* setas */
        .swiper-button-next,
        .swiper-button-prev {
          color: #00FF88;
          top: 50%;
          width: 35px;
          height: 35px;
          margin-top: -18px;
          z-index: 10;
          background-color: rgba(0, 0, 0, 0.5);
          border-radius: 50%;
        }

        .swiper-button-next {
          top: 25px;
        }

        .swiper-button-prev {
          top: 25px;
        }

        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
          font-size: 25px;
          font-weight: bolder;


        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
          font-size: 25px;
          font-weight: bolder;

        }

        /* Pagination */
        .swiper-pagination-bullet-active {
          background-color: #00FF88 !important;
        }

        .text-white {
          --bs-text-opacity: 1;
          color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
          text-decoration: none;
        }
      </style>





      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="./../img/site/ranha.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Spider-Man Remastered</h5>
              <p class="card-text">Desfrute de gráficos incríveis e ação imersiva enquanto vive a jornada épica do Homem-Aranha</p>
              <div class="ver">
                <a href="./sobre.php" button class="button"> Ver mais
                </a>
                </button>
              </div>
            </div>

          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./../img/site/hasha.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Street Fighter 5              </h5>
              <p class="card-text">Participe de batalhas épicas com gráficos incríveis e uma jogabilidade dinâmica no icônico jogo de luta!</p>
            </div>
            <div class="ver">
                <a href="./sobre.php" button class="button"> Ver mais
                </a>
                </button>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./../img/site/rs4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Resident Evil 4              </h5>
              <p class="card-text">Reviva o clássico de survival horror com gráficos impressionantes, ação intensa e uma história de terror arrepiante!</p>
            </div>
            <div class="ver">
                <a href="./sobre.php" button class="button"> Ver mais
                </a>
                </button>
              </div>
          </div>
        </div>
      </div>





      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="./../img/site/read2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Red Dead Redemption 2              </h5>
              <p class="card-text">Viva uma história épica no Velho Oeste com gráficos deslumbrantes, exploração imersiva e ação de tirar o fôlego!</p>
            </div>
            <div class="ver">
                <a href="./sobre.php" button class="button"> Ver mais
                </a>
                </button>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./../img/site/lego.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">LEGO Star Wars</h5>
              <p class="card-text">Viva a saga Star Wars de forma divertida e criativa com personagens LEGO, aventuras épicas e humor inconfundível!</p>
            </div>
            <div class="ver">
                <a href="./sobre.php" button class="button"> Ver mais
                </a>
                </button>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="./../img/site/dark.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Dark Souls 2              </h5>
              <p class="card-text">Enfrente desafios implacáveis em um mundo sombrio e fascinante, onde cada vitória é conquistada com coragem e estratégia!</p>
            </div>
            <div class="ver">
                <a href="./sobre.php" button class="button"> Ver mais
                </a>
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .col {
        margin-top: 10%
      }
    </style>
  </div>
  </div>

  
  <?php
  include_once('./../componentes/footerUser.php');

  ?>

  <!-- Font Awesome para os ícones (adicione isso no head) -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./../js/home.js"></script>


  
</body>
</html>