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
            function soma ($a, $b) {
                $s = $a + $b;
                echo "O valor da soma é $s";
            }
            soma(1,3)
        ?>
    </div>
</body>
</html>