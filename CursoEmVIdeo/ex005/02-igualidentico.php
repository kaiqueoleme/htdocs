<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "iguais? SIM" : "idênticas? NÃO";
        echo "As váriaveis A e B são $r"; 
        ?>
    </div>
</body>

</html>