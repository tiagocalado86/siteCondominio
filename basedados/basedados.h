<?php
//parametros de conexao
$servername = "localhost";
$username = "root";
$password = "";
$database = "utilizadores";

//faz a conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica a conexao
if (!$conn) {
    die("conexao falhou: " . mysqli_connect_error());
}
?>
