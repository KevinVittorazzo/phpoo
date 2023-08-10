<?php
class Usuario{
    // atributos da classe pessoa
    public $nome;
    public $email;
    public $senha;

    //Métodos
    function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    function get_nome(){
        return $this->nome;
    }

    function get_email(){
        return $this->nome;
    }

    function get_senha(){
        return $this->senha;
    }

}
?>