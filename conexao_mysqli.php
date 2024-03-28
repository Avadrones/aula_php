<?php

$host = "localhost"; // Caminho do banco (IP ou DNS)
$user = "root"; // Usuário
$pass = ""; // Senha
$dbname = "ordem_servico"; // Nome do Banco

$conn = mysqli_connect($host, $user, $pass, $dbname); // Variavel que vai conectar no banco de dados

if ($conn) {
   // echo "Banco de dados conectado com sucesso";
} else {
    echo "Falha ao conectar Banco de Dados";
}

?>