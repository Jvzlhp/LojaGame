<?php
    require_once 'conexao.php';
    require_once '../../model/Adm.php';
    
    class AdmDao{
        public static function insert($adm){

            // Conectar ao banco de dados
            $conexao = Conexao::conectar();

            // Definir uma consulta SQL (exemplo: selecionar todos os filmes)
            $query ="INSERT INTO tbadm (cpfAdm, rgAdm, nascAdm, celularAdm, nomeAdm, emailAdm, passwordAdm, imagemAdm, tokenAdm)
            VALUES(?,?,?,?,?,?,?,?,?)";

            // Preparar a consulta
            $stmt = $conexao->prepare($query);

            // Executar a consulta
            $stmt->bindValue(1, $adm->getCpf());
            $stmt->bindValue(2, $adm->getRg());
            $stmt->bindValue(3, $adm->getNasc());
            $stmt->bindValue(4, $adm->getCelular());
            $stmt->bindValue(5, $adm->getNome());
            $stmt->bindValue(6, $adm->getEmail());
            $stmt->bindValue(7, $adm->getPassword());
            $stmt->bindValue(8, $adm->getImagem());
            $stmt->bindValue(9, $adm->getToken());

            if($stmt->execute()){
                return $stmt->rowCount();
            }else{
                var_dump($stmt->errorInfo());
            }

        }
            public static function selectAll(){

                $conexao = Conexao::conectar();
                $query = "SELECT idAdm, nomeAdm, emailAdm, celularAdm FROM tbadm";
                $stmt = $conexao->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll();

            }

                public static function deleteId($id){

                    $conexao = Conexao::conectar();

                    $query = "DELETE FROM tbadm WHERE idAdm = ?";

                    $stmt = $conexao->prepare($query);

                    $stmt->bindValue(1, $id);

                    $stmt->execute();

                }

                public static function alterId($id){
                 
                $conexao = Conexao::conectar();

                $query = "SELECT * FROM tbadm Where idAdm = ?";

                $stmt = $conexao->prepare($query);

                $stmt->bindValue(1, $id);


                $stmt->execute();

                return $stmt->fetch();

                    
                

                }


                public static function Update($adm){
                 
                    $conexao = Conexao::conectar();
    
                    $query = "UPDATE tbadm SET cpfAdm= ?, rgAdm = ?,nascAdm= ? ,celularAdm= ?,nomeAdm= ?,emailAdm= ?,passwordAdm= ?, imagemAdm= ?  WHERE idAdm= ? ";
                    $stmt = $conexao->prepare($query);
    
                    $stmt->bindValue(1, $adm->getCpf());
                    $stmt->bindValue(2, $adm->getRg());
                    $stmt->bindValue(3, $adm->getNasc());
                    $stmt->bindValue(4, $adm->getCelular());
                    $stmt->bindValue(5, $adm->getNome());
                    $stmt->bindValue(6, $adm->getEmail());
                    $stmt->bindValue(7, $adm->getPassword());
                    $stmt->bindValue(8, $adm->getImagem());
                    $stmt->bindValue(9, $adm->getId());

    
                    $stmt->execute();
                      
    
                    }
    
           


            
        }
    
    