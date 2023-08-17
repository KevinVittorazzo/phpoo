<?php

$servename = "localhost";
$username = "root";
$password = "";
$databasename ="cadastro_phpoo_turmaB";

//criação de conexão
$conn = new mysqli($servename, $username, $password, $databasename);

//verificando a conexão
if(!$conn){
    die("conexão falhou".mysqli_connect_error());
}else{
    echo "conexão realizada";
}

?>