<?php 
   namespace MODEL; 

   class Filme{
        private ?int $id; 
        private ?string $titulo;
        private ?string $ano;
        private ?float $valor;
        private ?string $categoria;
        private ?string $ator;

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

        public function setAno(string $ano){
            $this->ano = $ano; 
        }

        public function getValor() {
            return $this->valor; 
        }

        public function setValor(float $valor){
            $this->valor = $valor; 
        }

        public function getCategoria() {
            return $this->categoria; 
        }

        public function setCategoria(string $categoria){
            $this->categoria = $categoria; 
        }

        public function getAtor() {
            return $this->ator; 
        }

        public function setAtor(string $ator){
            $this->ator = $ator; 
        }

   }

?>