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
        <form action="02tabuada.php" method="get">
            <select name="num">
                <?php 
                    for ($c = 1; $c <= 10; $c++) {
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <button type="submit">Tabuada</button>
        </form>
    </div>
</body>

</html>