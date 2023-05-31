<?php 
   namespace MODEL; 

   class Locacao{
        private ?string $retirada; 
        private ?string $devolucao; 
        private ?float $valor; 
        private ?int $cliente;
        private ?int $filme;
        
        public function __construct() 
        {
            
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


        public function getValor() {
            return $this->valor; 
        }

        public function setValor(float $valor){
            $this->valor = $valor; 
        }

        public function getCliente() {
            return $this->cliente; 
        }

        public function setCliente(int $cliente){
            $this->cliente = $cliente; 
        }

        public function getFilme() {
            return $this->filme; 
        }

        public function setFilme(int $filme){
            $this->filme = $filme; 
        }

   }

?>