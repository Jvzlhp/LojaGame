<?php

require_once '../../dao/UserDao.php';
require_once '../../model/user.php';

switch ($_POST['acao']){
    case'INSERIR':

$user = new user();

$user->setIdUser($_POST['idUser']);
$user->setnomeUser($_POST['nomeUser']);
$user->setsobrenomeUser($_POST['sobrenomeUser']);
$user->setemailUser($_POST['emailUser']);
$user->settelefoneUser($_POST['telefoneUser']);
$user->setgeneroUser($_POST['generoUser']);
$user->setPassword ($_POST['password']);
$user->setImagem ($user->salvarImagem(""));
$user->setToken($user->generateToken());


try{
    $UserDao = UserDao::insert($user);
    header('Location: index.php');
} catch (Exception $e) {
    //header('Location: register.php');   
    echo $e;
}
break;

case 'ALTERAR':
    try{
        $UserDao = UserDao::AlterId($_POST['id']);
        include('registerUser.php');
     } catch (Exception $e){
        echo 'Exceção Capturada: ', $e->getMessage(), "/n";
     }
        break;
    break;


    case'EXCLUIR':
        try{
            $UserDao = UserDao::deleteId($_POST["id"]);
            header('Location: index.php');
        } catch (Exception $e) {
            var_dump($e->getMessage());
            //header('Location: register.php');   
            // echo "Erro";
        }
            break;
   

case 'ATUALIZAR':
    $user = new User();

    $user->setIdUser($_POST['idUser']);
    $user->setnomeUser($_POST['nomeUser']);
    $user->setsobrenomeUser($_POST['sobrenomeUser']);
    $user->setemailUser($_POST['emailUser']);
    $user->settelefoneUser($_POST['telefoneUser']);
    $user->setgeneroUser($_POST['generoUser']);
    $user->setPassword ($_POST['password']);
    $user->setImagem ($user->salvarImagem($_POST['nomeFoto']));
    
    

            try{
                $UserDao = UserDao::Update($user);
                header('Location: index.php');
            } catch (Exception $e) {
                //var_dump($e->getMessage());
                //header('Location: register.php');   
                 echo $e;
            }
    break;

}
    

?>