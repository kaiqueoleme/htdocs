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
        function soma($a, $b)
        {
            return $a + $b;
        }
        $x = 3;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";
        ?>
    </div>
</body>

</html>