<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Listagem de Amigos - MYSQLI</title>
</head>

<body>
    <a href="index.php" class="w3-display-topleft">
        <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>
    </a>


    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'usbw';
    $dbname = 'pwii';
    $conexao = new mysqli($servername, $username, $password, $dbname);
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
    ?>
    <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
        <h1 class="w3-center w3-teal w3-round-large w3-margin">Listagem de Amigos</h1>

        <!--Inicio da tabela-->
        <table class="w3-table-all w3-centered">

            <!--Cabeçalho da tabela-->
            <thead>
                <tr class="w3-center w3-teal">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Apelido</th>
                    <th>Email</th>
                    <th>Excluir</th>
                    <th>Atualizar</th>
                </tr>
            </thead>

            <!--Corpo da tabela-->
            <tbody>
            <?php
                    //Executa uma consulta que pega os dados da tabela
                    $sql = "SELECT * FROM amigo";

                    //Query para transferir os dados para o $resultado
                    $resultado = $conexao->query($sql);

                    //Condição para verificar se os dados foram passados
                    if ($resultado != null)

                        //Estrutura de repetição para criar a tabela
                        foreach ($resultado as $linha) {
                            echo '<tr>';

                            //Dados são inseridos de acordo com as colunas da tabela 
                            echo '<td>' . $linha['id'] . '</td>';
                            echo '<td>' . $linha['nome'] . '</td>';
                            echo '<td>' . $linha['apelido'] . '</td>';
                            echo '<td>' . $linha['email'] . '</td>';
                            echo '<td><a href="excluir.php?id=' . $linha['id'] . '&nome=' . $linha['nome'] . '&apelido=' . $linha['apelido'] . '&email=' . $linha['email'] . '"><i class="fa fa-user-times w3-large w3-text-teal"></i> </a></td></td>';
                            echo '<td><a href="atualizar.php?id=' . $linha['id'] . '&nome=' . $linha['nome'] . '&apelido=' . $linha['apelido'] . '&email=' . $linha['email'] . '"><i class="fa fa-refresh w3-large w3-text-teal""></i></a></td></td>';
                            echo '</tr>';
                        }
                    echo '  </tbody>
                            </table>
                        </div>';

                    //Fecha a conexão ao banco de dados MySQL
                    $conexao->close();
                    ?>
    </div>
</body>

</html>