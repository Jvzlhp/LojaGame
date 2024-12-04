<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos Populares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/css/games.css">

    </head>
<body>

<?php 
include_once('./../componentes/navbar.php');

?>

<div class="pai">
    <div class="p">
        <h3>Jogos populares</h3>
    </div>

<!-- cards  -->

   

    <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide card">
        <img src="./../img/site/cs.jpg" class="card"alt="">
        <h4>Counter strike 2</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>


      </div>

      <div class="swiper-slide card">
        <img src="./../img/site/beli.jpg" class="card"alt="">
        <h4>Sports FC 25</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
  </div>      

      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/donk.png" class="card"alt="">
        <h4>Donk Kong Returns</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/guys.jpg" class="card"alt="">
        <h4>Fall Guys</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/messi.png"class="card" alt="">
        <h4> Efootball</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/mine.png"class="card" alt="">
        <h4>Minecraft</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/read.jpg"class="card" alt="">
        <h4>Read Dead 2</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/terra.webp"class="card" alt="">
        <h4>Terraria</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/fort.jpg"class="card"alt="">
        <h4>title</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

     
      <div class="swiper-slide card">
        <img src="./../img/site/wukong.jpg"class="card" alt="">
        <h4> title</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
  </button>
  </div>
</div>      </div>      

     
<div class="swiper-slide card">
  <img src="./../img/site/carro" class="card" alt="">
    <h4 classe="t"> title</h4>
    <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      
</div>      
      
     
      <div class="swiper-slide card">
        <img src="./../img/site/gta.png" class="card" alt="">
        <h4> title</h4>
        <div class="dois">
        <p> Preço </p>
        
<div class="opaa">
<a href="./sobre.php"button class="button" >    Sobre
</a> 
      
  </button>
  </div>
</div>      </div>      

    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>  
<script type="text/javascript" src="./js/games.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 40,
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

<!-- style cards -->
<style>
    
    /* Media Queries para responsividade */
@media (max-width: 768px) {
    .card {
        max-width: 100%; /* Aumenta a largura do cartão em telas menores */
    }
}

@media (max-width: 480px) {
    h3 {
        margin-top:30%;
        font-size: 20px; /* Ajusta o tamanho da fonte para cabeçalhos menores */
        text-align:center;
        letter-spacing: 2px;
    }



    .button {
        font-size: 16px; /* Ajusta o tamanho da fonte do botão */
    }
}



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

  background: linear-gradient(
    140deg,
    hsla(var(--back-color), 50%, 1) min(2em, 20%),
    hsla(var(--back-color), 50%, 0.6) min(8em, 100%)
  );
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

  background: linear-gradient(
    140deg,
    hsla(var(--back-color), 50%, 1) min(2em, 20%),
    hsla(var(--back-color), 50%, 0.6) min(8em, 100%)
  );
  box-shadow: inset 0.4px 1px 8px var(--edge-light),
    0px 0px 8px hsla(var(--back-color), 50%, 0.6);
  text-shadow: 0px 0px 20px var(--text-light);
  color: hsla(0, 0%, 100%, 1);
  letter-spacing: 0.1em;
  transform: scale(1);
}

.button.button{
  height: auto;
  padding:15px;
  width: auto;
  height: 3px;
  font-size:13px;
  text-decoration: none; /* Remove a linha de baixo */



}

.opaa{

}
.dois{
  display:flex;
  padding-top:10px;
  justify-content: space-evenly;

}


body {
  background: #201b2c;
    font-family: Arial, sans-serif;
    color: white;
}

.pai {
    margin-top: 7%;
    padding: 5%;
    display: block;
    align-items: center;
}

.swiper-wrapper{
height: 400px;
padding-bottom:70px
}  
.card {
    width: 80%;  /* Reduz a largura do cartão */
    height: 380px;
    background-color: #201B2C;
    margin: 0 auto;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
}

      img.card{
      border-radius: 20px;
      width:  230px;
      height: 260px;
      object-fit: cover; 

    }

h4{
  color:#ccc;
  text-align:center;
  padding-top:10px;
  font-weight:300px;
  letter-spacing: 2px;
  font-size:20px
}
p{
  color:#ccc;
  padding-left:25px;
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
    top:25px ; 
}

.swiper-button-prev {
    top: 25px ; 
}

.swiper-button-prev:after, .swiper-rtl .swiper-button-next:after{
  font-size:25px;
  font-weight: bolder;

  
} 
.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after{
  font-size:25px;
  font-weight: bolder;

}

/* Pagination */
.swiper-pagination-bullet-active {
    background-color: #00FF88 !important;
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
