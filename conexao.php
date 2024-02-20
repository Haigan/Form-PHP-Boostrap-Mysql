<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "arquivo";


$conexao = new mysqli($host, $usuario, $senha, $banco);

if($conexao->connect_error){
	echo "Falha na conexão.";
}else{}
?>