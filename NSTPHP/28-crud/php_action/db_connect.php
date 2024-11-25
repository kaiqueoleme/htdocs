<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "@Kaiqueleme17";
$dbname = "crud";
try {
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($connect, "utf8");
} catch (Exception $ex) {
    echo "<h1> Erro na conexão: <h1>". $ex->getMessage();
}