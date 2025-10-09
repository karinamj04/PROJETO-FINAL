<?php
$servername = "localhost"; // Ou o IP do seu servidor
$username = "root";
$password = "";
$dbname = "raizesdasaude";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());

}
mysqli_close($conn); // Fecha a conexão
?>