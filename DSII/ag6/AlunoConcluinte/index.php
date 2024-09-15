<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Aluno Concluinte</title>
</head>

<body class="w3-blue">
    <?php

    //Váriaveis para armazenar o nome do servidor, nome do usuário, senha e nome do banco de dados
    $servername = 'localhost';
    $username = 'root';
    $password = '@Kaiqueleme17';
    $dbname = 'pwii';

    //Conexão ao banco de dados MySQL
    $conexao = new mysqli($servername, $username, $password, $dbname);

    //Verificar se a conexão foi realizada
    if ($conexao->connect_error) {
        die("Connection Failed: " . $conexao->connect_error);
    }
    ?>

    <div class="w3-margin w3-padding w3-display-topmiddle w3-content w3-half">
        <h1 class="w3-center w3-cyan w3-text-white w3-round-large w3-margin">Alunos Concluintes</h1>

        <!--Inicio da tabela-->
        <table class="w3-table-all w3-centered">

            <!--Cabeçalho da tabela-->
            <thead>
                <tr class="w3-cyan w3-center w3-text-white">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Nota3</th>
                    <th>Nota4</th>
                    <th>Média</th>
                </tr>
            </thead>

            <!--Corpo da tabela-->
            <tbody>

                <?php

                //Executa uma consulta que pega os dados da tabela
                $sql = "SELECT * FROM alunoconcluinte";

                //Query para transferir os dados para o $resultado
                $resultado = $conexao->query($sql);

                //Condição para verificar se os dados foram passados
                if ($resultado != NULL) {

                    //Estrutura de repetição para criar a tabela
                    foreach ($resultado as $linha) {
                ?>
                <tr class="w3-center w3-text-black">

                    <!--Dados são inseridos de acordo com as colunas da tabela `alunoconcluinte`-->
                    <td> <?php echo $linha['idalunoc']; ?> </td>
                    <td> <?php echo $linha['nome']; ?> </td>
                    <td> <?php echo $linha['nota1']; ?> </td>
                    <td> <?php echo $linha['nota2']; ?> </td>
                    <td> <?php echo $linha['nota3']; ?> </td>
                    <td> <?php echo $linha['nota4']; ?> </td>
                    <td> <?php echo $linha['media']; ?> </td>
                </tr>
                <?php
                    }
                }

                //Fecha a conexão ao banco de dados MySQL
                $conexao->close();
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>