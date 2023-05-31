<?php
    namespace BLL; 
    use DAL\dalAtor; 
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\DAL\dalAtor.php';
    
    class bllAtor {
        public function Select (){
            $dal = new  \Dal\dalAtor(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalAtor(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectID($id);
        }

        public function Insert (\MODEL\Ator $ator){

           $dal = new \DAL\dalAtor(); 

           $dal->Insert($ator);
          
        }

        public function Update (\MODEL\Ator $ator){

           // regras de negócios devem ser implementadas neste local.

           $dal = new \DAL\dalAtor(); 

           $dal->Update($ator);
          
        }

        public function Delete (int $id){

            // regras de negócios devem ser implementadas neste local.
 
            $dal = new \DAL\dalAtor(); 
 
            $dal->Delete($id);
           
         }
    }




?>