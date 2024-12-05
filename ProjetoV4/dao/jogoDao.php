<?php
    require_once 'conexao.php';
    
    class JogoDao{
        public static function insert($jogos){

            // Conectar ao banco de dados
            $conexao = Conexao::conectar();

            // Definir uma consulta SQL (exemplo: selecionar todos os filmes)
            $query ="INSERT INTO tb_jogo (nomeJogo, generoJogo, dataPublicacaoJogo, descJogo, criadorJogo, imagemJogo, tokenJogo)
            VALUES(?,?,?,?,?,?,?)";

            // Preparar a consulta
            $stmt = $conexao->prepare($query);

            // Executar a consulta
            $stmt->bindValue(1, $jogos-> getnomeJogo());
            $stmt->bindValue(2, $jogos->getgeneroJogo());
            $stmt->bindValue(3, $jogos->getdataPublicacaoJogo());
            $stmt->bindValue(4, $jogos->getdescJogo());
            $stmt->bindValue(5, $jogos->getcriadorJogo());
            $stmt->bindValue(6, $jogos->getImagem());
            $stmt->bindValue(7, $jogos->getToken());

            if($stmt->execute()){
                return $stmt->rowCount();
            }else{
                var_dump($stmt->errorInfo());
            }
        }

         
        public static function selectAll(){

            $conexao = Conexao::conectar();
            $query = "SELECT idJogo, nomeJogo, generoJogo, criadorJogo FROM tb_jogo";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();

        }

        
        public static function deleteId($idJogo){

            $conexao = Conexao::conectar();

            $query = "DELETE FROM tb_jogo WHERE idJogo = ?";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(1, $idJogo);

            $stmt->execute();

        }

        
        public static function alterId($id){
                 
            $conexao = Conexao::conectar();

            $query = "SELECT * FROM tb_jogo Where idJogo = ?";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(1, $id);


            $stmt->execute();

            return $stmt->fetch();

                
            

            }
            
            public static function Update($jogo){
                 
                $conexao = Conexao::conectar();

                $query = "UPDATE tb_jogo SET nomeJogo= ?, generoJogo = ?,dataPublicacaoJogo= ?, descJogo = ?, criadorJogo= ?, imagemJogo = ?  WHERE idJogo= ? ";
                $stmt = $conexao->prepare($query);

                $stmt->bindValue(1, $jogo->getnomeJogo());
                $stmt->bindValue(2, $jogo->getgeneroJogo());
                $stmt->bindValue(3, $jogo->getdataPublicacaoJogo());
                $stmt->bindValue(4, $jogo->getdescJogo());
                $stmt->bindValue(5, $jogo->getcriadorJogo());
                $stmt->bindValue(6, $jogo->getImagem());
                $stmt->bindValue(7, $jogo->getIdJogo());


                $stmt->execute();

    }
}