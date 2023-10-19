<?php
require "conexao.php";
require "Autenticacao.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $login = new autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);
    if ($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nomesuario"] = $usuario["nome"];
        header("Location: ../visao/index.php");
        exit;
    }else{

        header("Location: ../visao/login.php?erro=1");
    }
}
?>