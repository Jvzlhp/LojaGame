<?php
  require_once '../../dao/UserDao.php';
  $users = UserDao::selectAll(); 
?>
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
        <div class="row align-items-center mb-4">
          <div class="col fs-3 fw-semibold">
            Lista de User
          </div>
          <div class="col text-end ">
            <a class="btn btn-success px-3" role="button" aria-disabled="true" href="registerUser.php"><i
                class="fas fa-plus" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class=" row">
          <table class="table table-hover">
            <thead>
            <tr>
              <th class="col-md-1">ID</th>
                <th class="col-md-4">Nome</th>
                <th class="col-md-3">email</th>
                <th class="col-md-2">celular</th>
                <th class="text-center col-md-1">Alterar</th>
                <th class="text-center col-md-1">Excluir</th>
              </tr>
              <?php foreach($users as $user) { ?>
                <tr>
                  <td><?=$user[0]?></td>
                  <td><?=$user[1]?></td>
                  <td><?=$user[2]?></td>
                  <td><?=$user[3]?></td>
                  <td class="text-center">
                  <form action="controllerUser.php" method="POST">
                    <input type="hidden" class="form-control" id="acao" name="acao" value="ALTERAR">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?=$user[0]?>">
                    <button type="submit" class="dropdown-item">
                    <i class="fas fa-edit fa-lg text-secondary"></i>
                    </button>  
                    </form>
                  </td>
                  <td class="text-center ">
                    <form action="controllerUser.php" method="POST">
                    <input type="hidden" class="form-control" id="acao" name="acao" value="EXCLUIR">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?=$user[0]?>">
                    <button type="submit" class="dropdown-item">
                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                    </button>  
                    </form>
                  </td>
                <tr>
                  <?php } ?>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>


</body>

</html>