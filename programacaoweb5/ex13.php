<?php

// Recebe os parâmetros para a alteração
$id = $_POST['id'];
$new_data = $_POST['new_data'];

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
$sql = "UPDATE mytable SET data='$new_data' WHERE id=$id";

// Executa a consulta SQL e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

// Fecha a conexão
$conn->close();

?>