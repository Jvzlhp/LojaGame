
  // Cria uma nova instância do Swiper
const swiper = new Swiper('.swiper', {
// Define quantos slides serão exibidos ao mesmo tempo
slidesPerView: 4,

// Define o espaço (em pixels) entre os slides
spaceBetween: 30,

// Define quantos slides avançar ao clicar nas setas de navegação
slidesPerGroup: 4,

// Permite que o Swiper gire indefinidamente, sem um fim
loop: true,

// Configuração da paginação
pagination: {
  // Seleciona o elemento onde a paginação será renderizada
  el: '.swiper-pagination',
  
  // Permite que a paginação seja clicável
  clickable: true,
},

// Configuração da navegação
navigation: {
  // Seleciona o botão que avança para o próximo slide
  nextEl: '.swiper-button-next',
  
  // Seleciona o botão que volta para o slide anterior
  prevEl: '.swiper-button-prev',
},
});

