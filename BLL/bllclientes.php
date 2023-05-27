<?php
    namespace BLL; 
    use DAL\dalCliente; 
    include_once '../../DAL/dalCliente.php';
    
    class bllCliente {
        public function Select (){
            $dal = new  \Dal\dalCliente(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalCliente(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectID($id);
        }

        public function Insert (\MODEL\Cliente $cliente){
           
            //echo "Nome: {$cliente->getNome()} </br>"; 
            //echo "Aniversario: {$cliente->getAniversario()} </br>"; 
           // echo "Salario: {$cliente->getSalario()} </br>"; 

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalCliente(); 

           $dal->Insert($cliente);
          
        }

        public function Update (\MODEL\Cliente $cliente){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalCliente(); 

           $dal->Update($cliente);
          
        }

        public function Delete (int $id){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalCliente(); 
 
            $dal->Delete($id);
           
         }
    }




?>