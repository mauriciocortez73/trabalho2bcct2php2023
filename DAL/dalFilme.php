<?php
    namespace DAL;

use MODEL\Filme;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\filme.php';
    
    
    class dalFilme {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from filme;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          //return $result;
       
         
          foreach($result as $linha){
               $filme = new \MODEL\Filme();

               $filme->setId($linha['id']); 
               $filme->setTitulo($linha['titulo']);
               $filme->setAno($linha['ano']); 
               $filme->setValor($linha['valor']);
               $filme->setCategoria($linha['categoria']);
               $filme->setAtor($linha['ator']);
               $lstFilme[]= $filme; 

          }
          

          return $lstFilme; 
             
        }


        public function SelectID(int $id){
            $sql = "select * from filme where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $filme = new \MODEL\Filme(); 
            $filme->setId($linha['id']); 
            $filme->setTitulo($linha['titulo']);
            $filme->setAno($linha['ano']); 
            $filme->setValor($linha['valor']);
            $filme->setCategoria($linha['categoria']);
            $filme->setAtor($linha['ator']);

            return $filme; 

        }

        public function Insert(\MODEL\Filme $filme){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO filme (titulo, ano, valor, categoria, ator) 
                   VALUES  ('{$filme->getTitulo()}', '{$filme->getAno()}',
                            '{$filme->getValor()}'), '{$filme->getCategoria()}', '{$filme->getAtor()}';";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Filme $filme){
            $sql = "UPDATE filme SET titulo=?, ano=?, valor=?, categoria=?, ator=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($filme->getTitulo(), $filme->getano(), 
                                            $filme->getValor(), $filme->getCategoria(), $filme->getAtor(), $filme->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function Delete(int $id){
            $sql = "DELETE from filme WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 