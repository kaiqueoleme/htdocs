<?php require_once ('verificarAcesso.php');?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Exclusão - MYSQLI</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle" id="eProfissional">
        <?php
        require_once 'conexaoBD.php';
        $sql = "DELETE FROM amigo WHERE id = '" . $_POST['txtID'] . "';";

        if ($conexao->query($sql) === TRUE) {
        ?>
            <a href="listar.php">
                <h1 class="w3-button w3-teal">Amigo Excluido com sucesso! </h1>
            </a>
        <?php

        } else {
        ?>
            <a href="listar.php">
                <h1 class="w3-button w3-teal">ERRO! </h1>
            </a>
        <?php
        }
        $conexao->close();
        ?>
    </div>
</body>

</html>