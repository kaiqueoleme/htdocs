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
            $tab = isset($_GET['tab'])?$_GET['tab']:1;
            echo "Mostrando a Tabuada de $tab <br>";
            $i = 1;
            $r = 1;
            do {
                $r = $tab * $i;
                echo "$tab x $i = $r <br>";
                $i++;
            } while ($i <= 10);
        ?>
        <a href="03p1.php"><button>Voltar</button></a>
    </div>
</body>
</html>