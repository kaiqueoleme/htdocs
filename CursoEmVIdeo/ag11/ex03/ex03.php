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
            $inicio = isset($_GET['n1'])?$_GET['n1']:1;
            $fim = isset($_GET['n2'])?$_GET['n2']:10;
            $incremento = isset($_GET['incremento'])?$_GET['incremento']:1;

            if ($inicio < $fim) {
                while ($inicio <= $fim) {
                    echo "$inicio ";
                    $inicio += $incremento;
                }
            } else {
                while ($inicio >= $fim) {
                    echo "$inicio ";
                    $inicio -= $incremento;
                }
            }

            
        ?>
    </div>
</body>
</html>