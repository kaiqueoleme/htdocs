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
            $v[0] = 4;
            $v[1] = 8;
            $v[2] = 3;

            //print_r($v);
            $v2 = array (3,7,6,2,1,9);
            var_export($v2);
            echo "<br>";
            var_dump($v2);
            echo "<br>";
            print_r($v2);
        ?>
    </div>
</body>
</html>