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
            $p = "leite";
            $pr = 4.5;
            //echo "O $p custa R$". number_format($pr,2);
            printf("O %s custa R$ %.2f", $p, $pr);           
        ?>
    </div>
</body>
</html>