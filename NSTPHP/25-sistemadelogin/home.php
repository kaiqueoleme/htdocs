<?php 
// Conexão 
require_once 'db_connect.php';

// Sessão
session_start();

// Verificação
if (!isset($_SESSION['logado'])) {
    header('location: index.php');
}

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página restrita</title>
</head>
<body>
    <h1> Olá <?php echo $dados['nome'] ?></h1>
    <a href="logout.php"><button>Sair</button></a>
</body>
</html>