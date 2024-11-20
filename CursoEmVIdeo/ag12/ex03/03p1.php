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
        <form action="03p2.php" method="get">
            Número: <select name="tab" >
                
                <?php
                $i = 1;
                while ($i <= 10) {
                    echo "<option value='$i'>$i</option>";
                    $i++;
                }
                ?>
            </select>
            <button type="submit">Tabuada</button>
        </form>

    </div>
</body>

</html>