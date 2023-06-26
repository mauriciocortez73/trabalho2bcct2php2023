<?php
    namespace BLL; 
    use DAL\dalEmpfilme; 
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\DAL\dalEmpfilme.php';
    
    class bllEmpfilme {
        public function Select (){
            $dal = new  \Dal\dalEmpfilme(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalEmpfilme(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectID($id);
        }

        public function Insert (\MODEL\Empfilme $empfilme){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalEmpfilme(); 

           $dal->Insert($empfilme);
          
        }

        public function Update (\MODEL\Empfilme $empfilme){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalEmpfilme(); 

           $dal->Update($empfilme);
          
        }

        public function Delete (int $id){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalEmpfilme(); 
 
            $dal->Delete($id);
           
         }
    }




?>