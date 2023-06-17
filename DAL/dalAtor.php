<?php
    namespace DAL;

use MODEL\Ator;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\ator.php';
    
    
    class dalAtor {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from ator;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          //return $result;
       
         
          foreach($result as $linha){
               $ator = new \MODEL\Ator();

               $ator->setId($linha['id']); 
               $ator->setNomeArtistico($linha['nome_artistico']);
               $ator->setNomeReal($linha['nome_real']); 
               $ator->setNascimento($linha['nascimento']);
               $lstAtor[]= $ator; 
  
          }
          

          return $lstAtor; 
             
        }


        public function SelectID(int $id){
            $sql = "select * from ator where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $ator = new \MODEL\Ator(); 
            $ator->setId($linha['id']);
            $ator->setNomeArtistico($linha['nome_artistico']); 
            $ator->setNomeReal($linha['nome_real']); 
            $ator->setNascimento($linha['nascimento']); 

            return $ator; 

        }

        public function Insert(\MODEL\Ator $ator){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO ator (nome_artistico, nome_real, nascimento) 
                   VALUES  ('{$ator->getNomeArtistico()}', '{$ator->getNomeReal()}',
                            '{$ator->getNascimento()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Ator $ator){
            $sql = "UPDATE ator SET nome_artistico=?, nome_real=?, nascimento=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($ator->getNomeArtistico(), $ator->getNomeReal(), 
                                            $ator->getNascimento(), $ator->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function Delete(int $id){
            $sql = "DELETE from ator WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 