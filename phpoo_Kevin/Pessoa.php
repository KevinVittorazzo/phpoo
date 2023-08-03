<?php
    class Pessoa{
        // atributos da classe pessoa
        public $nome;
        public $idade;
        public $profissao;

        //Métodos
        function __construct($nome, $idade, $profissao){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->profissao = $profissao;
        }

        function get_name(){
            return $this->nome;
        }

        function get_idade(){
            return $this->idade;
        }

        function get_profissao(){
            return $this->profissao;
        }

        function apresentar(){
            return "<br> Olá, meu nome é ".$this->get_name().", tenho ".$this->get_idade()." anos e minha profissão é ".$this->get_profissao();
        }
}
?>
