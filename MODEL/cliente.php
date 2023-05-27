<?php 
   namespace MODEL; 

   class Cliente{
        private ?int $id; 
        private ?string $nome; 
        private ?string $celular; 
        private ?string $email;
        
        public function __construct() 
        {
            
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getNome() {
            return $this->nome; 
        }

        public function setNome(string $nome){
            $this->nome = $nome; 
        }


        public function getCelular() {
            return $this->celular; 
        }

        public function setCelular(string $celular){
            $this->celular = $celular; 
        }

        public function getEmail() {
            return $this->email; 
        }

        public function setEmail(string $email){
            $this->email = $email; 
        }

   }

?>