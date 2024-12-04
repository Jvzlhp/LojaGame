<?php 
session_start();
if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['pass'])){

    include_once('config.php');
    
    $user = $_POST['usuario'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM tb_user WHERE emailUser = '$user' and senhaUser = '$password'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        header("Location: login.php");
    }else{
        $_SESSION['email'] = $user;
        $_SESSION['senha'] = $password;
         header("Location: home.php");
    }

}else{
    header('Location: login.php');
}

?>