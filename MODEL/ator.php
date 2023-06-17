<?php 
   namespace MODEL; 

   class Ator{
        private ?int $id; 
        private ?string $nome_artistico; 
        private ?string $nome_real; 
        private ?string $nascimento;

        public function __construct() 
        {

        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getNomeArtistico() {
            return $this->nome_artistico; 
        }

        public function setNomeArtistico(string $nome_artistico){
            $this->nome_artistico = $nome_artistico; 
        }

        public function getNomeReal() {
            return $this->nome_real; 
        }

        public function setNomeReal(string $nome_real){
            $this->nome_real = $nome_real; 
        }

        public function getNascimento() {
            return $this->nascimento; 
        }

        public function setNascimento(string $nascimento){
            $this->nascimento = $nascimento; 
        }

   }

?>