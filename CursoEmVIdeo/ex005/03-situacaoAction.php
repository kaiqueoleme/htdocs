<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <a href="03-situacao.php" class="w3-display-topleft">
            <i class="fa fa-arrow-circle-left w3-large w3-indigo w3-button w3-xxlarge"></i>
        </a>
        <?php
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $m = ($nota1 + $nota2) / 2;

        echo "A média entre $nota1 e $nota2 é $m <br>";

        echo "A situação do aluno é ". (($m > 6) ? "APROVADO" : "REPROVADO");
        ?>
    </div>
</body>

</html>