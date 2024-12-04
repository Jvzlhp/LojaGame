<?php
    require_once 'conexao.php';
    
    class UserDao{
        public static function insert($user){

            // Conectar ao banco de dados
            $conexao = Conexao::conectar();

            // Definir uma consulta SQL (exemplo: selecionar todos os filmes)
            $query ="INSERT INTO tb_user (nomeUser, sobrenomeUser, emailUser, telefoneUser, senhaUser, generoUser, imagemUser, tokenUser)
            VALUES(?,?,?,?,?,?,?,?)";

            // Preparar a consulta
            $stmt = $conexao->prepare($query);

            // Executar a consulta
            $stmt->bindValue(1, $user-> getnomeUser());
            $stmt->bindValue(2, $user->getsobrenomeUser());
            $stmt->bindValue(3, $user->getemailUser());
            $stmt->bindValue(4, $user->gettelefoneUser());
            $stmt->bindValue(5, $user->getPassword());
            $stmt->bindValue(6, $user->getgeneroUser());
            $stmt->bindValue(7, $user->getImagem());
            $stmt->bindValue(8, $user->getToken());

            $stmt->execute();


            //Este método busca todas as linhas resultantes da consulta SQL e as retorna como um array.
            return $stmt->fetchAll();
        }

        public static function selectAll(){

            $conexao = Conexao::conectar();
            $query = "SELECT idUser, nomeUser, emailUser, telefoneUser FROM tb_user";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        public static function deleteId($id){

            $conexao = Conexao::conectar();

            $query = "DELETE FROM tb_user WHERE idUser = ?";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(1, $id);

            $stmt->execute();

        }

        public static function alterId($id){
                 
            $conexao = Conexao::conectar();

            $query = "SELECT * FROM tb_user Where idUser = ?";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(1, $id);


            $stmt->execute();

            return $stmt->fetch();
            }

            public static function Update($user){
                 
                $conexao = Conexao::conectar();

                $query = "UPDATE tb_user SET nomeUser= ?, sobrenomeUser = ?,emailUser= ?, telefoneUser= ?,senhaUser= ?,generoUser= ?,imagemUser= ?  WHERE idUser= ? ";
                $stmt = $conexao->prepare($query);

                $stmt->bindValue(1, $user-> getnomeUser());
                $stmt->bindValue(2, $user-> getsobrenomeUser());
                $stmt->bindValue(3, $user->getemailUser());
                $stmt->bindValue(4, $user->gettelefoneUser());
                $stmt->bindValue(5, $user->getPassword());
                $stmt->bindValue(6, $user-> getgeneroUser());
                $stmt->bindValue(7, $user->getImagem());
                $stmt->bindValue(8, $user->getIdUser());


                $stmt->execute();
                  

                }


    }