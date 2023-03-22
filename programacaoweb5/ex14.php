<?php

// Recebe o parâmetro para a remoção
$id = $_POST['id'];

// Conecta ao banco de dados
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Constrói a consulta SQL
$sql = "DELETE FROM mytable WHERE id=$id";

// Executa a consulta SQL e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// Fecha a conexão
$conn->close();

?>






