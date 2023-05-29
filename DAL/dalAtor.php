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
               $ator->setNome($linha['nome_artistico']);
               $ator->setAniversario($linha['nome_real']); 
               $ator->setSalario($linha['nascimento']);
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

            $cliente = new \MODEL\Cliente(); 
            $cliente->setId($linha['id']);
            $cliente->setNomeArtistico($linha['nome_artistico']); 
            $cliente->setNomeReal($linha['nome_real']); 
            $cliente->setNascimento($linha['nascimento']); 

            return $ator; 

        }

        public function Insert(\MODEL\Ator $ator){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO cliente (nome_artistico, nome_real, nascimento) 
                   VALUES  ('{$cliente->getNomeArtistico()}', '{$cliente->getNomeReal()}',
                            '{$cliente->getNascimento()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Ator $ator){
            $sql = "UPDATE ator SET nome_artistico=?, nome_real=?, nascimento=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cliente->getNomeArtistico(), $cliente->getNomeReal(), 
                                            $cliente->getNascimento(), $cliente->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function DElete(int $id){
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