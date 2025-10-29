<?php
$servername = "localhost"; // Ou o IP do seu servidor
$username = "root";
$password = "";
$dbname = "raizesdasaude";

// Cria a conexão
$conexao = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conexao) {
    die("Falha na conexão: ".mysqli_connect_error());
};
?>