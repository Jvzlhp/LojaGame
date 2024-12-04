<?php 
require_once '../../dao/UserDao.php';

if(empty($_POST)){
  $acao = "INSERIR";
   $id = "";
   $nome = "";
   $sobrenome = "";
   $email= "";
   $telefone = "";
   $genero = "";
   $senha = "";
    $imagem = "";
 }else{
  $acao = "ATUALIZAR";
  $id = $UserDao['idUser'];
  $nome = $UserDao['nomeUser'];
  $sobrenome = $UserDao['sobrenomeUser'];
  $email = $UserDao['emailUser'];
  $telefone = $UserDao['telefoneUser'];
  $genero = $UserDao['generoUser'];
  $senha = $UserDao['senhaUser'];
  $imagem = $UserDao['imagemUser'];
 
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - User</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/headerAdm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menuAdm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="controllerUser.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DOS USERS</strong>
              <input type="text" name="idUser" id="idUser" placeholder="id" value="<?= $id ?>">
              <input type="text" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?= $imagem ?>">
              <input type="text" value="<?= $acao ?>" name="acao" placeholder="Ação"  >
            </div>
            <div class="card-body row" style="align-items: center; justify-content: center; height: 120%">
              <div class="col-md-2 " style="  height: 120%" >
                <img id="preview" src="../../img/adm/<?=$imagem !="" ? $imagem: 'padrao.png'; ?>" alt="..." class="rounded w-100 mb-3 border"  style="height:200px; object-fit: cover; " >
                <div class=" d-flex justify-content-center mt-3">
                  <label for="foto" class="btn btn-light mb-2"> Carregar Imagem</label>
                  <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" style="display: none">
                </div>
              </div>
              <div class="col-md-10" >
                <div class="row">
                    <div class="col-md-5 mb-1">
                      <label for="nomeUser" class="col-form-label">Nome:</label>
                      <input type="text" class="form-control" name="nomeUser"  id="nomeUser" value="<?= $nome?>" required>
                      <div class="invalid-feedback">
                        Nome Inválido
                      </div>
                    </div>
                    <div class="col-md-6 mb-1">
                      <label for="sobrenomeUser" class="col-form-label">Sobrenome:</label>
                      <input type="text" class="form-control" name="sobrenomeUser" maxlength="50" id="sobrenomeUser" value="<?= $sobrenome?>" required>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-1">
                    <label for="emailUser" class="col-form-label">E-mail:</label>
                    <input type="email" class="form-control" name="emailUser" maxlength="50" id="emailUser"   value="<?= $email?>" required>
                    <div class="invalid-feedback">
                      E-mail Inválido
                    </div>
                  </div>
                  <div class="col-md-5 mb-1">
                    <label for="telefoneUser" class="col-form-label">Telefone:</label>
                    <input type="text" class="form-control" name="telefoneUser" maxlength="50" id="telefoneUser" data-mask="(00) 00000-0000" value="<?= $telefone?>" required>
                    <div class="invalid-feedback">
                      Telefone Inválido
                    </div>
                  </div>
                </div>
                <div class="row pb-3">
                  <div class="col-md-5 mb-1">
                    <label for="generoUser" class="col-form-label">Genêro:</label>
                    <input type="text" class="form-control" name="generoUser" maxlength="10" id="generoUser"  value="<?= $genero?>" required>
                    <div class="invalid-feedback">
                      Genêro Inválido
                    </div>
                  </div>
                  <div class="col-md-5 mb-1">
                    <label for="password" class="col-form-label">Senha:</label>
                    <input type="text" class="form-control" name="password" maxlength="10" id="password"  value="<?= $senha?>" required>
                    <div class="invalid-feedback">
                      Senha Inválida
                    </div>
                  </div>

                </div>
              <div class=" col text-end ">
                  <a class="btn btn-outline-danger ms-3" role="button" aria-disabled="true" href="./index.php">Voltar</i></a>
                  <button type="submit" class="btn btn-success ms-3">Salvar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
    <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/atualizarFoto.js"></script>
  <script type="text/javascript" src="./../../js/validarForm.js"></script>  
  <script type="text/javascript" src="./../../js/modal.js"></script>

</body>

</html>