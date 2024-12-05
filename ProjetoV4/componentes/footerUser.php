<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="content">
    <!-- O conteúdo principal da página -->
  </div>
  
  <footer class="bg-body-color text-white text-center py-4">
    <div class="container">
      <p class="mb-0">© 2024 Eclypse. Todos os direitos reservados.</p>
      <div class="social-icons mt-3">
        <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
      </div>
    </div>
  </footer>

  <style>
    /* Adiciona Flexbox para garantir que o footer esteja no final */
    html, body {
      height: 100%;  /* A altura do HTML e body deve ser 100% */
      margin: 0;     /* Remove qualquer margin padrão */
    }

    .content {
      padding-bottom: 100px; /* Dá espaço para o footer no final */
    }

/* Estilos do footer */
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 20px 0;
  width: 100%;
  position: relative;
  bottom: 0;
  box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.3);
  font-size: 0.9rem;
}

footer a {
  color: #2575fc;
  text-decoration: none;
  transition: color 0.3s ease;
}

footer a:hover {
  color: #fff;
}
    
  </style>
</body>
</html>
