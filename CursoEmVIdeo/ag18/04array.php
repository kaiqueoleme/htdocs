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
        <pre>
            <?php
                /*$v = array (
                    3=> 5,
                    1=> 9,
                    0=> 8,
                    7=> 7
                );
                unset($v[0]);*/

                $v = array (
                    "nome" => "Ana",
                    "idade" => 23,
                    "peso" => 65.5
                );
                foreach ($v as $k => $c) {
                    echo "O campo $k possui o conteúdo $c <br>";
                }
            ?>
        </pre>
    </div>
</body>
</html>