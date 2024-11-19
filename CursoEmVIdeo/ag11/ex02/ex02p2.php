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
            $i = 1;

            while ($i <= 5) {
                $v = isset($_GET["v$i"])?$_GET["v$i"]:0;
                echo "Valor $i: $v <br>";
                $i++;
            }
        ?>
    </div>
</body>

</html>