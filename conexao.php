<?php
$servername = "localhost"; // Servidor do banco de dados
$username = "root"; // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "lanchonete"; // Nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
