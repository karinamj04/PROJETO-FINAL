<?php
header('Content-Type: application/json'); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "raizesdasaude";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode([
        "ok" => false,
        "mensagem" => "Erro na conexão com o banco de dados."
    ]);
    exit();
}

$cpf = $_POST['cpf'] ?? '';
$cpf = preg_replace('/[^0-9]/', '', $cpf); 

if (empty($cpf)) {
    echo json_encode([
        "ok" => false,
        "mensagem" => "CPF não informado."
    ]);
    exit();
}

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE cpf = ?");
$stmt->bind_param("s", $cpf);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode([
        "ok" => true,
        "existe" => true,
        "mensagem" => "CPF encontrado!"
    ]);
} else {
    echo json_encode([
        "ok" => true,
        "existe" => false,
        "mensagem" => "CPF não encontrado."
    ]);
}

$stmt->close();
$conn->close();
?>