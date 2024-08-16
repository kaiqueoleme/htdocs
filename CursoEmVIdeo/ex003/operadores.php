<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaçoes</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "<h2>Valores recebidos: $n1 e $n2</h2>";
            echo "A soma vale ". ($n1+$n2);
            echo "<br/>A subtraçao vale ". ($n1-$n2);
            echo "<br/>A divisao vale ". ($n1/$n2);
            echo "<br/>A multiplicaçao vale ". ($n1*$n2);
            echo "<br/>Modulo vale ". ($n1%$n2);

        ?>
    </div>
</body>
</html>