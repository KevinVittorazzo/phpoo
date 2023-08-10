<?php
    class Pessoa{
        // atributos da classe pessoa
        public $nome;
        public $DataNascimento;
        public $profissao;

        //Métodos
        function __construct($nome, $DataNascimento, $profissao){
            $this->nome = $nome;
            $this->DataNascimento = $DataNascimento;
            $this->profissao = $profissao;
        }

        function get_name(){
            return $this->nome;
        }

        function get_DataNascimento(){
            $DataNascimento = $this->DataNascimento;
            $date = new DateTime($DataNascimento);
            $idade = $date->diff( new DateTime( date('Y-m-d') ) );
            $this->DataNascimento = $idade->format( '%Y');
            return $this->DataNascimento;
        }

        function get_profissao(){
            return $this->profissao;
        }

        function apresentar(){
            return "<br> Olá, meu nome é ".$this->get_name().", tenho ".$this->get_DataNascimento()." anos e minha profissão é ".$this->get_profissao();
        }
}
?>

