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
            $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento do wordwrap";
            $r = wordwrap($t, 5, "<br>\n", false);
            echo $r;
        ?>
    </div>
</body>
</html>