<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

    <!--Div para animação da tabela, adicionar responsividade, centralizar e ocupar 1/3 da tela-->
    <div class="w3-third w3-animate-top w3-responsive w3-center ">

        <?php
        // Declarando os Arrays bidimensionais para os dados da turma
        $turma = array(
            array("Aline", "10", "9.5"),
            array("Alfredo", "8", "5"),
            array("Carla", "5", "6.5"),
            array("César", "9", "9"),
            array("Daniel", "10", "7"),
            array("Esnar", "8", "6"),
            array("Henzo", "6", "8"),
            array("Pablo", "7", "5"),
            array("Wallace", "8", "7"),
            array("Zulmira", "10", "6")
        );
        ?>

        <!--Criando a Tabela-->
        <table class="w3-table-all">

            <!--Número hexadecimal &#176; para representar o símbolo em caso de incompatibilidade do navegador-->
            <caption class="w3-blue w3-xxxlarge">8&#176; ano A</caption>

            <!--Cabeçalho da tabela-->
            <tr class="w3-blue">
                <th class="w3-center">Nome</th>
                <th class="w3-center">Primeiro Semestre</th>
                <th class="w3-center">Segundo Semestre</th>
            </tr>

            <!--Dados da Tabela-->
            <?php foreach ($turma as $alunos) { //Transforma o array bidimensional ($turma) em um array unidimensional ($alunos)
            ?>
                <tr>
                    <?php foreach ($alunos as $aluno) { //Transforma o array unidimensional($alunos) em uma variável ($aluno)
                    ?>
                        <!--Os dados serão acrescentados para formar a tabela-->
                        <td class="w3-center"><?php echo $aluno ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>