<?php
// Conexão com o banco de dados usando a classe PDO
$dsn = 'mysql:host=localhost;dbname=Produto';
$username = 'usuario';
$password = 'senha';

try {
    $conexao = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
}