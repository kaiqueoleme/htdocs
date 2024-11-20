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
            $v = isset($_GET['val'])?$_GET['val']:1;
            echo "<h1>Calculando o fatorial de $v</h1>";
            $i = $v;
            $f = 1;
            do {
                $f *= $i;
                $i--;
            }while ($i >= 1);

            if ($f == 0) {
                $f = 1;
            }
            echo "<h2>$v ! = $f </h2>";

            
        ?>
        <p><a href="ex02.html"><button>Voltar</button></a></p>
    </div>
</body>
</html>