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
            $b = &$a;
            $b += 5;
            echo $a;
            echo "<br/>". $b;
        ?>
    </div>
</body>
</html>