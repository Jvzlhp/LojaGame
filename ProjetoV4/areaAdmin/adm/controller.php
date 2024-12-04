<?php

require_once '../../dao/AdmDao.php';
require_once '../../model/Adm.php';

switch ($_POST['acao']){
    case'INSERIR':


        $adm = new Adm();

        $adm->setId($_POST['id']);
        $adm->setCpf($_POST['cpf']);
        $adm->setRg($_POST['rg']);
        $adm->setNasc ($_POST['nasc']);
        $adm->setCelular ($_POST['celular']);
        $adm->setNome ($_POST['nome']);
        $adm->setEmail ($_POST['email']);
        $adm->setPassword ($_POST['password']);
        $adm->setImagem ($adm->salvarImagem(""));
        $adm->setToken($adm->generateToken());


try{
    $admDao = admDao::insert($adm);
    header('Location: index.php');
} catch (Exception $e) {
    //header('Location: register.php');   
            var_dump($e->getMessage());
}
        break;

            
    case'ALTERAR':          
     try{
        $admDao = AdmDao::AlterId($_POST['id']);
        include('register.php');
     } catch (Exception $e){
        echo 'Exceção Capturada: ', $e->getMessage(), "/n";
     }
        break;
        
    case'EXCLUIR':
        try{
            $admDao = admDao::deleteId($_POST["id"]);
            header('Location: index.php');
        } catch (Exception $e) {
            var_dump($e->getMessage());
            //header('Location: register.php');   
            // echo "Erro";
        }
            break;


    case 'ATUALIZAR':
    
        $adm = new Adm();

        $adm->setId($_POST['id']);
        $adm->setCpf($_POST['cpf']);
        $adm->setRg($_POST['rg']);
        $adm->setNasc ($_POST['nasc']);
        $adm->setCelular ($_POST['celular']);
        $adm->setNome ($_POST['nome']);
        $adm->setEmail ($_POST['email']);
        $adm->setPassword ($_POST['password']);
        $adm->setImagem ($adm->salvarImagem($_POST['nomeFoto']));

                try{
                    $admDao = admDao::Update($adm);
                    header('Location: index.php');
                } catch (Exception $e) {
                    //var_dump($e->getMessage());
                    //header('Location: register.php');   
                     echo $e;
                }

                break;

    





// echo "<pre>";
// print_r($adm);
// echo "<pre>";
    
    }
?>