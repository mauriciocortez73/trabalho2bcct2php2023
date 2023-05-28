<?php 
   namespace MODEL; 

   class Filme{
        private ?int $id; 
        private ?string $titulo;
        private ?date $ano;
        private ?float $valor;
        private ?string $categoria;
        private ?int $ator;
        
        public function __construct() 
        {
            
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getTitulo() {
            return $this->titulo; 
        }

        public function setTitulo(string $titulo){
            $this->titulo = $titulo; 
        }

        public function getAno() {
            return $this->ano; 
        }

        public function setValor(date $ano){
            $this->ano = $ano; 
        }

        public function getAno() {
            return $this->ano;
        }

        public function setValor(float $valor){
            $this->valor = $valor; 
        }

        public function getCategoria() {
            return $this->categoria; 
        }

        public function setEmail(string $categoria){
            $this->categoria = $categoria; 
        }

        public function getAtor() {
            return $this->ator; 
        }

        public function setAtor(int $ator){
            $this->ator = $ator; 
        }

   }

?>