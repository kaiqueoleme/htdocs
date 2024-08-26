<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Ternario Resultado</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-container w3-teal">
        <h1>
            <?php
            echo "" . $_POST['txtNome'] . " ! <br>";
            ?>
            Na promoção de aniversário você ganhou
            <?php 
                $valor_total = $_POST['txtValorTotal'];
                echo $valor_total > 500 ? "20%" : "10%"; 
            ?>
            de desconto!
        </h1>
    </div>
</body>

</html>