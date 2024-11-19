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
        <form action="ex02p2.php" method="get">
            <?php
            $i = 1;
            while ($i <= 5) {
                echo "Valor $i: <input type='number' name='v$i' max='100' min='0' value='0'> <br>";
                $i++;
            }
            ?>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>