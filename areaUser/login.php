<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=".././css/login.css">
    <title>Login</title>
</head>
<body>

<?php 
include_once('./../componentes/navbar.php');

?>


    <div class="main-login">
        <div class="left-login">
            <img src="./../img/site/video.svg" class="left-image" alt="imggame">
        </div>
        <div class="right-login">
            <div class="card-login">
            <h1>Login!</h1>
                <form action="testeLogin.php" method="Post">
                    <div class="textfield">
                        <input type="email" name="usuario" placeholder="Email:">
                    </div>
                    <div class="textfield">
                        <input type="password" name="pass" placeholder="Senha:">
                    </div>
                    <input type="submit" class="btn-login" value="enviar" name="submit">
                </form>
                <p>Não tem uma conta ainda? <br><a href="cadastro.php">Criar uma conta!</a></p>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>