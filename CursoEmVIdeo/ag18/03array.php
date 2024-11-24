<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div>
        <pre>
            <table class="tabela">
                <tr>
                    <?php
                    $c = range(5, 21, 2);
                    foreach ($c as $v) {
                        echo "<td> $v </td>";
                    }
                    ?>
                </tr>
            </table>
        </pre>
    </div>
</body>

</html>