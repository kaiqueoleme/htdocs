<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>PDO</title>
</head>

<body class="w3-blue">

    <?php
    $dsn = 'mysql:dbname=pwii; host=localhost; port=3306; charset=utf8;';
    $user = 'root';
    $password = '@Kaiqueleme17';
    try {

        $conexao = new PDO($dsn, $user, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo ("Falha ao conectar: " . $e->getMessage());
    }


    ?>
    <div class="w3-margin w3-padding w3-content w3-half w3-display-topmiddle">
        <h1 class="w3-center w3-margin w3-yellow w3-round-large">Lista de Estados</h1>
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-center w3-green w3-text-white">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Sigla</th>
                </tr>
            </thead>

            <tbody>

                <?php

                try {
                    $sql = 'SELECT * FROM estado';
                    $resultado  = $conexao->query($sql);
                    if ($resultado != null)
                        foreach ($resultado as $lista) {
                ?>
                <tr class="w3-text-black">
                    <td><?php echo $lista['idestado']; ?></td>
                    <td><?php echo $lista['nome']; ?></td>
                    <td><?php echo $lista['sigla']; ?></td>
                </tr>
                <?php
                        };
                } catch (PDOException $e) {

                    ?>
                <h1 class="w3-button w3-indigo">ERRO! </h1>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>