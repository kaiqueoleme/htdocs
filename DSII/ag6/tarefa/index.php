<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Tabela Jogos</title>
</head>

<body class="w3-black">
    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '@Kaiqueleme17';
        $dbname = 'pwii';

        $conexao = new mysqli($servername, $username, $password, $dbname);

        if ($conexao->connect_error) {
            die("Connection failed: ". $conexao->connect_error);
        }
        /*
        $servername = 'localhost';
        $username = 'root';
        $password = '@Kaiqueleme17';
        $dbname = 'pwii';
        $conexao = new mysqli($servername, $username, $password, $dbname);

        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }
            */
    ?>

    <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
        <h1 class="w3-center w3-orange w3-round-large w3-margin">Listagem de Jogos</h1>
        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-orange w3-center">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Fabricante</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM jogos";

                $resultado = $conexao->query($sql);

                if ($resultado != NULL) {
                    foreach ($resultado as $linha) {
                        ?>
                        <tr class="w3-center w3-text-black">
                            <td><?php echo $linha['id'] ?></td>
                            <td><?php echo $linha['nome'] ?></td>
                            <td><?php echo $linha['fabricante'] ?></td>
                        </tr>
                        <?php
                    }
                }
                $conexao->close();
                ?>
            </tbody>

        </table>

    </div>
</body>

</html>