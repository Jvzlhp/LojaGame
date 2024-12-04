<?php
require_once '../../dao/jogoDao.php';
require_once '../../model/Jogos.php';

switch($_POST['acao']){

case 'INSERIR':
    
    $jogo = new Jogos();

    $jogo->setIdJogo($_POST['idJogo']);
    $jogo->setnomeJogo($_POST['nomeJogo']);
    $jogo->setgeneroJogo($_POST['generoJogo']);
    $jogo->setdataPublicacaoJogo($_POST['dataPublicacaoJogo']);
    $jogo-> setdescJogo($_POST['descJogo']);
    $jogo->setcriadorJogo($_POST['criadorJogo']);
    $jogo->setImagem ($jogo->salvarImagem(""));
    $jogo->setToken($jogo->generateToken());

    try{
        $jogoDao = jogoDao::insert($jogo);
        header('Location: index.php');
    } catch (Exception $e) {
        //header('Location: register.php');   
                var_dump($e->getMessage());
    }

break;

case'ALTERAR': 
    try{
        $jogoDao = jogoDao::AlterId($_POST['id']);
        include('registerJogo.php');
     } catch (Exception $e){
        echo 'Exceção Capturada: ', $e->getMessage(), "/n";
     }
break;

case'EXCLUIR':
    try{
        $jogoDao = jogoDao::deleteId($_POST['id']);
        header('Location: index.php');
    } catch (Exception $e) {
        var_dump($e->getMessage());
        //header('Location: register.php');   
        // echo "Erro";
    }
break;

case'ATUALIZAR':
    $jogo = new Jogos();

    $jogo->setIdJogo($_POST['idJogo']);
    $jogo->setnomeJogo($_POST['nomeJogo']);
    $jogo->setgeneroJogo($_POST['generoJogo']);
    $jogo->setdataPublicacaoJogo($_POST['dataPublicacaoJogo']);
    $jogo-> setdescJogo($_POST['descJogo']);
    $jogo->setcriadorJogo($_POST['criadorJogo']);
    $jogo->setImagem ($jogo->salvarImagem($_POST['nomeFoto']));
    $jogo->setToken($jogo->generateToken());

    try{
        $jogoDao = jogoDao::insert($jogo);
        header('Location: index.php');
    } catch (Exception $e) {
        //header('Location: register.php');   
                var_dump($e->getMessage());
    }

break;






}
    

?>