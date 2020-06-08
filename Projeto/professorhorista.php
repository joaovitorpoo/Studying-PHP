<?php 
    include __DIR__.'/professor.php';
    class ProfessorHorista extends Professor {
        private $horasTrabalhadas;
        private $valorHora;

        public function __construct($nome,$idade,$matricula){
            $this->nome = $nome; 
            $this->idade = $idade;
            $this->matricula = $matricula;
            $this->horasTrabalhadas = $horasTrabalhadas;
            $this->valorHora = $valorHora;
        }
        public function getHorasTrabalhadas(){
            return $this->horasTrabalhadas;
        }
        public function getValorHora(){
            return $this->valorHora;
        }
        public function setValorHora($valorHora) {
            $this->valorHora = $valorHora;
        }
        public function setHorasTrabalhadas($horasTrabalhadas) {
            $this->horasTrabalhadas = $horasTrabalhadas;
        }
        public function calcularSalario() {
            $valor = $this->valorHora * $this->horasTrabalhadas;
            return $valor;
        }
        public function __toString(){
            return "O professor "+$this->nome+" ganha "+$this->calcularSalario();
        }
    }
?>