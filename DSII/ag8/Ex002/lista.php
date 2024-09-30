<?php require_once 'verificarAcesso.php'; ?>
<?php require_once 'conexaoBD.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lista</title>
</head>

<body>
    <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-topright">
        <form action="logout.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large w3-right w3-margin-right">
                <i class="w3-xxlarge fa fa-times-rectangle"> </i> Logout
            </button>
        </form>
    </div>
    <div class="w3-margin w3-padding w3-display-topmiddle w3-content w3-half">
        <h1 class="w3-center w3-cyan w3-text-white w3-round-large w3-margin">Professores</h1>

        <table class="w3-table-all w3-centered">
            <thead>
                <tr class="w3-cyan w3-center w3-text-white">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Disciplina</th>
                </tr>
            </thead>

            <tbody>
                <?php

                $sql = "SELECT * FROM professor;";

                $resultado = $connect->query($sql);

                if ($resultado != null) {
                    foreach ($resultado as $linha) {
                ?>
                        <tr>
                            <td><?php echo $linha['idprofessor'] ?></td>
                            <td><?php echo $linha['nome'] ?></td>
                            <td><?php echo $linha['disciplina'] ?></td>
                        </tr>

                <?php
                    }
                }

                ?>
            </tbody>

        </table>
    </div>
</body>

</html>