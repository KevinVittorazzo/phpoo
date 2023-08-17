<?php
class Usuario{
    // atributos da classe pessoa
    private $conn;
    private $nome;
    private $email;
    private $senha;

    //Métodos
    function __construct($conn){
        $this->conn = $conn;
    }

    function get_nome(){
        return $this->nome;
    }

    function set_nome(){
        return $this->nome;
    }

    function get_email(){
        return $this->email;
    }

    function set_email(){
        return $this->email;
    }

    function get_senha(){
        return $this->senha;
    }

    function set_senha(){
        return $this->senha;
    }

    function cadastrar($nome, $email, $senha){
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senhaHash);

        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

}
?>