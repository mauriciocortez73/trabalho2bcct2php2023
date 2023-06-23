<?php
    namespace BLL; 
    use DAL\dalUsuario; 
    include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\DAL\dalUsuario.php';
    
    class bllUsuario {
   
        public function SelectUser (string $usuario){
            $dal = new  \Dal\dalUsuario(); 
            //linhas de código com regras de negócio
           
            return $dal->SelectUser($usuario);
        }
    }
?>