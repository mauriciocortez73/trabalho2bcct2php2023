<?php
    namespace DAL;

use MODEL\Empfilme;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\empfilme.php';
    
    
    class dalEmpfilme {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from Empfilme;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          //return $result;
       
         
          foreach($result as $linha){
               $empfilme = new \MODEL\Empfilme();

               $empfilme->setId($linha['id']); 
               $empfilme->setFilme($linha['filme']);
               $empfilme->setRetirada($linha['retirada']); 
               $empfilme->setDevolucao($linha['devolucao']);
               $empfilme->setValor($linha['valor']);
               $lstEmpfilme[]= $empfilme; 

          }
          

          return $lstEmpfilme; 
             
        }


        public function SelectID(int $id){
            $sql = "select * from empfilme where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $empfilme = new \MODEL\Empfilme(); 
            $empfilme->setId($linha['id']); 
            $empfilme->setFilme($linha['filme']);
            $empfilme->setRetirada($linha['retirada']); 
            $empfilme->setDevolucao($linha['devolucao']);
            $empfilme->setValor($linha['valor']);

            return $empfilme; 

        }

        public function Insert(\MODEL\Empfilme $empfilme){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO empfilme (filme, retirada, devolucao, valor) 
                   VALUES  ('{$empfilme->getFilme()}', '{$empfilme->getRetirada()}',
                            '{$empfilme->getDevolucao()}', '{$empfilme->getValor()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Empfilme $empfilme){
            $sql = "UPDATE empfilme SET filme=?, retirada=?, devolucao=?, valor=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($empfilme->getFilme(), $empfilme->getRetirada(), 
                                            $empfilme->getDevolucao(), $empfilme->getValor(), $empfilme->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function Delete(int $id){
            $sql = "DELETE from empfilme WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 