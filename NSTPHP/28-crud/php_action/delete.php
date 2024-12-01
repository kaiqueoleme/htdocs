<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
try {
    if (isset($_POST['btn_deletar'])) {
        
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "DELETE FROM clientes WHERE id = '$id'";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Deletado com sucesso!";
            header('Location: ../index.php');
        }
    }
} catch (Exception $ex) {
    $_SESSION['mensagem'] = "Erro ao deletar";
    header('Location: ../index.php');
}
