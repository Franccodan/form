<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $usuario, $password, $database);

if(!$conexao) {
    print "falha na conexão com DB";
}

?>