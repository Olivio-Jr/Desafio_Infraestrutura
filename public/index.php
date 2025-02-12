<?php
$servername = "172.31.32.187"; // Ou o IP do banco de dados, se estiver rodando em outro contêiner/servidor
$username = "root"; // O usuário que você criou no MySQL
$password = "861601"; // A senha que você definiu
$database = "Bancojr"; // O nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>

