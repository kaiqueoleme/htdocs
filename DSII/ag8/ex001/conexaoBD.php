<?php require_once ('verificarAcesso.php');?>
<?php

$servername = "localhost";
$username = "root";
$password = "@Kaiqueleme17";
$dbname = "pwii";
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}
