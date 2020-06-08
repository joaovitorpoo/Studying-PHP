<?php

include __DIR__.'/professor.php';

class ProfessorFixo extends Professor {
        private $salarioFixo;

        public function __construct($nome,$idade,$matricula,$salarioFixo){
            $this->nome = $nome; 
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->salarioFixo = $salarioFixo;
        }
        public function getSalarioFixo(){
            return $this->salarioFixo;
        }
        public function setSalarioFixo($salarioFixo) {
            $this->salarioFixo = $salarioFixo;
        }
        public function __toString(){
            return "O professor "+$this->nome+" ganha "+$this->salarioFixo;
        }
        
    }
?>