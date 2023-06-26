<?php 
   namespace MODEL; 

   class Empfilme{
        private ?int $id; 
        private ?string $filme; 
        private ?string $retirada; 
        private ?string $devolucao;
        private ?float $valor;
        
        public function __construct() 
        {
            
        }

        public function getId() {
            return $this->id; 
        }

        public function setId(int $id){
            $this->id = $id; 
        }

        public function getFilme() {
            return $this->filme; 
        }

        public function setFilme(string $filme){
            $this->filme = $filme; 
        }


        public function getRetirada() {
            return $this->retirada; 
        }

        public function setRetirada(string $retirada){
            $this->retirada = $retirada; 
        }

        public function getDevolucao() {
            return $this->devolucao; 
        }

        public function setDevolucao(string $devolucao){
            $this->devolucao = $devolucao; 
        }

        public function getValor(){
            return $this->valor;  
        }
        
        public function setValor(float $valor){
            $this->valor = $valor; 
        }

   }

?>