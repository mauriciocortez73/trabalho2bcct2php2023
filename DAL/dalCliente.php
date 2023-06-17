<?php
    namespace DAL;

use MODEL\Cliente;

    include_once 'conexao.php';
    include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\MODEL\cliente.php';
    
    
    class dalCliente {

        public function Select() {

          
          $con = Conexao::conectar(); 
          $sql = "select * from cliente;";

          $result = $con->query($sql); 
          $con = Conexao::desconectar();
                  
          //return $result;
       
         
          foreach($result as $linha){
               $cliente = new \MODEL\Cliente();

               $cliente->setId($linha['id']); 
               $cliente->setNome($linha['nome']);
               $cliente->setCelular($linha['celular']); 
               $cliente->setEmail($linha['email']);
               $lstCliente[]= $cliente; 

          }
          

          return $lstCliente; 
             
        }


        public function SelectID(int $id){
            $sql = "select * from cliente where id=?;";
            $pdo = Conexao::conectar(); 
            $query = $pdo->prepare($sql);
            $query->execute (array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::desconectar(); 

            $cliente = new \MODEL\Cliente(); 
            $cliente->setId($linha['id']); 
            $cliente->setNome($linha['nome']);
            $cliente->setCelular($linha['celular']); 
            $cliente->setEmail($linha['email']);

            return $cliente; 

        }

        public function Insert(\MODEL\Cliente $cliente){
            $con = Conexao::conectar(); 
            $sql = "INSERT INTO cliente (nome, celular, email) 
                   VALUES  ('{$cliente->getNome()}', '{$cliente->getCelular()}',
                            '{$cliente->getEmail()}');";
     
            $result = $con->query($sql); 
            $con = Conexao::desconectar();
            return $result; 

        }

        public function Update(\MODEL\Cliente $cliente){
            $sql = "UPDATE cliente SET nome=?, celular=?, email=? WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($cliente->getNome(), $cliente->getCelular(), 
                                            $cliente->getEmail(), $cliente->getId()));
            $con = Conexao::desconectar();
            return  $result; 
        }


        public function Delete(int $id){
            $sql = "DELETE from cliente WHERE id=?";

            $pdo = Conexao::conectar(); 
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            $query = $pdo->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
            return  $result; 
        }

    }

?> 