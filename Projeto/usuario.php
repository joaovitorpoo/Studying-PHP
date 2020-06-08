<?php 
    class usuario {
        private $login;
        private $senha;
        public function getLogin(){
            return $this->login;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setLogin($login) {
            $this->login = $login;
        }
        public function setSenha($senha) {
            $this->senha = $senha;
        }
        public function validarSenha($senha) {
            if ($this->senha == $senha) {
                return true;
            }else{
                return false;
            }
        }
    }
?>