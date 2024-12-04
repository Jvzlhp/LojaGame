<?php 

require_once '../../dao/AdmDao.php';
 if(empty($_POST)){
 $acao = "INSERIR";
  $id = "";
  $cpf = "";
  $rg = "";
 $nasc = "";
  $celular = "";
  $nome = "";
  $email = "";
  $password = "";
   $imagem = "";
}else{
 $acao = "ATUALIZAR";
 $id = $admDao['idAdm'];
 $cpf = $admDao['cpfAdm'];
  $rg = $admDao['rgAdm'];
  $nasc = $admDao['nascAdm'];
   $celular = $admDao['celularAdm'];
   $nome = $admDao['nomeAdm'];
   $email = $admDao['emailAdm'];
   $password = $admDao['passwordAdm'];
   $imagem = $admDao['imagemAdm'];

 }
//  echo "<pre>";
//  echo print_r($admDao);
//  echo "<pre>";
// ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
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
          <form method="post" action="controller.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO ADM</strong>
              <input type="text" name="id" id="id" placeholder="id" value="<?= $id ?>">
              <input type="text" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?= $imagem ?>">
              <input type="text" value="<?= $acao ?>" placeholder="Ação" name="acao"  >
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
                    <div class="col-md-3 mb-1">
                      <label for="cpf" class="col-form-label">CPF:</label>
                      <input type="text" class="form-control" name="cpf"  id="cpf" data-mask="000.000.000-00" data-mask-selectonfocus="true" value="<?= $cpf?>" required>
                      <div class="invalid-feedback">
                        CPF Inválido
                      </div>
                    </div>
                    <div class="col-md-9 mb-1">
                      <label for="nome" class="col-form-label">Nome:</label>
                      <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value="<?= $nome?>" required>
                      <div class="invalid-feedback">
                        Nome Inválido
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-4 mb-1">
                    <label for="cpf" class="col-form-label">Rg:</label>
                    <input type="text" class="form-control" name="rg"  id="rg" data-mask="00.000.000" data-mask-selectonfocus="true" value="<?= $rg?>" required>
                    <div class="invalid-feedback">
                      RG Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-1">
                    <label for="nome" class="col-form-label">Data de Nasc.:</label>
                    <input type="date" class="form-control" name="nasc"  id="nasc" value="<?= $nasc?>" required>
                    <div class="invalid-feedback">
                      Data de Nasc. Inválida
                    </div>
                  </div>
                  <div class="col-md-4 mb-1">
                    <label for="nome" class="col-form-label">Celular:</label>
                    <input type="text" class="form-control" name="celular" maxlength="50" id="celular" data-mask="(00) 00000-0000" value="<?= $celular?>" required>
                    <div class="invalid-feedback">
                      Celular Inválido
                    </div>
                  </div>
                </div>
                <div class="row pb-3">
                  <div class="col-md-9 mb-1">
                    <label for="cpf" class="col-form-label">E-mail:</label>
                    <input type="email" class="form-control" name="email" maxlength="50" id="email"   value="<?= $email?>" required>
                    <div class="invalid-feedback">
                      E-mail Inválido
                    </div>
                  </div>
                  <div class="col-md-3 mb-1">
                    <label for="cpf" class="col-form-label">Senha:</label>
                    <input type="text" class="form-control" name="password" maxlength="10" id="password"  value="<?= $password?>" required>
                    <div class="invalid-feedback">
                      Password Inválido
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