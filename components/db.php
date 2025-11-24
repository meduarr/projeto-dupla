<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "projeto_dupla";

// Cria a conexão
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica erros
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>