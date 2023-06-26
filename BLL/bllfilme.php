<?php
    namespace BLL; 
    use DAL\dalFilme; 
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\DAL\dalFilme.php';
    
    class bllFilme {
        public function Select (){
            $dal = new  \Dal\dalFilme(); 
            //linhas de código com regras de negócio
           
            return $dal->Select();
        }

        public function SelectID (int $id){
            $dal = new  \Dal\dalFilme(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectID($id);
        }

        public function Insert (\MODEL\Filme $filme){

           $dal = new \Dal\dalFilme(); 

           $dal->Insert($filme);
          
        }

        public function Update (\MODEL\Filme $filme){

           $dal = new \Dal\dalFilme(); 

           $dal->Update($filme);
          
        }

        public function Delete (int $id){
 
            $dal = new \DAL\dalFilme(); 
 
            $dal->Delete($id);
           
         }
    }




?>