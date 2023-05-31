<?php
    namespace DAL;

use MODEL\Locacao;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\locacao.php';
    
    
    class dalLocacao {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from locacao;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          //return $result;
       
         
          foreach($result as $linha){
               $locacao = new \MODEL\Locacao();

               $locacao->setRetirada($linha['retirada']); 
               $locacao->setDevolucao($linha['devolucao']);
               $locacao->setValor($linha['valor']); 
               $locacao->setCliente($linha['cliente']);
               $locacao->setFilme($linha['filme']);
               $lstLocacao[]= $locacao; 

          }
          

          return $lstLocacao; 
             
        }


        public function SelectID(int $id){
            $sql = "select * from locacao where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $locacao = new \MODEL\Locacao(); 
            $locacao->setRetirada($linha['retirada']); 
            $locacao->setDevolucao($linha['devolucao']);
            $locacao->setValor($linha['valor']); 
            $locacao->setCliente($linha['cliente']);
            $locacao->setFilme($linha['filme']);

            return $locacao; 

        }

        public function Insert(\MODEL\Locacao $locacao){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO locacao (retirada, devolucao, valor, cliente, filme) 
                   VALUES  ('{$locacao->getRetirada()}', '{$locacao->getDevolucao()}',
                            '{$locacao->getValor()}', '{$locacao->getCliente()}', '{$locacao->getFilme()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Locacao $locacao){
            $sql = "UPDATE locacao SET retirada=?, devolucao=?, valor=?, cliente=?, filme=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($locacao->getRetirada(), $locacao->getDevolucao(), 
                                         $locacao->getValor(), $locacao->getCliente(), $locacao->getFilme()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function DElete(int $id){
            $sql = "DELETE from locacao WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 