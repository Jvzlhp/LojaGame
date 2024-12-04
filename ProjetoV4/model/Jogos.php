<?php
      class jogos{
          public $idJogo, $nomeJogo, $generoJogo, $dataPublicacaoJogo, $descJogo, $criadorJogo, $imagem, $token; 

          public function getIdJogo(){
              return $this->idJogo;
          }
          public function setIdJogo($idJogo){
              $this->idJogo = $idJogo;
          }

          public function getnomeJogo(){
            return $this->nomeJogo;
          }
          public function setnomeJogo($nomeJogo){
              $this->nomeJogo= $nomeJogo;
          }

          public function getgeneroJogo(){
            return $this->generoJogo;
          }
          public function setgeneroJogo($generoJogo){
              $this->generoJogo= $generoJogo;
          }

          public function getdataPublicacaoJogo(){
            return $this->dataPublicacaoJogo;
          }
          public function setdataPublicacaoJogo($dataPublicacaoJogo){
              $this->dataPublicacaoJogo= $dataPublicacaoJogo;
          }

          public function getdescJogo(){
            return $this-> descJogo;
          }
          public function setdescJogo($descJogo){
              $this->descJogo = $descJogo;
          }
          
          public function getcriadorJogo(){
            return $this->criadorJogo;
          }
          public function setcriadorJogo($criadorJogo){
              $this->criadorJogo = $criadorJogo;
          }

          public function getImagem(){
            return $this->imagem;
          }
          public function setImagem($imagem){
              $this->imagem = $imagem;
          }

          public function getToken(){
            return $this->token;
          }
          public function setToken($token){
              $this->token = $token;
          }

          public function generateToken() {
            //random_bytes(16): Essa parte da função gera 16 bytes de dados aleatórios. O número 16 representa o número de bytes que você deseja gerar. Cada byte pode representar valores de 0 a 255, então 16 bytes fornecem uma boa quantidade de aleatoriedade.
            //bin2hex(...): Essa função converte os dados binários gerados por random_bytes em uma representação hexadecimal. O resultado será uma string composta por caracteres de 0 a 9 e de a a f, onde cada byte é representado por dois caracteres hexadecimais.
            //Saída: um exemplo pode ser '4b5f1e7e8e9a4c4d5e6f8a7b0e1c2d3f'
            return bin2hex(random_bytes(16));
          }

          public function salvarImagem($novo_nome) {
            //a foto vem com a extenção $_FILES
            if(empty($_FILES['foto']['size']) != 1){
                //pegar as extensão do arquivo
                if ($novo_nome ==""){
                    //Ciando um nome novo
                    //O hash MD5 produz uma string de 32 caracteres hexadecimais
                    $novo_nome = md5(time()). ".jpg";
                }
                //definindo o diretorio
                $diretorio = "../../img/adm/";
                //juntando o nome com o diretorio
                $nomeCompleto = $diretorio.$novo_nome;
                //efetuando o upload
                move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
                return $novo_nome;
            }else{
              return $novo_nome;
            }
          }


        }
        ?>