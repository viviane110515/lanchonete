<?php
    Class Autenticacao{
        var $usuario=null;
        var $senha=null;
        var $email=null;
        var $pergunta=null;
        
        public function __construct($email,$usuario,$senha, $pergunta){
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->email= $email;
            $this->pergunta= $pergunta;
        }

        public function getusuario(){
            return $this->usuario;
        }

        public function getSenha(){
            return $this->senha;
        }


        public function getEmail(){
            return $this->email;
        }

        public function getpergunta(){
            return $this->pergunta;
        }

    }
?>