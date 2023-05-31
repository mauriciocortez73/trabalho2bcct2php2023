<?php
    namespace BLL; 
    use DAL\dalLocacao; 
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\DAL\dalLocacao.php';
    
    class bllLocacao {
        public function Select (){
            $dal = new  \Dal\dalLocacao(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectID (string $retirada){
            $dal = new  \Dal\dalLocacao(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectID($retirada);
        }

        public function Insert (\MODEL\Locacao $locacao){

           $dal = new \DAL\dalLocacao(); 

           $dal->Insert($locacao);
          
        }

        public function Update (\MODEL\Locacao $locacao){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalLocacao(); 

           $dal->Update($locacao);
          
        }

        public function Delete (string $retirada){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalLocacao(); 
 
            $dal->Delete($retirada);
           
         }
    }




?>