<?php 
if(isset($_POST['submit'])){
    include_once('config.php');
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $senha = $_POST['senha'];
  $genero = $_POST['gender'];

   $result = mysqli_query($conexao, "INSERT INTO tb_user(nomeUser,sobrenomeUser,emailUser,telefoneUser,senhaUser,generoUser) 
   VALUES('$nome','$sobrenome','$email','$tel','$senha','$genero')");
}

?>
<?php 
include_once('./../componentes/navbar.php');
?> 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=".././css/cadastro.css">
    <title>Cadastro</title>
</head>


<body>
<?php
include_once('./../componentes/navbar.php')
?>

    <div class="container">
        <div class="form-image">
            <img src="./../img/site/games.svg" alt="">
        </div>
        <div class="form">
            <form id="Formulario" action="./../areaUser/cadastro.php" method="POST" >
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input id="firstname" type="text" name="nome" placeholder="Nome :" class="inputs required" oninput="nameValidate()">
                        <span class="span-required">Nome deve ter no minimo 3 caracteres</span>
                    </div>

                    <div class="input-box">
                        <input  id="lastname" type="text" name="sobrenome" placeholder="Sobrenome :">
                    </div>
                    <div class="input-box">
                        <input class="inputs required" id="email" type="email" name="email" placeholder="E-mail :" oninput="emailValidate()" >
                        <span class="span-required">Digite um email Valido</span>
                    </div>

                    <div class="input-box">
                        <input id="number" type="tel" name="tel" placeholder="Telefone :">
                    </div>

                    <div class="input-box">
                        <input class="inputs required" id="password" type="password" name="senha" placeholder="Senha :" oninput="mainPasswordValidate()" >
                        <span class="span-required">A Senha deve ter no minimo 8 caracteres</span>
                    </div>


                    <div class="input-box">
                        <input class="inputs required" id="senha" type="password" name="ConfirmSenha" placeholder="Confirme a Senha :" oninput="comparePassword()">
                        <span class="span-required">As senhas não são Compativeis</span>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero:</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender" value="Feminino">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>


                        <div class="gender-input">
                            <input id="none" type="radio" name="gender" value="Prefiro não dizer">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button type="submit" name="submit" value="enviar">Continuar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
   const formula = document.getElementById('Formulario')
   const campos = document.querySelectorAll('.required') 
   const spans = document.querySelectorAll('.span-required')
   const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/

   formula.addEventListener('submit', (event) => {
    nameValidate();
    emailValidate();
    mainPasswordValidate();
    comparePassword();

    const hasError = [...spans].some(span => span.style.display === 'block');

    if (hasError) {
        event.preventDefault(); // Só previne o envio se houver erros
    }
});

   function setError(index){
     campos[index].style.borderBottom = "2px solid red"
     spans[index].style.display= "block"
     spans[index].style.fontSize = "12px"
     spans[index].style.color = "red"
     spans[index].style.margin = "3px 0 0 1px"
   }
   function removeError(index){
    campos[index].style.borderBottom = ""
     spans[index].style.display= "none"
   }

   function nameValidate(){
    if(campos[0].value.length < 3){
        setError(0);
    }else{
       removeError(0)
    }
}
    function emailValidate(){
        if(!emailRegex.test(campos[1].value)){
           setError(1)
        }else{
           removeError(1)
        }
    }
  
    function mainPasswordValidate(){
        if(campos[2].value.length < 8){
            setError(2)
        }else{
            removeError(2)
            comparePassword();
        }
    }
    function comparePassword(){
        if(campos[2].value == campos[3].value && campos[3].value.length >=8){
            removeError(3)
        }else{
            setError(3)
        }
    }


    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>